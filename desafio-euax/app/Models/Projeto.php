<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $dates = ['inicio', 'fim'];

    protected $fillable = [
        'projeto',
        'inicio',
        'fim',
        'user_id'
    ];
}
