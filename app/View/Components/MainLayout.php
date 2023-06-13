<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class MainLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public function __construct($title = NULL)
    {
        $this->title = $title ?? "Dashboard";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navbar = [
            "Dashboard"   => "/",
            "Posts"       => "/posts",
            "Kategori"    => "/kategori",
            "User List"   => "/user-lists",
            "Report List" => "/report-lists",
        ];
        return view('admin.layouts.main', compact('navbar'));
    }
}