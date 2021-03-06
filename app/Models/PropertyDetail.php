<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'PID',
        'address',
        'username',
    ];

    protected $table = 'property_details';
}
