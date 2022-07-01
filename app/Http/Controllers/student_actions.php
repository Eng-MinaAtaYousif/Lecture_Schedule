<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;

class student_actions extends Controller
{
     public function get_student_action_see_schedule_page (Request $req){
        return view('actions.student_action.see_schedule',['req'=>$req]) ;
     }
     public function get_student_action_department_info_page (Request $req){

      //  $materials = Material::with('material')->get();

       $data = DB::table('students')->where(['username'=>$req->username])->get();

      // $materials =Student::with('material')->get();

        return view('actions.student_action.department_info',['req'=>$req,'data'=>$data]) ;
     }
}
