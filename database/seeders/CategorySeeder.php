<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Marriott',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'Aria',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'MGM Grand',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        foreach ($categories as $category) {
            Category::create(array(
                'name' => $category['name'],
                'description' => $category['description'],
                'image' => $category['image']
            ));
        }
    }
}
