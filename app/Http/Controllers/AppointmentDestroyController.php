<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class AppointmentDestroyController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        $appointment->update([
            'cancelled_at' => now(),
        ]);

        return back();
    }
}
