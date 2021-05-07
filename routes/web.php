<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/shortcuts', function() {
//     //$shortcuts = App\Models\Shortcut::paginate(2);
//     //$shortcuts = App\Models\Shortcut::take(2)->get(); //take only 2
//     //$shortcuts = App\Models\Shortcut::all();
//     //return $shortcuts;
//     return view('shortcuts.shortcuts', [ 
//         'shortcuts' => App\Models\Shortcut::all()
//         ]);
// });
//Route::get('/shortcuts', [App\Http\Controllers\ShortcutController::class, 'index']);
Route::get('/shortcuts', [App\Http\Controllers\ShortcutController::class, 'index']);

// Route::get('/shortcut/new', function() {
//     //$shortcuts = App\Models\Shortcut::paginate(2);
//     //$shortcuts = App\Models\Shortcut::take(2)->get(); //take only 2
//     //$shortcuts = App\Models\Shortcut::all();
//     //return $shortcuts;
//     return view('shortcuts.new', [ 
//         'shortcuts' => App\Models\Shortcut::all()
//         ]);
// });
Route::get('/shortcuts/new', [App\Http\Controllers\ShortcutController::class, 'create']);


Route::get('/shortcuts/{category}', [App\Http\Controllers\ShortcutController::class, 'showCategory']);


