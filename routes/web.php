<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\SliderController;


Route::get('/', [WelcomeController::class,'index'])->name('front.index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');



Route::get('/dashboard/admin', function () {
    return view('dashboard.layout');
 });//->middleware(['auth'])->name('dashboard');

// 





// dashboard/admin routes 
Route::prefix('dashboard/admin')->group(function (){
    Route::resource('/slider', SliderController::class)->parameters(['slider' =>'id']);
    Route::get('/slider/trash/data',[ SliderController::class,'trash'])->name('slider.trash');
    Route::delete('/slider/delete/data/{id}',[ SliderController::class,'delete'])->name('slider.delete');
    Route::get('/slider/restore/data/{id}',[ SliderController::class,'restore'])->name('slider.restore');
    
    
});