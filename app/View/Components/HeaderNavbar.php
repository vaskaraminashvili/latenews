<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderNavbar extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::query()
            ->get()->toTree();
    }

    public function render(): View
    {
        return view('components.header-navbar');
    }
}
