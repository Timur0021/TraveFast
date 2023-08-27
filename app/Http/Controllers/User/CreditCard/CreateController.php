<?php

namespace App\Http\Controllers\User\CreditCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('user.card.component.create');
    }
}
