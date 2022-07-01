<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;



class user_auth_Controller extends Controller
{
    public function show_login_page()
    {
        return view('user_auth.login');
    }
    public function reset_password_page()
    {
        return view('user_auth.reset_password');
    }
    public function show_type_of_layouts(Request $req)
    {
        // $req -> validate([
        //     'username'=>['required'],
        //     'password'=>['required'],
        //     'type'=>['required']

        // ]);

        // after html required attribute then this validation becoume no more useful ; 
        $username = $req->username;
        $password = $req->password;

        switch ($req->type) {
            case 'student':

                if ($req->isMethod('POST')) {

                    if (DB::table('students')->where(['username' => $username, 'password' => $password])->exists()) {

                        return view('layouts.student', ['req' => $req, 'date' => date('Y/m/d h:i:s')]);
                    }
                    if (DB::table('students')->where(['username' => $username, 'password' => $password])->doesntExist()) {
                        return view('user_auth.error');
                    }
                }


                // return view ('layouts.student') ;

                break;
            case 'admin':

                // *********************************
                if ($req->isMethod('POST')) {

                    if (DB::table('admins')->where(['username' => $username, 'password' => $password])->exists()) {
                        $count = DB::table('suggestions')->count();
                        return view('layouts.admin', ['req' => $req, 'count' => $count]);
                    }
                    if (DB::table('admins')->where(['username' => $username, 'password' => $password])->doesntExist()) {
                        return view('user_auth.error');
                    }
                }

                //  return view('layouts.admin');

                // *********************************

                break;
            case 'assestant':
                if ($req->isMethod('POST')) {

                    if (DB::table('doctor_or_assestants')->where(['username' => $username, 'password' => $password, 'D_or_A' => 'assestant'])->exists()) {
                        return view('layouts.assestant', ['req' => $req]);
                    }
                    if (DB::table('doctor_or_assestants')->where(['username' => $username, 'password' => $password, 'D_or_A' => 'assestant'])->doesntExist()) {
                        return view('user_auth.error');
                    }
                };
                break;
            case 'doctor':
                if ($req->isMethod('POST')) {

                    if (DB::table('doctor_or_assestants')->where(['username' => $username, 'password' => $password, 'D_or_A' => 'doctor'])->exists()) {

                        return view('layouts.doctor', ['req' => $req]);
                    }
                    if (DB::table('doctor_or_assestants')->where(['username' => $username, 'password' => $password, 'D_or_A' => 'doctor'])->doesntExist()) {
                        return view('user_auth.error');
                    }
                }
                break;
        }
    }


    public function your_password_page(Request $req)
    {

        $username = $req->uname;
        $email    = $req->email;
        $id       = $req->_id_;


        $data =  DB::table('students')->select('username', 'password')->where([
            'username' => $username,
            'email' => $email,
            '_ID_' => $id
        ])->get();


        $data2 =  DB::table('doctor_or_assestants')->select('username', 'password')->where([
            'username' => $username,
            'email' => $email,
            '_ID_' => $id
        ])->get();


        return view('user_auth.your_password', ['data' => $data, 'data2' => $data2]);
    }

    // class end

}
