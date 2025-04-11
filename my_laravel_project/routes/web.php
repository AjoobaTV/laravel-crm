<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/test-db', function () {
    try {
        \DB::connection()->getPdo();
        return "Connected successfully to the database.";
    } catch (\Exception $e) {
        return "Could not connect to the database. Please check your configuration. Error: " . $e->getMessage();
    }
});

// routes/web.php
Route::get('/', function () {
    return view('index');
});

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
// Add this route to handle the welcome page
Route::get('/welcome', [PortfolioController::class, 'welcome'])->name('welcome');

// Add this route for the contact form submission
Route::post('/contact', [PortfolioController::class, 'submitContactForm'])->name('contact.submit');



