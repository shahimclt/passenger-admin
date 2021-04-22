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
                'name' => 'People',
                'description' => '',
                'image' => ''
            ],
            [
                'name' => 'Places',
                'description' => '',
                'image' => ''
            ],
            [
                'name' => 'Perceptions',
                'description' => '',
                'image' => ''
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
