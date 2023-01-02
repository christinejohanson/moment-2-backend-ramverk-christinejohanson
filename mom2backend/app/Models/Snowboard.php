<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snowboard extends Model
{
    use HasFactory;
    //fält till db tabellen
    protected $fillable = [
        'name',
        'length',
        'gender'
    ];
}
