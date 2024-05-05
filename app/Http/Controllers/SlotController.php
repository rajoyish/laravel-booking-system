<?php

namespace App\Http\Controllers;

use App\Bookings\ServiceSlotAvailability;
use App\Bookings\Slot;
use App\Models\Employee;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Employee $employee, Service $service)
    {
        $availability = (new ServiceSlotAvailability(collect([$employee]), $service))
            ->forPeriod(
                Carbon::parse($request->date)->startOfDay(),
                Carbon::parse($request->date)->endOfDay(),
            );

        // dd($availability);

        return response()->json([
            'times' => $availability->first()
                ->slots->map(fn (Slot $slot) => $slot->time->format('H:i'))
                ->values()
                ->toArray(),
        ]);
    }
}
