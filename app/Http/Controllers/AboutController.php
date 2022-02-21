<?php

namespace App\Http\Controllers;

class AboutController
{
    public function index()
    {
        $name = 'A propos';

        return view('about', [
            'name' => $name,
            'team' => ['Fiorella', 'Marina', 'Matthieu'],
        ]);
    }

    public function show($user)
    {
        return view('about-show', [
            'user' => $user,
        ]);
    }
}