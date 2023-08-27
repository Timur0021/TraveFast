<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Theme\StoreRequest;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); 
        $data['image'] = Storage::disk('public')->put('/image/themes', $data['image']);
        Theme::firstOrCreate($data);
        return redirect()->route('admin.themecite.index');
    }
}
