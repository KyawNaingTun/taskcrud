<?php

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

Auth::routes();

Route::get('/', 'TaskController@index')->name('home');

Route::resource('/task', 'TaskController');

Route::get('/test', function(){

    $task = App\Task::find(3);
    //Dispacting event
    event(new App\Events\TaskAssignedEvent($task));

    // $user = App\User::find($task->assigned_id);
    //send notification to assigned user
    // $user->notify(new App\Notifications\TaskAssignedNotification($task));
});
