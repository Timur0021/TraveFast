<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Theme $theme)
    {
        $theme->delete();
        return redirect()->route('admin.themecite.index');
    }
}
