<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            [
                'name' => 'VR技術者試験(セオリーコース)',
                'thumbnail' => 'vrtheory.png',
                'sort' => 1
            ],
            [
                'name' => 'VR技術者試験(アプリケーションーコース)',
                'thumbnail' => 'vrapplication.png',
                'sort' => 2
            ],
            [
                'name' => 'プログラミング',
                'thumbnail' => 'programming.png',
                'sort' => 3
            ],
            [
                'name' => '音楽',
                'thumbnail' => 'music.png',
                'sort' => 4
            ]
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
