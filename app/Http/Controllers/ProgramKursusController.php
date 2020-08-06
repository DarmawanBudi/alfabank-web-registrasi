<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ProgramKursus;


class ProgramKursusController extends Controller
{
    public function kursus(){

        // $program_kursus = DB::table('program_kursuses')->get();
        $program_kursus = ProgramKursus::get();
        return view('admin/admin_program_kursus',compact(
            'program_kursus'
        ));
    }

    //cara 1 menginisialisasi kelas pada parameter
    // cara ini disebut dgn dependency injection
    public function createkursus(Request $request){
        $request->validate([
            'nama' => 'required|string|max:20',
            'masa_studi' => 'required|string|max:244',
            'harga' => 'required|integer|max:99',
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

    public function destroy($id)
    {
        // dd($id);
        $programkursus = ProgramKursus::find($id);
        $programkursus->delete();
        return redirect()->back();
    }

    public function edit($id){
        
        $programkursus = ProgramKursus::find($id);
        return view('admin/admin_program_kursus_update', compact('programkursus'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'string|max:20',
            'masa_studi' => 'string|max:244',
            'harga' => 'integer|max:99',
            'quota' => 'integer|max:11'
        ]);
        $programkursus = ProgramKursus::find($id);
        $programkursus->nama = $request->name?:$request->nama;
        $programkursus->masa_studi = $request->study_period?:$request->masa_studi;
        $programkursus->harga = $request->price?:$request->harga;
        $programkursus->kuota = $request->quota?:$request->kuota;

        $programkursus->update();
        return redirect()->back();
    }
}
