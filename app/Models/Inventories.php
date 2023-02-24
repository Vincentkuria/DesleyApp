<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inventories extends Model
{
    use HasFactory;

    public function supplier(): HasOne
    {
        return $this->hasOne(suppliers::class,'inventory_id');
    }

    
    public function reviews(): HasMany
    {
        return $this->hasMany(Reviews::class, 'inventory_id');
    }
}
