<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fill = [
        'title',
        'descrpition',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
