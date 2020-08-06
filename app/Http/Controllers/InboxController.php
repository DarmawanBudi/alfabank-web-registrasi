<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use Illuminate\Support\Facades\DB;

class InboxController extends Controller
{
    public function inbox(){

        // 2. instansiasikan class Inbox
        $inbox = new Inbox;

        // 3. lakukan query
        $all_inbox = $inbox->where('status','belum_dibaca')->orderBy('created_at','desc')->get();
        $jumlah_all_inbox = $all_inbox->count();
      
        return view('admin/admin_inbox',compact('all_inbox','jumlah_all_inbox'));
    }

    public function sudahbaca(){
        $inbox = new Inbox;
        $all_inbox = $inbox->where('status','belum_dibaca')->orderBy('created_at','desc')->get();
        $jumlah_all_inbox = $all_inbox->count();
        
        $inbox_read = $inbox->where('status','sudah_dibaca')->orderBy('created_at','desc')->get();
        return view('admin/admin_inbox_sudah_dibaca',compact('inbox_read','jumlah_all_inbox'));
    }

    public function UbahStatusInbox($id){
        // instansiasi
        // find digunakan untuk mrmbuat data berdasarkan id,
        // secara default akan menemukan data dalam database dengan attribut id (primary key)
        $inbox = Inbox::find($id);
        $inbox->status = "sudah_dibaca";
        $inbox->save();
        //fungsi save digunakan untuk menyiapkan perubahan yg dilakukan
        return redirect()->back();
        
    }

    public function CreateContact(Request $request){
        $request->validate([
            'nama' => 'required|string|max:60',
            'email' => 'required|string|max:100',
            'subjek' => 'required|string|max:100',
            'pesan' => 'required|string'
        ]);
        DB::table('inboxes')->insert([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'subjek'=>$request->subjek,
            'pesan'=>$request->pesan,
            
        ]);
        return redirect()->back();
    }

    public function InboxDelete($id){
        Inbox::destroy($id);
        return redirect()->back();
    }
}
