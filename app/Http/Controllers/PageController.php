<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{

    public function login()
    {
        return view('login'); 
    }

    public function postLogin(Request $request)
    {
        if (empty($request->username) || empty($request->password)) {
            return redirect('/login')->with('error', 'Username dan Password wajib diisi!');
        }

        return redirect('/dashboard?username=' . urlencode($request->username));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');
        return view('dashboard', compact('username')); 
    }


    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');
        return view('profile', compact('username')); 
    }


public function pengelolaan()
    {
        $skins = [
            [
                'hero' => 'Miya', 
                'skin_name' => 'Midnight Muse', 
                'rarity' => 'Epic', 
                'price' => '1 Diamond',
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
                'price' => '1 Diamond',
            ],
            [
                'hero' => 'Zilong', 
                'skin_name' => 'Changbanpo Commander', 
                'rarity' => 'Basic', 
                'price' => '1 Diamond',
            ],

            [
                'hero' => 'Lesley', 
                'skin_name' => 'Dangerous Love', 
                'rarity' => 'Epic', 
                'price' => '1 Diamond',
            ],
            [
                'hero' => 'Balmond', 
                'skin_name' => 'Savage Hunter', 
                'rarity' => 'Basic', 
                'price' => '1 Diamond',
            ],
            [
                'hero' => 'Chou', 
                'skin_name' => 'Dragon Boy', 
                'rarity' => 'Special', 
                'price' => '1 Diamond',
            ],
            [
                'hero' => 'Eudora', 
                'skin_name' => 'Emerald Enchantress', 
                'rarity' => 'Elite', 
                'price' => '1 Diamond',
            ],
        ];

        return view('pengelolaan', compact('skins')); 
    }
}