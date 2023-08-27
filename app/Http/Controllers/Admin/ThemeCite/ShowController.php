<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Theme $theme)
    {
        return view('admin.themecite.components.show', compact('theme'));
    }
}
