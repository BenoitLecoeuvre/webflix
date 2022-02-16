<?php

namespace App\Http\Controllers;

class PolitesseController
{
    public function helloEveryone() 
    {
        return view('hello', [
            'name' => 'Fiorella',
            'numbers' => [1, 3, 7],
        ]);
    }

    public function goodbye()
    {
        return view('good-bye');
    }

    public function helloSomeone($name)
    {
        return view('hello', [
            'name' => $name,
            'numbers' => [],
        ]);
    }
}
