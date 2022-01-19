<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';

    protected $fillable = [
        'raca','nome','porte','image',
    ];
}
