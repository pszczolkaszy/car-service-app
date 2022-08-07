<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'production_year',
        'registration_year',
        'vin',
        'plate',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
