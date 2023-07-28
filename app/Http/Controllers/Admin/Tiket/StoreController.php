<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tiket\StoreRequest;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); 
        $data['image'] = Storage::disk('public')->put('/image/buses', $data['image']);
        Tiket::firstOrCreate($data);
        return redirect()->route('admin.tiket.index');
    }
}
