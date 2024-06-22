<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'user_id'
    ];
    public function user(): HasOne
    {
        return $this->hasOne(Companies::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
}
