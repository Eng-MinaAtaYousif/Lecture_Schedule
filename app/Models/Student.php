<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material ;

class Student extends Model
{
   protected $table = 'students' ;

   public function material(){
      return $this->hasMany(Material::class,'id');
   }
 
}
