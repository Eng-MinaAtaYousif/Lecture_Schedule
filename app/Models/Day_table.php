<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject ;

class Day_table extends Model
{
    use HasFactory ;
    protected $table = "day_tables";

    public function day_subject (){
        return $this->hasMany(Subject::class,'id');
    }
    
}
