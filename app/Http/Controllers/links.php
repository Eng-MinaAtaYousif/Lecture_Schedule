<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class links extends Controller
{
    public function media (Request $req){



        return view('links.media.social',['req'=>$req]);

    }


    public function testpage (Request $req){

        $file = $req -> file('data') ;
        return view('links.media.testpage',[
            'req'=>$req,
            'file'=>$file
        ]);
    }


}
