<?php

namespace App\Http\Controllers;

use App\Models\Dropoff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DropoffController extends Controller
{
    function tampil(){
        return view("dropoff"); // Menampilkan view dropoff.blade.php
    }
    
    function submit(Request $request){
        try {
            $dropoff = new Dropoff();
            $dropoff->name = Auth::user()->name;
            $dropoff->phone_number = Auth::user()->phone;
            $dropoff->address = Auth::user()->address;
            $dropoff->point = $request->point;
            $dropoff->status = 'pending';
            $dropoff->save();

            return redirect()->route('dropoff')->with('success', 'Data berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->route('dropoff')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function adminDropoff()
    {
        $dropoffs = Dropoff::all();
        return view('admin.dropoff', compact('dropoffs')); 
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $dropoff = Dropoff::findOrFail($id);
            $dropoff->status = $request->status;
            
            if ($request->status == 'success') {
                // Point tetap jika diterima
                $dropoff->point = $dropoff->point;
            } else if ($request->status == 'failed') {
                // Point menjadi 0 jika ditolak  
                $dropoff->point = 0;
            }
            
            $dropoff->save();

            return redirect()->back()->with('success', 'Status berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
