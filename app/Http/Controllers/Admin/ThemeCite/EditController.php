<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Theme $theme)
    {
        return view('admin.themecite.components.edit', compact('theme'));
    }
}
