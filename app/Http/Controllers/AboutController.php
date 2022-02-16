<?php

namespace App\Http\Controllers;

class AboutController
{
    public function team() {
        return view('a-propos', [
            'name' => 'A propos',
            'devteam' => ['toto', 'tete', 'toea'],
        ]);
    }

    public function nameUser($user) {
        return view('about-show', [
            'user' => $user,
        ]);
    }


}
