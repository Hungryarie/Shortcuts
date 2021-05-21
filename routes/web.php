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
Route::get('/shortcuts', [App\Http\Controllers\ShortcutController::class, 'index'])->name('shortcuts.index');

// Route::get('/shortcut/new', function() {
//     //$shortcuts = App\Models\Shortcut::paginate(2);
//     //$shortcuts = App\Models\Shortcut::take(2)->get(); //take only 2
//     //$shortcuts = App\Models\Shortcut::all();
//     //return $shortcuts;
//     return view('shortcuts.new', [ 
//         'shortcuts' => App\Models\Shortcut::all()
//         ]);
// });

Route::get('/shortcuts/{category}', [App\Http\Controllers\ShortcutController::class, 'showCategory']);

// Route::get('/shortcut/create', [App\Http\Controllers\ShortcutController::class, 'create'])->name('shortcut.create');
// Route::post('/shortcut/create', [App\Http\Controllers\ShortcutController::class, 'store'])->name('shortcut.store');

// Route::get('/shortcut/{name}', [App\Http\Controllers\ShortcutController::class, 'showit'])->name('shortcut.show');
// Route::get('/shortcut/{name}/edit', [App\Http\Controllers\ShortcutController::class, 'edit'])->name('shortcut.edit');
// Route::put('/shortcut/{name}', [App\Http\Controllers\ShortcutController::class, 'update'])->name('shortcut.update');
// Route::delete('/shortcut/{name}', [App\Http\Controllers\ShortcutController::class, 'destroy'])->name('shortcut.destroy');

Route::resource('shortcut', App\Http\Controllers\ShortcutController::class);