<?php

namespace App\Http\Controllers\Admin\Bus;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('admin.bus.index');
    }
}
