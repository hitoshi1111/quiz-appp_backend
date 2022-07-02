<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate();
        
        $titles = [
            [
                'category_id' => 1,
                'title' => 'VRセオリークイズ',
                'description' => 'VR技術者試験セオリーコースにまつわるクイズです。',
                'thumbnail' => 'vrtheory.png'
            ],
            [
                'category_id' => 2,
                'title' => 'VRアプリケーションクイズ',
                'description' => 'VR技術者試験アプリケーションーコースにまつわるクイズです。',
                'thumbnail' => 'vrapplication.png'
            ],
            [
                'category_id' => 3,
                'title' => 'プログラミング',
                'description' => 'フロントエンドにまつわるクイズです。',
                'thumbnail' => 'frontend'
            ], 
            [
                'category_id' => 4,
                'title' => '音楽',
                'description' => 'ギターにまつわるクイズです。',
                'thumbnail' => 'quitar.png'
            ],            
        ];

        foreach($titles  as $title) {
            Title::create($title);
        }
    }
}
