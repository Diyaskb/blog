<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // hiermee haal je alles op van de gebuikers
        $users = User::all();

        return view('users.index', ['gebruikers' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Gebruiker aanmaken
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->newPassword);
        $user->save();

        return redirect()->route('overzicht-gebruikers');
    }
}
