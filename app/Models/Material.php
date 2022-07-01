<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student ;
class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    public function material (){
        return $this->belongsTo(Student::class,'department');
    }
}
