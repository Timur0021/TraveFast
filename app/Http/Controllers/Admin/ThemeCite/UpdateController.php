<?php

namespace App\Http\Controllers\Admin\ThemeCite;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Theme\UpdateRequest;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request ,Theme $theme)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image/themes', $data['image']);
        $theme->update($data);
        return view('admin.themecite.components.show', compact('theme'));
    }
}
