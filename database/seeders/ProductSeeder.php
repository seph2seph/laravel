<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'image' => 'images',
                'lrn' => '42183456789',
                'first_name' => 'Japeth',
                'middle_name' => 'bacay',
                'last_name' => 'Albor',
                'age' => 10,
                'section' => 'Gladiolus', 
                'contact' => '09123456789',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Brgy.Mongpong, Roxas City'
            ],
            [
                'image' => 'storage/boyImage.jpg',
                'lrn' => '4498762154321',
                'first_name' => 'Reynan',
                'middle_name' => 'Daria',
                'last_name' => 'Arcan',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09987654321',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Brgy.Ilaya, Pontevedra'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '4356761254321',
                'first_name' => 'John Daniel',
                'middle_name' => 'De Leon',
                'last_name' => 'Asis',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09987654321',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Brgy.Ilaya, Pontevedra '
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '487543414321',
                'first_name' => 'Elian',
                'middle_name' => 'Bones',
                'last_name' => 'Baguyo',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09987654321',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Brgy.Bato, Panay'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '480231224321',
                'first_name' => 'Antonio Deandre',
                'middle_name' => 'Laserna',
                'last_name' => 'Barredo',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09987654321',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Brgy VII, Roxas City'
            ], 
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '439040190025',
                'first_name' => 'James John',
                'middle_name' => 'Maguyod',
                'last_name' => 'Beneranda',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09991234567',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Timpas, Panitan, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190019',
                'first_name' => 'Tyrone Lue',
                'middle_name' => 'Cornelio',
                'last_name' => 'Bernardino',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09992345678',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Lawa-an, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190034',
                'first_name' => 'Ember Louise',
                'middle_name' => 'Alayon',
                'last_name' => 'Buno',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09993456789',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Poblacion II, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '439023190009',
                'first_name' => 'Marc Mohn',
                'middle_name' => 'Agapin',
                'last_name' => 'De Asis',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09994567890',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Salocon, Panitan, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190023',
                'first_name' => 'Zian Gabriel',
                'middle_name' => 'Odic­ta',
                'last_name' => 'Galaura',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09995678901',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Majanlud, Sapi-an, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190039',
                'first_name' => 'Alexandrace',
                'middle_name' => 'Violeta',
                'last_name' => 'Hongco',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09996789012',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Poblacion X, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190039',
                'first_name' => 'Nathan Dominic',
                'middle_name' => 'Pamplona',
                'last_name' => 'Isaran',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09997890123',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Milibili, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190057',
                'first_name' => 'Roman',
                'middle_name' => 'Vidal',
                'last_name' => 'Malificiar',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09998901234',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Dinginan, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190006',
                'first_name' => 'Andryll Jr',
                'middle_name' => 'Tamonan',
                'last_name' => 'Martinquilla',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09999012345',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Poblacion IV, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443510190007',
                'first_name' => 'Justine Carl',
                'middle_name' => 'Nemenzo',
                'last_name' => 'Oberas',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09990123456',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Cagay, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190042',
                'first_name' => 'Ethan Jade',
                'middle_name' => 'Pericon',
                'last_name' => 'Villanueva',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09991234567',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Poblacion X, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '404193190020',
                'first_name' => 'Jestine Grey',
                'middle_name' => '',
                'last_name' => 'Zonio',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09992345678',
                'year_level' => 'Grade 5',
                'gender' => 'Male',
                'address' => 'Cagay, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190040',
                'first_name' => 'Keanna Kassandra',
                'middle_name' => 'Duran',
                'last_name' => 'Adrid',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09993456789',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Punta Tabuc, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190025',
                'first_name' => 'Mary Thea',
                'middle_name' => 'Jano',
                'last_name' => 'Alejaga',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09994567891',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'I. Awa-an, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190026',
                'first_name' => 'Blessielyn',
                'middle_name' => 'Dalida',
                'last_name' => 'Aperocho',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09995678902',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Bilao, Sapi-an, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190045',
                'first_name' => 'Cassandra May',
                'middle_name' => 'Datiles',
                'last_name' => 'Arlante',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09996789013',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Mongpong, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443516190003',
                'first_name' => 'Alexandrei Denise',
                'middle_name' => 'Celarbo',
                'last_name' => 'Burata',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09997890124',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Tanque, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190050',
                'first_name' => 'Maunica Regina',
                'middle_name' => 'Aguirre',
                'last_name' => 'De Andres',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09998901235',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190030',
                'first_name' => 'Savannah Reign',
                'middle_name' => 'Altamia',
                'last_name' => 'De Leon',
                'age' => 11,
                'section' => 'Gladiolus',
                'contact' => '09999012346',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Poblacion III, Roxas City, Capiz'
            ],
            [
                'image' => 'public/assets/image/boyImage.jpg',
                'lrn' => '443503190053',
                'first_name' => 'Princess Quinne',
                'middle_name' => 'Mansilla',
                'last_name' => 'Jore',
                'age' => 10,
                'section' => 'Gladiolus',
                'contact' => '09990123457',
                'year_level' => 'Grade 5',
                'gender' => 'Female',
                'address' => 'Tiza, Roxas City, Capiz'
            ]
            
            
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
