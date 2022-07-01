<?php

namespace App\Http\Controllers;


use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor_or_assestant ;

class comments extends Controller
{
    public function not (Request $req){
      
       
        
        $posts = Suggestion::with('post')->get();


        $count = DB::table('suggestions')->count();
      
        

         return view('actions.admin_action.not',['req'=>$req,'posts'=>$posts,'count'=>$count,'paginate' => DB::table('suggestions')->paginate(10)]) ;
     
        
    }
    public function delete (Request $req){
            
        $posts = Suggestion::with('post')->get();


        $count = DB::table('suggestions')->count();
       
        DB::table('suggestions')->delete();

        //  DB::table('suggestions')->paginate(10)
         return view('actions.admin_action.not',['req'=>$req,'posts'=>$posts,'count'=>$count,'paginate' => DB::table('suggestions')->paginate(10) ]) ;
     
        
    
    }


 }
