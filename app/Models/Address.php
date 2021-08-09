<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'doctors_addresses';
    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'postal_code',
    ];
}
