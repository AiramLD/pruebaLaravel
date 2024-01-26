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
                'created_at' => now(),
                'updated_at' => now()   
            ],
            [
                'name' => 'Cardhun Zacapa',
                'price' => 35.90,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()   
                      
            ],
            [
                'name' => 'Ramon Bilbao',
                'price' => 19.90,
                'stock' => 22,
                'created_at' => now(),
                'updated_at' => now()       
            ],
            [
                'name' => 'Victoria',
                'price' => 9.90,
                'stock' => 1,
                'created_at' => now(),
                'updated_at' => now()        
            ]

        ];

        //DB::table('articles')->insert($articles); ESTO SOLO CON DEPENDENCIAS
            Article::insert($articles);
        }
    }
