<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suggestion ;

class Doctor_or_assestant extends Model
{
    use HasFactory;

    protected $table = 'doctor_or_assestants';
 
    public function doc_sugg(){
        return $this->hasMany(Doctor_or_assestant::class,'id');
    }
}
