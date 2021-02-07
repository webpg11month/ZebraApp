<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
<<<<<<< HEAD
use App\User;
use App\Page;
=======
//use App\User;
use App\Page;
use App\IncrementText;
>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
<<<<<<< HEAD

=======
>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

<<<<<<< HEAD
// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(page::class,function(Faker $faker){
    $jsons = Storage::get('text.json');
    $datas = json_decode($jsons , true);
    Log::info($datas['Textdata']['TEXT'.mt_rand(1,30).'']);
    
    


    return [
        'page_id' => str::random(10),
        'text' => $datas['Textdata']['TEXT'.mt_rand(1,30).''],
        // 'images' => 'dumy'.mt_rand(1,30).'.jpg',
=======
$factory->define(Page::class,static function  (Faker $faker) {
    $jsons = Storage::get('datas/test.json');
    Log::info($jsons);
    $arr = json_decode($jsons,true);
    return [
        'page_id' => Str::random(10),
        //'text' => $arr['user_info']['TEXT'.mt_rand(1,30).''],
>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
        'flg' => mt_rand(1,3),
        'etc' => Str::random(10),
    ];
});