<?php

use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    $events=Event::all();
    return view('homepage',[
        'events'=>$events
    ]);
});
Route::get('/details/{id}',[EventController::class,'showSingleEvent']);
//create a new event
Route::get('/createevent',[EventController::class,'showEventFormPage']);
Route::post('/saveevent',[EventController::class,'saveEvent']);
Route::get('/editpage/{event}',[EventController::class,'showEditEventPage']);
Route::post('/saveevent/{event}',[EventController::class,'updateEvent']);
Route::delete('/delete/{event}',[EventController::class,'deleteEvent']);

