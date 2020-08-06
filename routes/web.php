<?php

use App\Http\Middleware\CheckSessionCookie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route:
// - method (get,post)
// - path (/ , /register)
// - callback function
Route::get('/','LandingPageController@index');
Route::get('/admin_register','AdminController@showRegister');
Route::get('/admin_dashboard','AdminController@dashboard');
Route::get('/admin_detail_siswa/{id}','AdminController@detail');
Route::get('/admin_inbox','InboxController@inbox');
Route::post('/contact/create','InboxController@CreateContact');
// Route::post('/user/create','AdminController@CreateUser');

Route::post('/user_register/create','UserController@CreateUser');
Route::get('/user_register','UserController@showRegister');
// Route::get('/user_register','UserController@register');
Route::post('/login','UserController@login');
Route::get('/logout','UserController@logout');

Route::delete('/admin_inbox_delete/{id}','InboxController@InboxDelete');

// routing yg digunakan untuk ngubah status inbox
//id digunakan untuk update data pada tabel yg akan di ubah
Route::patch('/admin_inbox_ubah_status/{id}','InboxController@UbahStatusInbox');

Route::get('/admin_inbox_sudah_dibaca','InboxController@sudahbaca');

//mane ddigunakan untuk memberi nama padsa routing
//pemanggilan pada view menggunakan fungsi route('nama-routing)
Route::post('/admin_login','AdminController@adminLogin');
Route::view('/admin_login','admin/admin_login')->name('admin-login-action');
Route::get('/admin_logout','AdminController@Adminlogout');

Route::get('/admin_program_kursus','ProgramKursusController@kursus');

//untuk menangani create
Route::post('/admin_program_kursus/create','ProgramKursusController@createkursus');

Route::get('/admin_program_kursus_edit/{id}','ProgramKursusController@edit')->name('programkursus.edit');
Route::put('/admin_program_kursus_update/{id}','ProgramKursusController@update')->name('programkursus.update');
Route::delete('/admin_program_kursus/destroy{id}','ProgramKursusController@destroy')->name('programkursus.destroy');

Route::get('/admin_sertifikasi','AdminController@sertifikasi');


Route::get('/user_dashboard','UserController@dashboard');

Route::get('/user_ganti_password', function () {
    return view('user/user_ganti_password');
});
Route::get('/user_login', function () {
    return view('user/user_login');
});
Route::get('/user_pengaturan','UserController@pengaturan');
Route::post('/user/setting','UserController@setting')->name('user.setting');


// Route::get('/user_register', function () {
//     return view('user/user_register');
// });
Route::get('/user_sertifikat', function () {
    return view('user/user_sertifikat');
});

Route::get('/session-cookie',function(){

});

Route::post('/admin-cari','AdminController@cari');

