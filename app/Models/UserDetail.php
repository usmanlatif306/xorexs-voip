<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'city', 'country', 'postcode', 'prison_fname', 'prison_lname', 'prison_number', 'prison_status', 'release_date', 'prison_relation'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'release_date' => 'date',
    ];
}
