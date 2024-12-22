<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','author','category','year','quantity'];// liet ke cac cot co the dien vao CSDL
    
}
