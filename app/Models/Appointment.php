<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $casts = [
        'starts_at' => 'date_time',
        'ends_at' => 'datetime',
    ];

    protected $guarded = [];

    public static function booted()
    {
        static::creating(function (Appointment $appointment) {
            $appointment->uuid = str()->uuid();
        });
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
