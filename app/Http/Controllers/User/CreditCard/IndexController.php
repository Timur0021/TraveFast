<?php

namespace App\Http\Controllers\User\CreditCard;

use App\Http\Controllers\Controller;
use App\Models\User\CreditCard\Creditka;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $creditka = Creditka::all();
        return view('user.card.creditka', compact('creditka'));
    }
}
