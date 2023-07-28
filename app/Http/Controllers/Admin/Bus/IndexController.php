<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $bus = Bus::all();
        return view('admin.bus.index', compact('bus'));
    }
}
