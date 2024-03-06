<?php

use App\Bookings\ScheduleAvailability;
use App\Models\Employee;
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

Route::get('/', function () {
    // return view('welcome');

    // $employee = Employee::find(2);
    // dd($employee->services);

    $availability = (new ScheduleAvailability())
        ->forPeriod(
            now()->startOfDay(),
            now()->addMonth()->endOfDay(),
        );
});
