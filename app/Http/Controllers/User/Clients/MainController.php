<?php

namespace App\Http\Controllers\User\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        return view('user.main.index');
    }
}
