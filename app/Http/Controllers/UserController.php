<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use App\User;
use App\ProgramKursus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegister() {
        //mengambil data program kursus dan menampilkannya di register
        $program_kursuses = ProgramKursus::get();
        return view('user/user_register',compact('program_kursuses'));
    }

    public function register(User $user, Request $request) {
        //membuat inser pada tabel user dan pendaftaran
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->image = $request->image;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->agama = $request->agama;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->password = bcrypt($request->password);
        $user->save();

        Pendaftaran::insert([
            'id_user'=>$user->id,
            'id_program_kursus'=>$request->program_kursus
        ]);
        return redirect()->to('login');
    }

    public function CreateUser(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required',
            'agama' => 'required',
            // 'program_kursus' => 'required|string|max:255',
            'password' => 'required'
        ]);
        User::insert([
            //bcrypt adalah fungsi global yg digunakan untuk mengenkripsi data
            'nama'=>$request->nama,
            'email'=>$request->email,
            'telepon'=>$request->telepon,
            'alamat'=>$request->alamat,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'gender'=>$request->gender,
            'agama'=>$request->agama,
            // 'program_kursus'=>$request->program_kursus,
            'password'=>bcrypt($request->password)
            // 'password'=>'secret'
            
        ]);
        return redirect()->to('user_login');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        //tahap 1 : pengecekan kredensial
        //kredensial adalah email dan password

        //cara lama menngunakan query builder
        $pengecekan = DB::select("SELECT * 
        FROM users WHERE email = '$request->email' AND password = '$request->password'");

        //cara agak baru query builder
        $query_builder = DB::table('users')
        ->where('email','=',$request->email)
        ->where('password','=',$request->password)
        ->get();

        //CARA LOGIN KETIKA PASSWORD TIDAK DI ENKRIPSI
        //cara terbaru
        // $pengecekan_eloquent = User::where('email','=',$request->email)
        // ->where('password','=',$request->password)
        // ->first();

        // if($pengecekan_eloquent){
        //     //tahap 2
        //     //menyimpan informasi user yang sedang login dalam session
        //     //menyimpan informasi user email ke dalam session
        //     session(['user_email'=>$pengecekan_eloquent->email]);
        //     // dd(session('user_email'));

        //     //menyimpan informasi email cookie
        //     $user_cookie = cookie('user_email', $pengecekan_eloquent->email,45000);

        //     //ini mengarahkan ke vie dashboart tanpa mengganti routing
        //     // return response()->view('user/user_dashboard')->withCookie($user_cookie);

        //     //mengarahkan ke routing dan juga menganti view
        //     return redirect()->to('/user_dashboard')->withCookie($user_cookie);
        // }
        // else {
        //     return'login gagal';
        // }

        //CARA LOGIN DENGAN PASSWORD TERENKRIPSI
        // 1. mendapatkan data berdasarkan email  yg diinputkan
        $dataUser = User::where('email','=',$request->email)->first();
        // 2. ambil password
        // 3. kita check dengan Hash::check
        //Hash::check digunakan untuk mengecek password yang kita inputkan
        //dengan password terenkripsi yg tersimpan dalam tabel user
        //return / kembalian dari fungsi ini adalah true dan false
        //menghasilkan true apabila passwordnya cocok
        //menghasillkan false apabila passwordnya tidak cocok
        // $checkPassword = Hash::check($request->password, $dataUser->password);

        // //4. lakukan set cookie dan session
        // if($checkPassword){
        //     session(['user_email'=>$dataUser->email]);
        //     $user_cookie=cookie('user_email',$dataUser->email,120);
        //     return redirect()->to('/user_dashboard')->withCookie($user_cookie);
        // } else {
        //     return redirect()->back();
        // }

        $email = $request->email;
        $password = $request->password;

        $userLogin = Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);
        if ($userLogin) {
            session(['user_email' => $dataUser->email]);
            $user_cookie = cookie('user_email', $dataUser->email,120);
            return redirect()->to('user_dashboard')->withCookie($user_cookie);
            // dd($userLogin);
        } else {
            return redirect()->back();
        }

    }

    public function dashboard(Request $request){
        //Auth::User digunakan untuk mendapatkan informasi user yg sedang login
        //menyimpan informasi user yg sedang login pada variabel lalu dikirimkan ke view kita
        //Auth::check()     | digunakan untuk mengecek apakah user sedang login atau tidak
        //Auth::logout()    | digunakan untuk melakukan logout
        //Auth::id()        | digunakan untuk menampilkan id
        //cara 1
        $user_info = Auth::user();
        return view('user/user_dashboard', compact('user_info'));
    //    //pengecekan session yg tersimpan dan cookie yg ada di browser
    //    $cookie_browser = $request->cookie('user_email');
    //    $session_server = $request->session()->get('user_email');
       
    //    //mengecek apakah cookie dan session kosong atau tidak
    //    if($cookie_browser && $session_server) {
    //        //jika tidak kosong kita cek nilainya sama atau tidak
    //        if($cookie_browser == $session_server){
               
    //        }
    //    }
    //    else{
    //        //jika session dan cooki kosong kita arahkan ke login
    //        return redirect()->to('/user_login');
    //    }
    }

    public function logout(Request $request){
        //cara menghapus session
        $request->session()->forget('user_email');

        //arahkan ke landing page
        return redirect()->to('/');
    }
    
    public function pengaturan(){
        return view('user/user_pengaturan');
    }

    public function setting(Request $request){
        // dd($request->all());

        //kita simpan image yang dikirim dari form ke variabel $image
        $image = $request->file('image');

        //me rename nama fil dengan waktu saat image di upload, 
        $image_name = time(). '.' .$image->getClientOriginalExtension();
        // dd($image_name);

        //membuat folder untuk menyimpan fil yg di upload
        $folder_penyimpanan =storage_path('app/public/image');

        //menyimpan image yang dikirim dari form ke folder yang sudah didefinisikan 
        $image->move($folder_penyimpanan,$image_name);
    }
}
