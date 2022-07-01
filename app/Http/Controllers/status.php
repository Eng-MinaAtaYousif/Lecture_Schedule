<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class status extends Controller
{
    public function acept_add_student(Request $req)
    {
        $req->validate([

            'name' => ['required'],
            'id' => ['required', 'max:8', 'min:8'],
            'uname' => ['required'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'max:11', 'min:11'],
            'department' => ['required'],
            'level' => ['required']
        ]);
        $name = $req->name;
        $id = $req->id;
        $username = $req->uname;
        $password = $req->password;
        $email = $req->email;
        $phone = $req->phone;
        $department = $req->department;
        $level = $req->level;
        if (DB::table('students')->where('username', $username)->exists() || DB::table('students')->where('_ID_', $id)->exists() || DB::table('students')->where('phone', $phone)->exists() || DB::table('students')->where('email', $email)->exists()) {
            return view('actions.admin_action.student_error', ['req' => $req]);
        }


        if (DB::table('students')->where([
            'name' => $name,
            'username' => $username,
            'department' => $department,
            'level' => $level,
            '_ID_' => $id,
            'password' => $password,
            'email' => $email,
            'phone' => $phone,
        ])->doesntExist()) {


            DB::insert('insert into students (name,_ID_,username,password,phone,email,department,level) values (?,?,?,?,?,?,?,?)', [$name, $id, $username, $password, $phone, $email, $department, $level]);
            $count = DB::table('suggestions')->count();

            return view('actions.acept', ['req' => $req, 'count' => $count]);
        }
    }
    public function acept_add_d_o_a(Request $req)
    {
        $req->validate([

            'DoA' => ['required'],
            'name' => ['required'],
            'id' => ['required', 'max:10', 'min:8'],
            'uname' => ['required'],
            'password' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'max:11', 'min:11'],
            'department' => ['required'],

        ]);
        $name = $req->name;
        $id = $req->id;
        $username = $req->uname;
        $password = $req->password;
        $email = $req->email;
        $phone = $req->phone;
        $department = $req->department;
        $DoA = $req->DoA;
        if (DB::table('doctor_or_assestants')->where('username', $username)->exists() || DB::table('doctor_or_assestants')->where('_ID_', $id)->exists() || DB::table('doctor_or_assestants')->where('phone', $phone)->exists() || DB::table('doctor_or_assestants')->where('email', $email)->exists()) {
            return view('actions.admin_action.doc_error', ['req' => $req]);
        }




        if (DB::table('doctor_or_assestants')->where([
            'username' => $username,
            '_ID_' => $id,
            'email' => $email,
            'phone' => $phone,
        ])->doesntExist()) {
            DB::insert('insert into doctor_or_assestants (D_or_A,_ID_,name,username,password,email,phone,department) values (?,?,?,?,?,?,?,?)', [$DoA, $id, $name, $username, $password, $email, $phone, $department]);

            $count = DB::table('suggestions')->count();

            return view('actions.acept_d_o_a', ['req' => $req, 'count' => $count]);
        }
    }

    public function delete_id(Request $req)
    {
        $req->validate([
            'id' => ['required', 'max:10', 'min:8']
        ]);

        $delete_id = $req->id;
        DB::table('students')->where('_ID_', $delete_id)->delete();
        DB::table('doctor_or_assestants')->where('_ID_', $delete_id)->delete();

        $count = DB::table('suggestions')->count();

        return view('actions.admin_action.delete_id', ['req' => $req, 'count' => $count]);
    }
    public function modify_id(Request $req)
    {
        $req->validate([


            'name' => ['required'],
            'old_id' => ['required', 'max:10', 'min:8'],
            'new_id' => ['required', 'max:10', 'min:8'],
            'password' => ['required'],
            'email' => ['required', 'email'],

        ]);
        $name = $req->name;
        $old_id = $req->old_id;
        $email = $req->email;
        $password = $req->password;
        $new_id = $req->new_id;

        // $delete_id = $req -> id ;
        DB::table('students')->where(['name' => $name, 'email' => $email, 'password' => $password, '_ID_' => $old_id])->update([
            '_ID_' => $new_id
        ]);
        DB::table('doctor_or_assestants')->where(['name' => $name, 'email' => $email, 'password' => $password, '_ID_' => $old_id])->update([
            '_ID_' => $new_id
        ]);
        // $students =  DB::table('students')->get();

        $count = DB::table('suggestions')->count();


        return view('actions.admin_action.search', ['req' => $req, 'count' => $count]);
    }
}
