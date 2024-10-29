<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile'); // Pastikan Anda memiliki view 'profile.blade.php'
    }

    public function showlogin()
    {
        return view('login'); // Pastikan Anda memiliki view 'registerS.blade.php'
    }
}
