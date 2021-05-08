<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'tenant_username',
        "landlord_username",
        "PID",
        "Review",
        'start_date',
        'end_date',
    ];
    use HasFactory;
    protected $table = 'tenants';
}
