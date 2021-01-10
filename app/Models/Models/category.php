<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $table = 'categories';

   protected $fillable= [
           'name_ar','name_en'
       ];
}
