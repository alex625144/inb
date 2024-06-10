<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedNumber extends Model
{
    protected $table = 'generated-numbers';

    protected $fillable = [
        'random_number',
    ];

    public $timestamps = false;
}
