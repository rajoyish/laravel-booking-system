<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (int $price) => '$'.number_format($price / 100, 2),
        );
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}
