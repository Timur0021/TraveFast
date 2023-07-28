<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Tiket $tiket)
    {
        return view('admin.tiket.components.show', compact('tiket'));
    }
}
