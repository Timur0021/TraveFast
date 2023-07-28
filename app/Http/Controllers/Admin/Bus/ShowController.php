<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Bus $bus)
    {
        return view('admin.bus.components.show', compact('bus'));
    }
}
