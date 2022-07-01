<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Day_table;
use App\Models\Hall;
use App\Models\Timetable;

class tables extends Controller
{
    public function create(Request $req)
    {


        $los         = $req->LoS;
        $name        = $req->name;
        $level       = $req->level;
        $department  = $req->department;
        $day         = $req->day;
        $time_from   = $req->time_from;
        $time_to     = $req->time_to;
        $subject_name = $req->subject;
        $subject_id  = $req->subject_id;
        $hall_floor  = $req->hall_floor;
        $hall_number = $req->hall_number;

        if (DB::table('subjects')->where([

            'level'        => $level,
            'from'         => $time_from,
            'to'            => $time_to,
            'day'           => $day,
            // 'hall_number'   => $hall_number,
            // 'hall_floor'    => $hall_floor

        ])->exists()) {
            return view('actions.admin_action.error_load', ['req' => $req]);
        }
        if (DB::table('subjects')->where([

            'level'         => $level,
            'from'           => $time_from,
            'to'            => $time_to,
            'day'           => $day,
            'hall_number'   => $hall_number,
            'hall_floor'    => $hall_floor



        ])->doesntExist()) {



            DB::table('subjects')->insert([
                'name'         => $name,
                'LoS'          => $los,
                'subject_name' => $subject_name,
                'subject_id'   => $subject_id,
                'level'        => $level,
                'department'   => $department,
                'from'         => $time_from,
                'to'         => $time_to,
                'day'        => $day,
                'hall_number'   => $hall_number,
                'hall_floor'    => $hall_floor

            ]);


            DB::table('halls')->insert([
                'hall_number'   => $hall_number,
                'hall_floor'    => $hall_floor
            ]);


            DB::table('day_tables')->insert([
                'day'    =>  $day
            ]);




            DB::table('timetables')->insert([

                'from' => $time_from,
                'to'   => $time_to,
            ]);




            DB::table('materials')->insert([
                'material_name' => $subject_name,
                'material_id' => $subject_id,
                'department' => $department
            ]);

            $relation_day = Day_table::with('day_subject')->get();
            $relation_hall = Hall::with('hall')->get();

            $count = DB::table('suggestions')->count();



            foreach ($relation_hall as $myhall) {
                $hall = $myhall;
            }

            return view('tables.create', ['relation_day' => $relation_day, 'hall' => $hall, 'req' => $req, 'count' => $count]);
        }
    }

    // ********************************************************************


    public function edit(Request $req)
    {

        $old_time_from = $req->old_time_from;
        $old_time_to = $req->old_time_to;
        $old_level       = $req->old_level;
        $old_day         = $req->old_day;


        $los         = $req->LoS;
        $name        = $req->name;
        $level       = $req->level;
        $department  = $req->department;
        $day         = $req->day;
        $time_from   = $req->time_from;
        $time_to     = $req->time_to;
        $subject_name = $req->subject;
        $subject_id  = $req->subject_id;
        $hall_floor  = $req->hall_floor;
        $hall_number = $req->hall_number;



        DB::table('subjects')->where([
            'from' => $old_time_from,
            'to' => $old_time_to,
            'level' => $old_level,
            'day' => $old_day
        ])->update([


            'name'         => $name,
            'LoS'          => $los,
            'subject_name' => $subject_name,
            'subject_id'   => $subject_id,
            'level'        => $level,
            'department'   => $department,
            'from'         => $time_from,
            'to'         => $time_to,
            'day'        => $day,
            'hall_number'   => $hall_number,
            'hall_floor'    => $hall_floor

        ]);


        $relation_day = Day_table::with('day_subject')->get();
        $relation_hall = Hall::with('hall')->get();


        $count = DB::table('suggestions')->count();

        return view('tables.create', ['relation_day' => $relation_day, 'req' => $req, 'count' => $count]);
    }
    // ********************************************************************


    public function delete(Request $req)
    {


        $count = DB::table('suggestions')->count();

        return view('tables.delete', ['req' => $req, 'count' => $count]);
    }
    public function show(Request $req)
    {

        $level = $req->level;
        $department = $req->department;
        // DB::table('users')->where([

        // ])->delete();
        DB::table('subjects')->where([
            'level' => $level,
            'department' => $department
        ])->delete();


        $relation_day = Day_table::with('day_subject')->get();


        $count = DB::table('suggestions')->count();

        return view('tables.create', ['relation_day' => $relation_day, 'req' => $req, 'count' => $count]);
    }
}
