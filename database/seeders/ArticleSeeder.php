<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'name' => 'Ron Zacapa',
                'price' => 59.90,
                'stock' => 1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ],
            [
                'name' => 'Cardhú',
                'price' => 45.20,
                'stock' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ],
            [
                'name' => 'Ramón Bilbao',
                'price' => 16.55,
                'stock' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ],
            [
                'name' => 'Victoria',
                'price' => 1.25,
                'stock' => 56,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ],

        ];

        //DB::table('articles')->insert($articles);
        Article::insert($articles);
    }
}
