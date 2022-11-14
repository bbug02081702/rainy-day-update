<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'dateofbirth',
        'marjors',
        'year',
        'phone',
    ];
}
