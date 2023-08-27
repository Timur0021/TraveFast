<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $theme = Theme::all();
        return view('admin.themecite.index', compact('theme'));
    }
}
