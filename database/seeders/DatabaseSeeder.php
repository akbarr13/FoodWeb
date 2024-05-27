<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'usertest',
            'email' => 'test@example.com',

        ]);

        DB::table('categories')->insert(
            [
                'name' => "Makanan",
                'slug' => "makanan",

            ],

        );
        DB::table('categories')->insert(
            [
                'name' => "Minuman",
                'slug' => "minuman",

            ],

        );
        DB::table('categories')->insert(
            [
                'name' => "Buah buahan",
                'slug' => "buah-buahan",

            ],

        );





        $products = [
            ['name' => 'Coca Cola', 'price' => 10000, 'image' => 'cocacola.jpg', 'category_id' => 2, 'description' => 'Coca-Cola, often referred to simply as Coke, is a globally renowned carbonated soft drink produced by The Coca-Cola Company. First introduced in 1886 by John Stith Pemberton, Coke has become one of the most iconic and best-selling beverages worldwide. It is characterized by its distinctively refreshing taste, which combines a unique blend of sweet, citrus, and spicy flavors, and its signature caramel color.'],
            ['name' => 'FANTA STRAWBERRY', 'price' => 10500, 'image' => 'fanta.jpg', 'category_id' => 2, 'description' => 'Fanta is a vibrant and fruity carbonated soft drink produced by The Coca-Cola Company. Introduced during World War II in Germany and gaining international popularity in the subsequent decades, Fanta is known for its bold flavors and bright colors, offering a fun and refreshing alternative to traditional colas.'],
            ['name' => 'Guribee', 'price' => 8000, 'image' => 'guribee.png', 'category_id' => 1, 'description' => 'Guribee is an exciting and delicious snack that brings a unique twist to traditional snacking options. Known for its crispy texture and savory flavors, Guribee has quickly become a favorite among snack enthusiasts. Each bite of Guribee offers a satisfying crunch, making it an ideal choice for those looking to indulge in a tasty treat.'],
            ['name' => 'Krisbee', 'price' => 5900, 'image' => 'krisbee.png', 'category_id' => 1, 'description' => 'Krisbee is a delightful and crunchy snack that has become a favorite among snack enthusiasts for its irresistible texture and savory flavors. Made from high-quality ingredients, Krisbee snacks are crafted to deliver a satisfying crunch with every bite, making them perfect for enjoying at any time of the day.'],
            ['name' => 'Jeruk Santang', 'price' => 19900, 'image' => 'jeruksantang.jpg', 'category_id' => 3, 'description' => 'Jeruk Santang is a delightful and popular citrus fruit known for its sweet and tangy flavor, originating from Southeast Asia. Also referred to as Santang Orange, this fruit is renowned for its vibrant orange color and easy-to-peel skin, making it a convenient and favorite choice for snacking.'],
            ['name' => 'Apel Malang', 'price' => 6000, 'image' => 'apel.jpg', 'category_id' => 3, 'description' => 'Apel Malang, or Malang Apple, is a distinctive variety of apple grown in the highlands of Malang, East Java, Indonesia. Renowned for its crisp texture and refreshing taste, Apel Malang comes in several varieties, with Manalagi and Rome Beauty being the most prominent.'],
            ['name' => 'Pisang Sunpride', 'price' => 7000, 'image' => 'pisang.jpg', 'category_id' => 3, 'description' => 'Pisang Sunpride is a premium brand of bananas renowned for their exceptional quality and delicious taste. Grown in carefully managed plantations, Sunpride bananas are known for their vibrant yellow color, smooth texture, and naturally sweet flavor, making them a popular choice for consumers seeking a nutritious and satisfying fruit.'],
            ['name' => 'Gehel Basreng', 'price' => 14220, 'image' => 'gehel-basreng.jpg', 'category_id' => 1, 'description' => '"Bakso Goreng" is an Indonesian dish that translates to "fried meatballs." Its a popular street food and snack enjoyed throughout Indonesia.'],
            ['name' => 'Teh Botol', 'price' => 9490, 'image' => 'teh-botol.jpg', 'category_id' => 2,'description' => 'Teh Botol, which translates to "Bottled Tea" in English, is an iconic Indonesian beverage cherished for its deliciously sweet and aromatic flavor. Crafted from a traditional recipe that dates back to the 1960s, Teh Botol has become a beloved symbol of Indonesian culture and culinary heritage.'],
            ['name' => 'Frisian Flag', 'price' => 55150, 'image' => 'frisian-flag.jpg', 'category_id' => 2, 'description' => "aw"],
        ];

        DB::table('products')->insert($products);
    }
}
