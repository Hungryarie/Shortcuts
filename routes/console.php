<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('fill_shortcuts {count}', function ($count) {
    // Create a couple App\Models\Shortcut instances...
    $shortcuts = App\Models\Shortcut::factory()->count($count)->create();
    print('created ' . $count . ' shortcuts instances' . PHP_EOL);
})->purpose('fill database with shortcuts');

Artisan::command('create_categories', function () {
    // Create a three App\Models\Category instances...
    App\Models\Category::factory()->create(['name'=>'smartplug']);
    App\Models\Category::factory()->create(['name'=>'internal']);
    App\Models\Category::factory()->create(['name'=>'external']);

    print('created 3 category instances' . PHP_EOL);
})->purpose('create the 3 main categories in the database');

Artisan::command('test {number}', function ($number) {
    // testing with arguments
    print ($number . PHP_EOL);
})->purpose('testing the console');