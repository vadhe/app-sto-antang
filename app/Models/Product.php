<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model

{
    use HasFactory, SoftDeletes;


    protected $table = "products";
    protected $primaryKey = 'id';


    protected $fillable = ['name', 'description', 'indeks', 'jumlah'];
}

// {

// use HasFactory, SoftDeletes;


//     protected $table = "products";
 
//     protected $fillable = ['name', 'description', 'indeks', 'jumlah', 'total'];
// }