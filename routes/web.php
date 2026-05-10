<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Models\Report;

Route::get('/', function () {
    $totalReports = Report::count();
    $waitingReports = Report::where('status', 'Menunggu')->count();
    $processReports = Report::where('status', 'Diproses')->count();
    $doneReports = Report::where('status', 'Selesai')->count();
    $latestReports = Report::latest()->take(5)->get();

    return view('dashboard', compact(
        'totalReports',
        'waitingReports',
        'processReports',
        'doneReports',
        'latestReports'
    ));
})->name('dashboard');

Route::resource('reports', ReportController::class);