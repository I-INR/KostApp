<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutkost extends Model
{
    use HasFactory;
    protected $fillable = [
        'iduser',
        'idfasili',
        'name',
        'description',
        'address',
        'mainP',
        'secondP',
        'roomP',
    ];
}
