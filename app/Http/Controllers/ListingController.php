<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Apartment;
use App\Models\Image;
use App\Models\City;
use App\Models\User;
use App\Http\Requests\StoreApartmentRequest;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $cities = City::all();
        return view('bookings.listing', compact('cities'));
    }

    public function store(StoreApartmentRequest $request)
    {
        DB::beginTransaction();

        try {
            $apartment = Apartment::create([
                'title' => $request->title,
                'description' => $request->description,
                'address' => $request->address,
                'price' => $request->price,
                'bedrooms' => $request->bedrooms,
                'bathrooms' => $request->bathrooms,
                'user_id' => Auth::id(),
                'city_id' => $request->city_id
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
