<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Pastikan ini atau 'use App\Http\Controllers\Controller;'

class PageController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('login'); // HANYA MEMANGGIL VIEW
    }

    // Proses Login (Simulasi - hanya redirect)
    public function postLogin(Request $request)
    {
        if (empty($request->username) || empty($request->password)) {
            return redirect('/login')->with('error', 'Username dan Password wajib diisi!');
        }

        // Syarat Khusus: Redirect dengan query parameter
        return redirect('/dashboard?username=' . urlencode($request->username));
    }

    // Halaman Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');
        return view('dashboard', compact('username')); // HANYA MEMANGGIL VIEW + DATA
    }

    // Halaman Profile
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');
        return view('profile', compact('username')); // HANYA MEMANGGIL VIEW + DATA
    }

    // Halaman Pengelolaan
public function pengelolaan()
    {
        // Data skin tanpa field 'image_url'
        $skins = [
            [
                'hero' => 'Miya', 
                'skin_name' => 'Midnight Muse', 
                'rarity' => 'Epic', 
                'price' => '899 Diamond',
            ],
            [
                'hero' => 'Layla', 
                'skin_name' => 'Blue Specter', 
                'rarity' => 'Limited', 
                'price' => 'N/A',
            ],
            [
                'hero' => 'Gusion', 
                'skin_name' => 'Cosmic Gleam', 
                'rarity' => 'Legend', 
                'price' => '10000+ Diamond',
            ],
            [
                'hero' => 'Zilong', 
                'skin_name' => 'Changbanpo Commander', 
                'rarity' => 'Basic', 
                'price' => '269 Diamond',
            ],
            // TAMBAHAN DATA BARU:
            [
                'hero' => 'Lesley', 
                'skin_name' => 'Dangerous Love', 
                'rarity' => 'Epic', 
                'price' => '899 Diamond',
            ],
            [
                'hero' => 'Balmond', 
                'skin_name' => 'Savage Hunter', 
                'rarity' => 'Basic', 
                'price' => '269 Diamond',
            ],
            [
                'hero' => 'Chou', 
                'skin_name' => 'Dragon Boy', 
                'rarity' => 'Special', 
                'price' => '749 Diamond',
            ],
            [
                'hero' => 'Eudora', 
                'skin_name' => 'Emerald Enchantress', 
                'rarity' => 'Elite', 
                'price' => '599 Diamond',
            ],
        ];

        return view('pengelolaan', compact('skins')); 
    }
}