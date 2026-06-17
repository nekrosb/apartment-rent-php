<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\City;

class Apartment extends Model
{
    /** @use HasFactory<\Database\Factories\ApartmentFactory> */
    use HasFactory;
    protected $fillable = ['title', 'description', 'address', 'price', 'bedrooms', 'bathrooms', 'user_id', 'city_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
