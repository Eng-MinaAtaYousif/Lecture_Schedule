<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Student ; 

class admin_actions_update extends Controller
{
    public function admin_update_student(Request $req)
    {


        $count = DB::table('suggestions')->count();

        return view('actions.admin_action.update.update_student', ['req' => $req, 'count' => $count]);
    }
    public function admin_update_doc_or_ass(Request $req)
    {
        $count = DB::table('suggestions')->count();

        return view('actions.admin_action.update.update_doc_or_ass', ['req' => $req, 'count' => $count]);
    }
}
