<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pickup;
use Illuminate\Support\Facades\Auth;

class PickupController extends Controller
{
    // Menampilkan halaman pickup
    public function index()
    {
        return view('pickup');
    }

    // Menyimpan data pickup baru
    public function store(Request $request)
    {
        $request->validate([
            'plastik' => 'required|numeric|min:0',
            'kertas' => 'required|numeric|min:0', 
            'alumunium' => 'required|numeric|min:0',
            'besi' => 'required|numeric|min:0',
            'botol' => 'required|numeric|min:0',
            'tanggal-penjemputan' => 'required|date',
            'waktu-penjemputan' => 'required'
        ]);

        // Hitung total koin berdasarkan berat sampah
        $totalKoin = 
            ($request->plastik * 2000) +
            ($request->kertas * 3000) + 
            ($request->alumunium * 7000) +
            ($request->besi * 5000) +
            ($request->botol * 3000);

        $pickup = pickup::create([
            'name' => Auth::user()->name,
            'phone_number' => Auth::user()->phone,
            'address' => Auth::user()->address,
            'pickup_date' => $request->input('tanggal-penjemputan'),
            'pickup_time' => $request->input('waktu-penjemputan'),
            'status' => 'pending',
            'point' => $totalKoin
        ]);

        return redirect()->back()->with('success', 'Permintaan penjemputan berhasil dibuat!');
    }

    // Menampilkan detail data pickup
    public function show($id)
    {
        $pickup = pickup::findOrFail($id);
        return view('pickup.show', compact('pickup'));
    }

    // Mengupdate data pickup
    public function updateStatus(Request $request, $id)
    {
        try {
            $pickup = pickup::findOrFail($id);
            $pickup->status = $request->status;
            
            // Update point berdasarkan status
            if ($request->status == 'success') {
                // Point tetap sama jika diterima
                $pickup->point = $pickup->point;
            } else if ($request->status == 'failed') {
                // Point menjadi 0 jika ditolak
                $pickup->point = 0;
            }
            
            $pickup->save();

            return redirect()->back()->with('success', 'Status berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // Menampilkan data pickup untuk admin
    public function adminPickup()
    {
        $pickups = Pickup::all();
        return view('admin.pickup', compact('pickups'));
    }

    // Menghapus data pickup
    public function destroy($id)
    {
        $pickup = pickup::findOrFail($id);
        $pickup->delete();
        return redirect()->back()->with('success', 'Data penjemputan berhasil dihapus!');
    }
}
