<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'posted',
        'name',
        'detail'
    ];

    //protected $table = 'users_posts'; jei skiriasi klases pavadinimas nuo DB lenteles pavadinimo

    //protected $primaryKey = 'post_id'; jei primary key yra ne laukas "id"

    //protected $keyType = 'string'; jei zr. zemiau

    //public $incrementing = false; jei primary key nedideja automotiskai, nera skaicius
}
