<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(City $city)
    {
        $city->delete();
        return redirect()->route('admin.city.index');
    }
}
