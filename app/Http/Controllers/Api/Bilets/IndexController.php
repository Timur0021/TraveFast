<?php

namespace App\Http\Controllers\Api\Bilets;

use App\Http\Controllers\Controller;
use App\Http\Resources\Tiket\TiketResource;
use App\Models\Tiket;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tiket = Tiket::all();
        return TiketResource::collection($tiket);
    }
}
