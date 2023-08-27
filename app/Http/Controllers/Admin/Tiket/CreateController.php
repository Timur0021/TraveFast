<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\City;
use App\Models\Group;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $city = City::all();
        $bus = Bus::all();
        $group = Group::all();
        return view('admin.tiket.components.create', compact('city', 'bus', 'group'));
    }
}
