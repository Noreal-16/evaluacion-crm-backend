<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pares extends Model
{
    use HasFactory;
    protected $fillable = ['objetive', 'arrays', 'pairs'];
}
