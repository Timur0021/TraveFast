<?php

namespace App\Http\Controllers\Admin\Tiket;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Tiket $tiket)
    {
        $tiket->delete();
        return redirect()->route('admin.tiket.index');
    }
}
