<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $paintingCategoryId = DB::table('categories')->where('category_name', 'Painting')->value('category_id');
        $drawingCategoryId = DB::table('categories')->where('category_name', 'Drawing')->value('category_id');
        $textilesCategoryId = DB::table('categories')->where('category_name', 'Textiles')->value('category_id');

        // Insert subcategories
        DB::table('sub_categories')->insert([
            // Painting Subcategories
            [
                'subcategory_name' => 'Acrylics',
                'subcategory_description' => 'A type of paint made with pigment suspended in acrylic polymer emulsion. Acrylic paints are known for their versatility, quick drying time, and ability to mimic other mediums like oil or watercolor.',
                'category' => $paintingCategoryId,
            ],
            [
                'subcategory_name' => 'Oil',
                'subcategory_description' => 'A type of paint made with pigments suspended in drying oils, typically linseed oil. Oil paints have a slow drying time, allowing for greater manipulation and blending of colors on the canvas.',
                'category' => $paintingCategoryId,
            ],
            [
                'subcategory_name' => 'Watercolor',
                'subcategory_description' => 'A painting method in which pigments are suspended in a water-based solution. Watercolor paints are known for their transparency and luminosity, and are often used for landscapes, illustrations, and botanical studies.',
                'category' => $paintingCategoryId,
            ],

            // Drawing Subcategories
            [
                'subcategory_name' => 'Journaling',
                'subcategory_description' => 'The illustrations, doodles, or decorative elements. Journaling can serve as a form of self-expression, reflection, and creative exploration.',
                'category' => $drawingCategoryId,
            ],
            [
                'subcategory_name' => 'Coloring',
                'subcategory_description' => 'The activity of filling in outlined drawings or designs with colored pencils, markers, or crayons. Coloring is often used as a therapeutic or relaxing activity for both children and adults.',
                'category' => $drawingCategoryId,
            ],

            // Textiles Subcategories
            [
                'subcategory_name' => 'Knitting',
                'subcategory_description' => 'The process of creating fabric by interlocking loops of yarn using knitting needles. Knitting can produce a variety of garments, accessories, and decorative items.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'Crocheting',
                'subcategory_description' => 'A method of creating fabric by interlocking loops of yarn using a crochet hook. Crocheting allows for the creation of intricate patterns and designs, and is commonly used to make clothing, blankets, and accessories.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'Sewing',
                'subcategory_description' => 'The act of joining fabrics together using a needle and thread. Sewing encompasses a wide range of techniques, including hand sewing, machine sewing, and specialized stitching for different purposes.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'Quilting',
                'subcategory_description' => 'A sewing technique that involves stitching together multiple layers of fabric to create a padded textile. Quilting is often used to make blankets, clothing, and decorative items, and can feature intricate patterns and designs.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'No-sew',
                'subcategory_description' => 'Crafting techniques that allow for the creation of fabric-based projects without the need for sewing. Examples include fabric glue, iron-on adhesives, and knotting techniques like macrame.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'Cross Stitch',
                'subcategory_description' => 'A form of embroidery in which stitches are arranged in a grid pattern to create a design or image. Cross stitch patterns are often used to adorn fabric for decorative purposes.',
                'category' => $textilesCategoryId,
            ],
            [
                'subcategory_name' => 'Felting',
                'subcategory_description' => 'The process of matting and compressing fibers together to create a dense fabric or three-dimensional object. Felting can be done using wet felting techniques with water and agitation, or dry felting techniques using needles.',
                'category' => $textilesCategoryId,
            ],
        ]);
    }
}
