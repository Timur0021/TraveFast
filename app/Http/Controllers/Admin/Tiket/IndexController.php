<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tiket = Tiket::all();
        return view('admin.tiket.index', compact('tiket'));
    }
}
