<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderNavbar extends Component
{
    public $categories;

    public function render(): View
    {
        return view('components.header-navbar');
    }
}
