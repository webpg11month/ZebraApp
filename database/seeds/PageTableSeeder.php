<?php

use Illuminate\Database\Seeder;
use App\Page;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PageTableSeeder extends Seeder
{
<<<<<<< HEAD
=======

>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        for ($i = 1; $i <= 30; $i++) {
            $jsons = Storage::get('text.json');
            $datas = json_decode($jsons, true);
            $aaa = factory(Page::class)->create([
                'images' => 'dumy' . $i . '.jpg',
                'text' => $datas['Textdata']['TEXT'.$i.''],
            ]);
            Log::info($aaa);
        }
        // $pages = factory(Page::class,30)->create();
        // Log::info($pages);
=======
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
>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
    }
}
