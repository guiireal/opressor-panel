<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Menu extends Component
{
    public string $headerName;
    public string $aliasName;
    public string $color;
    public string $backgroundImage;
    public string $username;
    public ?string $menuActive;

    public function __construct(string $username, string $color = 'green', string $headerName = null, string $aliasName = null, string $backgroundImage = '')
    {
        $this->username = $username;
        if (!$headerName) {
            $this->headerName = config('app.name');
        }

        if (!$aliasName) {
            $this->aliasName = config('app.alias');
        }
        $this->color = $color;
        $this->backgroundImage = $backgroundImage;
        $this->menuActive = Route::getCurrentRoute()->getName();
    }

    public function render()
    {
        return view('components.menu');
    }
}
