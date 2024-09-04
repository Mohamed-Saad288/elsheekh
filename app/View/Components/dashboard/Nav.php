<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Nav extends Component
{
    public $items;
    public $active;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = app('nav') ?? [];
        $this->active = Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.nav',[
            'items' => $this->items,
            'active' => $this->active,
        ]);
    }
}
