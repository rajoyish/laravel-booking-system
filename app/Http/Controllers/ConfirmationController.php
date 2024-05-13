<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class ConfirmationController extends Controller
{
    public function __invoke(Appointment $appointment)
    {
        return view('bookings.confirmation', [
            'appointment' => $appointment,
        ]);
    }
}
