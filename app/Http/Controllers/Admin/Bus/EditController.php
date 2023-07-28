<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Bus $bus)
    {
        return view('admin.bus.components.edit', compact('bus'));
    }
}
