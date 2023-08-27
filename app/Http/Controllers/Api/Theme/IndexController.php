<?php

namespace App\Http\Controllers\Api\Theme;

use App\Http\Controllers\Controller;
use App\Http\Resources\Theme\ThemeResource;
use App\Models\Theme;

class IndexController extends Controller
{
    public function __invoke()
    {
        $theme = Theme::all();
        return ThemeResource::collection($theme);
    }
}