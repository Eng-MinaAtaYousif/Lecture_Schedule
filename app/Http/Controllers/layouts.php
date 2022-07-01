<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class layouts extends Controller
{
    public function student(Request $req)
    {

        return view('layouts.student', ['req' => $req]);
    }
    public function admin(Request $req)
    {

        $count = DB::table('suggestions')->count();
        return view('layouts.admin', ['req' => $req, 'count' => $count]);
    }
    public function assestant(Request $req)
    {
        return view('layouts.assestant', ['req' => $req]);
    }
    public function doctor(Request $req)
    {

        $suggest =  $req->suggestion;
        $seeing = $req->seeing;

        DB::table('suggestions')->insert([
            'suggestion' => $suggest,
        ]);

        return view('layouts.doctor', ['req' => $req]);
    }
}
