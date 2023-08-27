<?php

namespace App\Http\Controllers\User\CreditCard;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreditCard\StoreRequest;
use App\Models\User\CreditCard\Creditka;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Creditka::firstOrCreate($data);
        return redirect()->route('user.card.creditka');
    }
}
