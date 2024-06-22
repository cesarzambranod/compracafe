<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'purchase_price',
        'sale_price',
        'company_id'
    ];

    public function companies(): HasOne
    {
        return $this->hasOne(Companies::class);
    }
}
