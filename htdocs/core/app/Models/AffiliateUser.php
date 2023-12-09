<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateUser extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','telephone','code','is_active' ];

}
