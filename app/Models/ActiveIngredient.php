<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActiveIngredient extends Model
{
    protected $fillable = ["atc_code", "main_ingredient", "description"];

    public function drugs(): HasMany
    {
        return $this->hasMany(Drug::class);
    }

}
