<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';
    protected $guarded = false;

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->image);
    }
}
