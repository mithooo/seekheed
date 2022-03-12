<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    function saveUser(Request $request) {
        $request->validate([
            'email' => 'required|unique:coming_soon_users_notifies'
        ]);
        \DB::table('coming_soon_users_notifies')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);
        return redirect()->back()->with('success', 'You will be notified shortly!');
    }
}
