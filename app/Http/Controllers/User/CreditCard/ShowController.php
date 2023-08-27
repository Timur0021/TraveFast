<?php

namespace App\Http\Controllers\User\CreditCard;

use App\Http\Controllers\Controller;
use App\Models\User\CreditCard\Creditka;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Creditka $creditka)
    {
        return view('user.card.component.show', compact('creditka'));
    }
}
