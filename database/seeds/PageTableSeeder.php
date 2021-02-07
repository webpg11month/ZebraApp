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
    }
}
