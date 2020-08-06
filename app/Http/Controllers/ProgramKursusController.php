<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramKursusController extends Controller
{
    public function kursus(){

        $program_kursus = DB::table('program_kursuses')->get();
        // dd($program_kursus);

        return view('admin/admin_program_kursus',compact(
            'program_kursus'
        ));
    }

    //cara 1 menginisialisasi kelas pada parameter
    // cara ini disebut dgn dependency injection
    public function createkursus(Request $request){
        $request->validate([
            'nama' => 'required|string|max:20',
            'masa_studi' => 'required|string|max:11',
            'harga' => 'required|integer|max:11',
            'kuota' => 'required|integer|max:11'
        ]);
        //Request digunakan untuk menangani data yg masuk
        //cara 2 membuat inisialisasi class seperti biasanya
        // $request = new Request;
        // dd($request);

        //CARA 1
        DB::table('program_kursuses')->insert([
            'nama'=>$request->nama,
            'masa_studi'=>$request->masa_studi,
            'harga'=>$request->harga,
            'kuota'=>$request->kuota
        ]);
        return redirect()->back();
    }
}
