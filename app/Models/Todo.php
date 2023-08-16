<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'status',
        'completed_at',
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
