<?php
// app/Http/Controllers/Auth/RegisterController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'address' => 'required|string',
                'phone' => 'required|string|max:15',
                'password' => 'required|string|confirmed|min:6',
                'role' => 'required|string|in:user,admin', // Sesuaikan validasi untuk role dengan form daftar
            ]);

            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'address' => $validatedData['address'],
                'phone' => $validatedData['phone'],
                'password' => Hash::make($validatedData['password']),
                'points' => 0, // Sesuaikan dengan default point ke 0
                'role' => $validatedData['role'] ?? 'user', // Sesuaikan dengan default role 'user'
            ]);

            return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat registrasi. Silakan coba lagi.'])->withInput();
        }
    }
}
