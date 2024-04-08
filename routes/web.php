<?php

use App\Bookings\ScheduleAvailability;
use App\Models\Employee;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Carbon::setTestNow(now()->setTimeFromTimeString('12:00'));

Route::get('/', function () {
    return view('welcome');
    $employee = Employee::find(1);
    $service = Service::find(1);

    $availability = (new ScheduleAvailability($employee, $service))
        ->forPeriod(
            now()->startOfDay(),
            now()->addMonth()->endOfDay(),
        );
});
