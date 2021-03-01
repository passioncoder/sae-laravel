<?php

use App\Models\User;
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


Artisan::command('import:user', function() {

    $file = file_get_contents(storage_path('users.csv'));

    $lines = explode(PHP_EOL, $file);

    foreach ($lines as $line) {

        if (empty($line)) continue;

        $u = explode(',', $line);
        $name = $u[0];
        $email = $u[1];
        $password = 'secret';
        $data = compact('name','email', 'password');

        /*
        $user = new User;
        $user->fill($data);
        $user->save();
        */

        User::create($data);
    }
});

Artisan::command('p', function () {

    dd(bcrypt('Passw0rt!'));
});
