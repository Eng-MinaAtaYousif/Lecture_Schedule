<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_auth_Controller;
use App\Http\Controllers\student_actions;
use App\Http\Controllers\doctor_actions;
use App\Http\controllers\assestant_actions;
use App\Http\Controllers\admin_actions;
use App\Http\Controllers\admin_actions_update;
use App\Http\Controllers\comments;
use App\Http\Controllers\layouts;
use App\Http\Controllers\links;
use App\Http\Controllers\search;
use App\Http\Controllers\status;
use App\Http\Controllers\tables;


// login page 
Route::get('/', [user_auth_Controller::class, 'show_login_page'])->name('user_auth.login_page');

// reset password page
Route::get('/reset_password', [user_auth_Controller::class, 'reset_password_page'])->name('user_auth.reset_password_page');
Route::match(['get', 'post'], '/your_password', [user_auth_Controller::class, 'your_password_page'])->name('user_auth.your_password_page');

// choose any layout page 
Route::post('/layouts', [user_auth_Controller::class, 'show_type_of_layouts']);

// all layouts 

Route::match(['get', 'post'], '/layouts/{username}/doctor', [layouts::class, 'doctor'])->name('doctor');
Route::match(['get', 'post'], '/layouts/{username}/student', [layouts::class, 'student'])->name('student');
Route::match(['get', 'post'], '/layouts/{username}/assestant', [layouts::class, 'assestant'])->name('assestant');
Route::match(['get', 'post'], '/layouts/{username}/admin', [layouts::class, 'admin'])->name('admin');




// student actions pages 

Route::match(['get', 'post'], '/student/{username}/see_schedule', [student_actions::class, 'get_student_action_see_schedule_page'])->name('student_see_schedule');
Route::match(['get', 'post'], '/student/{username}/department_info', [student_actions::class, 'get_student_action_department_info_page'])->name('student_department_info');



// doctor actions 

Route::match(['get', 'post'], '/doctor/{username}/see_schedule', [doctor_actions::class, 'doctor_see_schedule_page'])->name('doctor_see_schedule');
Route::match(['get', 'post'], 'doctor/{username}/make_suggestion', [doctor_actions::class, 'doctor_make_suggestion_page'])->name('suggestion');



Route::match(['get', 'post'], 'doctor/{username}/publich_suggestion', [doctor_actions::class, 'doctor_make_publish_suggestion_page'])->name('doc_publish_suggestion');



// assestant actions 

Route::match(['get', 'post'], '/assestant/{username}/see_schedule', [assestant_actions::class, 'assestant_see_schedule_page'])->name('ass_see_schedule');
Route::match(['get', 'post'], '/assestant/{username}/make_suggestion', [assestant_actions::class, 'assestant_make_suggestion_page'])->name('ass_suggestion');

Route::match(['get', 'post'], 'assestant/{username}/publich_suggestion', [assestant_actions::class, 'assestant_make_publish_suggestion_page'])->name('ass_publish_suggestion');


// admin actions 
Route::match(['get', 'post'], '/admin/{username}/create_schedule', [admin_actions::class, 'admin_create_schedule'])->name('admin_create_schedule');
Route::match(['get', 'post'], '/admin/{username}/delete_id', [admin_actions::class, 'admin_delete_id'])->name('admin_delete_id');
Route::match(['get', 'post'], '/admin/{username}/modify_id', [admin_actions::class, 'admin_modify_id'])->name('admin_modify_id');
Route::match(['get', 'post'], '/admin/{username}/add_student', [admin_actions::class, 'admin_add_student'])->name('admin_add_student');
Route::match(['get', 'post'], '/admin/{username}/add_doctor_or_assestant', [admin_actions::class, 'admin_add_doctor_or_assestant'])->name('admin_add_doctor_or_assestant');
Route::match(['get', 'post'], '/admin/{username}/see_schedule', [admin_actions::class, 'admin_see_schedule'])->name('admin_see_schedule');
Route::match(['get', 'post'], '/admin/{username}/edit_schedule', [admin_actions::class, 'admin_edit_schedule'])->name('admin_edit_schedule');
Route::match(['get', 'post'], '/admin/{username}/search', [admin_actions::class, 'admin_search'])->name('admin_search');
Route::match(['get', 'post'], '/admin/{username}/modify_information', [admin_actions::class, 'admin_modify_information'])->name('admin_modify_information');
Route::match(['get', 'post'], '/admin/{username}/Notifications', [comments::class, 'not'])->name('not');
Route::match(['get', 'post'], '/admin/{username}/Notifications/{page}', [comments::class, 'not'])->name('not_page');
// Route::match(['get','post'],'/admin/{username}/create_schedule/error',[admin_actions::class,'error_load'])->name('error_load');



// notification actions 

Route::match(['get', 'post'], '/admin/{username}/Notification/delete', [comments::class, 'delete'])->name('delete');
// Route::match(['get','post'],'/admin/{username}/Notifications',[comments::class,'check_all'])->name('check_all');
Route::match(['get', 'post'], '/admin/{username}/Notification/doctors', [comments::class, 'doctors'])->name('doctors');
// Route::match(['get','post'],'/admin/{username}/Notifications',[comments::class,'assestans'])->name('assestans');
// Route::match(['get','post'],'/admin/{username}/Notifications',[comments::class,'students'])->name('students');


// success status 
Route::match(['get', 'post'], '/admin/{username}/Success_add_student', [status::class, 'acept_add_student'])->name('admin_success_add_student');
Route::match(['get', 'post'], '/admin/{username}/Success_add_D_o_A', [status::class, 'acept_add_d_o_a'])->name('admin_success_add_D_o_A');


// admin actions update 
Route::match(['get', 'post'], '/admin/update/student', [admin_actions_update::class, 'admin_update_student'])->name('admin_update_');
Route::match(['get', 'post'], '/admin/update/doc_or_ass', [admin_actions_update::class, 'admin_update_doc_or_ass'])->name('admin_update_doc_or_ass');


// search data
Route::match(['get', 'post'], '/admin/{username}/search_data', [search::class, 'search_data'])->name('search_by_id');
Route::match(['get', 'post'], '/admin/{username}/search_data_by_username_and_password', [search::class, 'search_data_by_username_and_password'])->name("search_by_uname_pas");

// get all students 
Route::match(['get', 'post'], '/admin/{username}/all_students', [search::class, 'get_all_students'])->name('get_all_st');


// deleting id 
Route::match(['get', 'post'], '/admin/{username}/delete_s_or_d_or_a_id', [status::class, 'delete_id'])->name('admin_del_s_a_d');
Route::match(['get', 'post'], '/admin/{username}/modify_s_or_d_or_a_id', [status::class, 'modify_id'])->name('admin_modify_a_s_d');



// tables => create , show , edit , delete 

Route::match(['get', 'post'], '/admin/{username}/create_table', [tables::class, 'create'])->name('creation');
Route::match(['get', 'post'], '/admin/{username}/show_table', [tables::class, 'show'])->name('show_table');
Route::match(['get', 'post'], '/admin/{username}/edit_table', [tables::class, 'edit'])->name('edit_table');
Route::match(['get', 'post'], '/admin/{username}/delete_table', [tables::class, 'delete'])->name('delete_table');
