<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tiket\UpdateRequest;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tiket $tiket)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image', $data['image']);
        $tiket->update($data);
        return view('admin.tiket.components.show', compact('tiket'));
    }
}
