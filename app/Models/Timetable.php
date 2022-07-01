<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = "timetables";
    
    public function time_table(){
        return $this->hasOne(Subject::class,'id');
    }
}
