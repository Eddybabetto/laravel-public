<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drug extends Model
{
    protected $fillable = ["minsan_code", "name", "description", "expiration_date", "price", "company_id", "active_ingredient_id"];

    public function company(): BelongsTo
    {
        return $this->belongsTo(related: Company::class);
    }

    public function active_ingredient(): BelongsTo
    {
        return $this->belongsTo(ActiveIngredient::class);
    }

}
