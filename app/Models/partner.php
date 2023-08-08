<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'mobile',
        'state',
        'city',
        'country',
        'pin',
        'address',
        'description',
        'img_src',
        'status'

    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected $table = 'partner';
}
