<?php

use Illuminate\Database\Seeder;
use App\Page;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD

=======
>>>>>>> ZebraApp/nishide_new
        //$pages = factory(Page::class,30)->create();
        for ($i=1; $i < 31; $i++) {
            $jsons = Storage::get('datas/test.json');
            Log::info($jsons);
            $arr = json_decode($jsons,true);
            $aa = factory(Page::class)->create([
                'images' => 'dumy'.$i.'.jpg',
                'text' => $arr['user_info']['TEXT'.$i.''],
            ]);
            Log::info($aa);
        }
<<<<<<< HEAD

=======
>>>>>>> ZebraApp/nishide_new
    }
}
