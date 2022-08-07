<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nip',
        'email',
        'phone',
        'address_city',
        'address_code',
        'address_street',
        'address_number',
        'address_local',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
