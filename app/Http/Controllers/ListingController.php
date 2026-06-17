<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Apartment;
use App\Models\Image;
use App\Models\City;
use App\Models\User;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::all();
        return view('bookings.listing', compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'price' => 'required|numeric',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'city' => 'required|exists:cities,id',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:10480'
        ]);

        DB::beginTransaction();

        try {
            $apartment = Apartment::create([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                'bedrooms' => $request->rooms,
                'bathrooms' => $request->bathrooms,
                'user_id' => Auth::id(),
                'city_id' => $request->city
            ]);

            $storedPaths = [];

            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) {
                    $path = $photo->store("public/apartment_photos/{$apartment->id}");
                    $storedPaths[] = $path;

                    Image::create([
                        'image_path' => $path,
                        'apartment_id' => $apartment->id
                    ]);
                }
            }

            DB::commit();

            return redirect()
                ->route('dashboard')
                ->with('success', 'Apartment listed successfully!');
        } catch (\Throwable $e) {
            DB::rollBack();


            if (!empty($storedPaths)) {
                foreach ($storedPaths as $path) {
                    Storage::delete($path);
                }
            }

            return redirect()
                ->back()
                ->withErrors(['error' => 'Failed to list apartment. Please try again.']);
        }
    }
}
