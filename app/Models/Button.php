<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'color', 'set'];

    protected $casts = [
        'set' => 'boolean',
    ];
}
