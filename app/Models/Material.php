<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $filllabel = ['name', 'quantity', 'status'];

    protected static function booted()
    {
        static::saving(function ($material) {
            $material->status = $material->quantity == 0 ? 1 : 0;
        });
    }
}
