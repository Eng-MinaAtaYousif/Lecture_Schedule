<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class assestant_actions extends Controller
{
    public function assestant_make_suggestion_page(Request $req)
    {




        return view('actions.assestant_action.make_suggestion', ['req' => $req]);
    }


    public function assestant_make_publish_suggestion_page(Request $req)
    {
        date_default_timezone_set("Africa/Cairo");
        $date =  date("Y-m-d");
        $time = date('h:m:sa');
        DB::table('suggestions')->insert([

            'username' => $req->username,
            'suggestion' => $req->suggestion,
            'date' => $date,
            'time' => $time
        ]);



        return view('actions.assestant_action.make_suggestion', ['req' => $req]);
    }

    public function assestant_see_schedule_page(Request $req)
    {
        return view('actions.assestant_action.see_schedule', ['req' => $req]);
    }
}
