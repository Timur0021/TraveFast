<?php

namespace App\Models\User\CreditCard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditka extends Model
{
    use HasFactory;
    protected $table = 'creditkas';
    protected $guarded = false;
}
