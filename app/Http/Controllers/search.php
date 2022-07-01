<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class search extends Controller
{
    public function search_data (Request $req){
        $id = $req -> id ;
        $username  = $req -> username ;
        $password = $req -> password ;
     //   $doctor_or_assestants =  DB::select('select * from doctor_or_assestants where _ID_= ?',[$req->id]);

       $D_o_A =  DB::table('doctor_or_assestants')->where('_ID_',$id)->get();
       $students =  DB::table('students')->where('_ID_',$id)->get();

       $count = DB::table('suggestions')->count();

        return view('actions.search_data',['D_o_A' => $D_o_A,'students'=>$students,'req'=>$req,'count'=>$count]);
    }


    public function search_data_by_username_and_password (Request $req){
   
        $username  = $req -> uname ;
        $password = $req -> psw ;
         

    //    $doctor_or_assestants =  DB::select('select * from doctor_or_assestants where _ID_= ?',[$req->id]);

       $D_o_A =  DB::table('doctor_or_assestants')->where(['username'=>$username , 'password'=>$password])->get();
       $students =  DB::table('students')->where(['username'=>$username , 'password'=>$password])->get();

       $count = DB::table('suggestions')->count();

        return view('actions.search_data_username_password',['D_o_A' => $D_o_A,'students'=>$students,'req'=>$req,'count'=>$count]);
    }

   public function get_all_students(Request $req)
   {

      $students =  DB::table('students')->get();

      $count = DB::table('suggestions')->count();

     
      return view('actions.admin_action.get_all_students',['students'=>$students,'req'=> $req,'count'=>$count]);
     
   }
}
