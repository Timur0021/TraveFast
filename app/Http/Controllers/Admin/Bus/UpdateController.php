<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Bus\UpdateRequest;
use App\Models\Bus;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Bus $bus)
    {
        $data = $request->validated();
        $bus->update($data);
        return view('admin.bus.components.show', compact('bus'));
    }
}
