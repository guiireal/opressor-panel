<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class TopBar extends Component
{
    public string $greeting;

    public function __construct()
    {
        $greeting = "Bom dia";
        $hour = intval(date('H'));
        if ($hour >= 12 && $hour <= 18) $greeting = "Boa tarde";
        if ($hour > 18 && $hour <= 23) $greeting = "Boa noite";
        $username = Auth::user()->name;
        $this->greeting = "{$greeting}, {$username}!";
    }

    public function render()
    {
        return view('components.top-bar');
    }
}
