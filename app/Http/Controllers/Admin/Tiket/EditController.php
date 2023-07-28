<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\City;
use App\Models\Tiket;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tiket $tiket)
    {
        $city = City::all();
        $bus = Bus::all();
        return view('admin.tiket.components.edit', compact('tiket', 'city', 'bus'));
    }
}
