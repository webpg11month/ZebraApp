<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use App\IncrementText;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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

$factory->define(Page::class,static function  (Faker $faker) {
    $jsons = Storage::get('datas/test.json');
    Log::info($jsons);
    $arr = json_decode($jsons,true);
    return [
        'page_id' => Str::random(10),
        //'text' => $arr['user_info']['TEXT'.mt_rand(1,30).''],
        'flg' => mt_rand(1,3),
        'etc' => Str::random(10),
    ];
});
