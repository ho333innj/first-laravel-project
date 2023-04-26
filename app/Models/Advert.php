<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;
   protected $fillable=['City_ID','Category_ID','User_ID','Title','Describtion','price'];
}
