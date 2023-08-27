<?php

namespace App\Http\Controllers\User\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PayController extends Controller
{
    public function __invoke()
    {
        return view('user.card.card');
    }
}
