<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $guarded = false;

    public function tikets()
    {
        return $this->hasMany(Tiket::class, 'group_id', 'id');
    }
}
