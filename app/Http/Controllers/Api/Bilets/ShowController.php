<?php

namespace App\Http\Controllers\Api\Bilets;

use App\Http\Controllers\Controller;
use App\Http\Resources\Tiket\TiketResource;
use App\Models\Tiket;

class ShowController extends Controller
{
    public function __invoke(Tiket $tiket)
    {
        return new TiketResource($tiket);
    }
}
