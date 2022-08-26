<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryTranslation::truncate();

        $categories = [

                        ['category_id'=>1 ,'locale'=>'en','name'=>"Clothes"],
                        ['category_id'=> 2,'locale'=>'en','name'=>"Women Clothes"],
                        ['category_id'=> 3,'locale'=>'en','name'=>"Men Clothes"],
                        ['category_id'=>4 ,'locale'=>'en','name'=>"Kids Clothes"],
                        ['category_id'=> 5,'locale'=>'en','name'=>"Women's T-shirt"],
                        ['category_id'=> 6,'locale'=>'en','name'=>"Women's Jeans"],
                        ['category_id'=> 7,'locale'=>'en','name'=>"Women's Jacket"],
                        ['category_id'=> 8,'locale'=>'en','name'=>"Women's Trouser"],
                        ['category_id'=> 9,'locale'=>'en','name'=>"Women's Matching Sets"],
                        ['category_id'=> 10,'locale'=>'en','name'=>"Brides Dresses"],
                        ['category_id'=> 11,'locale'=>'en','name'=>"Evening Dresses"],
                        ['category_id'=> 12,'locale'=>'en','name'=>"Lingerie"],
                        ['category_id'=> 13,'locale'=>'en','name'=>"Muslim Fashion"],
                        ['category_id'=> 14,'locale'=>'en','name'=>"Hijab"],
                        ['category_id'=> 15,'locale'=>'en','name'=>"Men's T-shirt"],
                        ['category_id'=> 16,'locale'=>'en','name'=>"Men's Jeans"],
                        ['category_id'=> 17,'locale'=>'en','name'=>"Men's Jacket"],
                        ['category_id'=> 18,'locale'=>'en','name'=>"Men's Trouser"],
                        ['category_id'=> 19,'locale'=>'en','name'=>"Men's Matching Sets"],
                        ['category_id'=> 20,'locale'=>'en','name'=>"Tie"],
                        ['category_id'=> 21,'locale'=>'en','name'=>"0-12 Month Baby Clothing"],
                        ['category_id'=> 22,'locale'=>'en','name'=>"12-24 Month Baby Clothing"],
                        ['category_id'=> 23,'locale'=>'en','name'=>"3-6 Year Kids Clothing"],
                        ['category_id'=> 24,'locale'=>'en','name'=>"6-12 Year Kids Clothing"],
                        ['category_id'=> 25,'locale'=>'en','name'=>"12-16 Year Kids Clothing"],
                        ['category_id'=> 26,'locale'=>'en','name'=>"Shoes"],
                        ['category_id'=> 27,'locale'=>'en','name'=>"Women Shoes"],
                        ['category_id'=> 28,'locale'=>'en','name'=>"Men Shoes"],
                        ['category_id'=> 29,'locale'=>'en','name'=>"Kids Shoes"],
                        ['category_id'=> 30,'locale'=>'en','name'=>"High heel Shoes"],
                        ['category_id'=> 31,'locale'=>'en','name'=>"Flat Shoes"],
                        ['category_id'=> 32,'locale'=>'en','name'=>"Sport"],
                        ['category_id'=> 33,'locale'=>'en','name'=>"Boots"],
                        ['category_id'=> 34,'locale'=>'en','name'=>"Cagual"],
                        ['category_id'=> 35,'locale'=>'en','name'=>"Medical Shoes"],
                        ['category_id'=> 36,'locale'=>'en','name'=>"Sandal"],
                        ['category_id'=> 37,'locale'=>'en','name'=>"Formal shoes"],
                        ['category_id'=> 38,'locale'=>'en','name'=>"Sport"],
                        ['category_id'=> 39,'locale'=>'en','name'=>"Boots"],
                        ['category_id'=> 40,'locale'=>'en','name'=>"Cagual"],
                        ['category_id'=> 41,'locale'=>'en','name'=>"Medical Shoes"],
                        ['category_id'=> 42,'locale'=>'en','name'=>"Sandal"],
                        ['category_id'=> 43,'locale'=>'en','name'=>"Sport"],
                        ['category_id'=> 44,'locale'=>'en','name'=>"Boots"],
                        ['category_id'=> 45,'locale'=>'en','name'=>"Sandal"],
                        ['category_id'=> 46,'locale'=>'en','name'=>"Accessories"],
                        ['category_id'=> 47,'locale'=>'en','name'=>"Sunglasses"],
                        ['category_id'=> 48,'locale'=>'en','name'=>"Watch"],
                        ['category_id'=> 49,'locale'=>'en','name'=>"Neacklace"],
                        ['category_id'=> 50,'locale'=>'en','name'=>"Rings"],
                        ['category_id'=> 51,'locale'=>'en','name'=>"Bracelets"],
                        ['category_id'=> 52,'locale'=>'en','name'=>"Anklets"],
                        ['category_id'=> 53,'locale'=>'en','name'=>"Earrings"],
                        ['category_id'=> 54,'locale'=>'en','name'=>"Lux Jewelry"],
                        ['category_id'=> 55,'locale'=>'en','name'=>"Leather"],
                        ['category_id'=> 56,'locale'=>'en','name'=>"Bags"],
                        ['category_id'=> 57,'locale'=>'en','name'=>"Wallets"],
                        ['category_id'=> 58,'locale'=>'en','name'=>"Belts"],
                        ['category_id'=> 59,'locale'=>'en','name'=>"Other"],
                        ['category_id'=> 60,'locale'=>'en','name'=>"Makeup&Cosmetic"],
                        ['category_id'=> 61,'locale'=>'en','name'=>"Makeup"],
                        ['category_id'=> 62,'locale'=>'en','name'=>"Cosmetic Equipment"],
                        ['category_id'=> 63,'locale'=>'en','name'=>"Hair Care Products"],
                        ['category_id'=> 64,'locale'=>'en','name'=>"Skin Care Products"],
                        ['category_id'=> 65,'locale'=>'en','name'=>"Women's Perfumes"],
                        ['category_id'=> 66,'locale'=>'en','name'=>"Men's Perfumes"],
                        ['category_id'=> 67,'locale'=>'en','name'=>"Unisex Perfumes"],
                        ['category_id'=> 68,'locale'=>'en','name'=>"Lenses"],
                        ['category_id'=> 69,'locale'=>'en','name'=>"Home & Office"],
                        ['category_id'=> 70,'locale'=>'en','name'=>"Living Rooms"],
                        ['category_id'=> 71,'locale'=>'en','name'=>"Bed Rooms"],
                        ['category_id'=> 72,'locale'=>'en','name'=>"Bathroom"],
                        ['category_id'=> 73,'locale'=>'en','name'=>"Kitchen"],
                        ['category_id'=> 74,'locale'=>'en','name'=>"Lighting"],
                        ['category_id'=> 75,'locale'=>'en','name'=>"Office"],
                        ['category_id'=> 76,'locale'=>'en','name'=>"Tables"],
                        ['category_id'=> 77,'locale'=>'en','name'=>"TV Table"],
                        ['category_id'=> 78,'locale'=>'en','name'=>"Living Room Sofa"],
                        ['category_id'=> 79,'locale'=>'en','name'=>"Home Accessories"],
                        ['category_id'=> 80,'locale'=>'en','name'=>"Chairs"],
                        ['category_id'=> 81,'locale'=>'en','name'=>"Carpets"],
                        ['category_id'=> 82,'locale'=>'en','name'=>"Curtains"],
                        ['category_id'=> 83,'locale'=>'en','name'=>"Children's Bedroom"],
                        ['category_id'=> 84,'locale'=>'en','name'=>"Couple bedroom"],
                        ['category_id'=> 85,'locale'=>'en','name'=>"Single bedroom"],
                        ['category_id'=> 86,'locale'=>'en','name'=>"Closet"],
                        ['category_id'=> 87,'locale'=>'en','name'=>"Curtains"],
                        ['category_id'=> 88,'locale'=>'en','name'=>"Children's offices"],
                        ['category_id'=> 89,'locale'=>'en','name'=>"Carpets"],
                        ['category_id'=> 90,'locale'=>'en','name'=>"Bathroom Accessories"],
                        ['category_id'=> 91,'locale'=>'en','name'=>"Bathroom Closet"],
                        ['category_id'=> 92,'locale'=>'en','name'=>"Carpets"],
                        ['category_id'=> 93,'locale'=>'en','name'=>"Curtains"],
                        ['category_id'=> 94,'locale'=>'en','name'=>"Tables"],
                        ['category_id'=> 95,'locale'=>'en','name'=>"Kitchen Chairs"],
                        ['category_id'=> 96,'locale'=>'en','name'=>"Kitchen Accessories"],
                        ['category_id'=> 97,'locale'=>'en','name'=>"Chandeliers"],
                        ['category_id'=> 98,'locale'=>'en','name'=>"Table Lamb"],
                        ['category_id'=> 99,'locale'=>'en','name'=>"Kitchen Lamb"],
                        ['category_id'=> 100,'locale'=>'en','name'=>"Desk&Chairs"],
                        ['category_id'=> 101,'locale'=>'en','name'=>"Office Accessories"],


        ];

        foreach ($categories as $key => $value) {
            CategoryTranslation::create($value);
        }












    }
}
