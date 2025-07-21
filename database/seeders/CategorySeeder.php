<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $categories = [
            [
                'category_name' => 'Drawing',
                'category_description' => 'The art form of creating visual representations that encompasses a wide range of techniques and styles, from simple sketches to intricate illustrations, and serves as the foundation for many other visual art forms'
            ],
            [
                'category_name' => 'Painting',
                'category_description' => 'Painting involves applying pigment to a surface, to create images, scenes, or abstract compositions. It is one of the oldest forms of artistic expression.'
            ],
            [
                'category_name' => 'Photography',
                'category_description' => 'The art and practice of capturing and producing images. It encompasses various genres such as portrait, landscape, documentary, and fine art photography, allowing artists to convey emotions, stories, and perspectives.'
            ],
            [
                'category_name' => 'Sculpture',
                'category_description' => 'The art of creating three-dimensional forms, by carving, modeling, or assembling materials such as stone, wood, metal or plastic. Sculptures can range from small-scale works to monumental installations exploring themes of form, space, texture, and concept.'
            ],
            [
                'category_name' => 'Textiles',
                'category_description' => 'Textile art involves creating artworks using fibers, fabrics, and textiles as the primary medium. It encloses a wide range of techniques, including weaving, stitching, dyeing, felting, and embroidery, and can be expressed through functional objects like purely decorative pieces.'
            ],
            [
                'category_name' => 'Others',
                'category_description' => 'This category concerns a diverse range of artistic expressions that may not fit neatly into traditional classifications...'
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
