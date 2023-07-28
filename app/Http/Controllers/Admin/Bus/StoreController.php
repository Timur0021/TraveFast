<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Bus\StoreRequest;
use App\Models\Bus;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Bus::firstOrCreate($data);
        return redirect()->route('admin.bus.index');
    }
}
