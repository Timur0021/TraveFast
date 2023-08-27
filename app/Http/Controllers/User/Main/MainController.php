<?php

namespace App\Http\Controllers\User\Main;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $tiket = Tiket::all();
        return view('user.main.main', compact('tiket'));
    }
}
