<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class admin_actions extends Controller
{
    public function admin_create_schedule(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.create_schedule', ['req' => $req, 'count' => $count]);
    }
    public function admin_delete_id(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.delete_or_modify_id', ['req' => $req, 'count' => $count]);
    }
    public function admin_modify_id(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.delete_or_modify_id', ['req' => $req, 'count' => $count]);
    }
    public function admin_add_student(Request $req)
    {

        $count = DB::table('suggestions')->count();

        return view('actions.admin_action.add_student', ['req' => $req, 'count' => $count]);
    }


    public function admin_add_doctor_or_assestant(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.add_doctor_or_assestant', ['req' => $req, 'count' => $count]);
    }
    public function admin_edit_schedule(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.edit_schedule', ['req' => $req, 'count' => $count]);
    }
    public function admin_see_schedule(Request $req)
    {
        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.see_schedule', ['req' => $req, 'count' => $count]);
    }
    public function admin_search(Request $req)
    {

        $count = DB::table('suggestions')->count();
        return view('actions.admin_action.search', ['req' => $req, 'count' => $count]);
    }
    public function admin_modify_information(Request $req)
    {
        return view('actions.admin_action.modify_information', ['req' => $req]);
    }
}
