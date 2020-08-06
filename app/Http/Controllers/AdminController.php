<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 1. import model inbox
use App\Inbox;
use App\User;
use App\InputKursus;
use App\Pendaftaran;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function cari(Request $request) {
        
        $keyword = $request->keyword;
        $cari_data = Pendaftaran::where('nama','LIKE',"%keyword%")->get();
        // dd($cari_data);
    }

    public function AdminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->to('/');
    }
    
    public function adminLogin(Request $request) {
        $login = Auth::guard('admin')->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        if($login){
            return redirect()->to('admin_dashboard');
        } else {
            return redirect()->back();
        }
    }

    public function dashboard(){
        // $user_data = Pendaftaran::with(['users','program_kursuses'])->paginate(5);
        // return view('admin/admin_dashboard', compact('user_data'));

        //cara biasa
        $cek = Auth::guard('admin')->check();
        if ($cek) {
            $user_data = Pendaftaran::with(['users','program_kursuses'])->paginate();
             return view('admin/admin_dashboard', compact('user_data'));
        } else {
            return redirect()->to('/');
        }
    }
    public function detail($id){
        //find digunakan untuk mencari data berdasarkan primary key
        //kalau menggunakan where lebih fleksibel,
        //bisa untuk mencari primary key dan juga attribut lain

        //first () digunakan untuk mengamboil data pertama paling atas

        //konsep ini juga disebutdengan eager loading
        //dimana relasi ditulis saat query
        $detail_data = Pendaftaran::with(['users','program_kursuses'])->find($id);
        
        return view('admin/admin_detail_siswa', compact('detail_data'));
    }


    public function login(){
        return view('admin/admin_login');
    }


    
    public function sertifikasi(){
        $user_sertifikasi = Pendaftaran::with(['users','program_kursuses'])->where('status', '=', 'masa_studi')->paginate(5);

        return view('admin/admin_sertifikasi', compact('user_sertifikasi'));
    }

    public function CreateUser(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string|max:255'
        ]);
        DB::table('users')->insert([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'telepon'=>$request->subjek,
            'alamat'=>$request->pesan
            
        ]);
        return redirect()->back();
    }

}
