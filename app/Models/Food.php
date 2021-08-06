<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // protected $fillable = array('id');
    // protected $fillable = array('name');
    // protected $fillable = array('protein', "name", "id");

    protected $guarded = array('id');

    protected $table = 'foods';

}
