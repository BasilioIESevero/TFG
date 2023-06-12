<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'name' => 'Ropa de trabajo',
                'slug' => Str::slug('Ropa de trabajo'),
                'icon' => '<i class="fas fa-shirt"></i>'
            ],
            [
                'name' => 'Cuberteria',
                'slug' => Str::slug('Cuberteria'),
                'icon' => '<i class="fas fa-utensils"></i>'
            ],
            [
                'name' => 'Vajilla',
                'slug' => Str::slug('Vajilla'),
                'icon' => '<i class="fas fa-martini-glass"></i>'
            ],
            [
                'name' => 'Alimentación',
                'slug' => Str::slug('Alimentación'),
                'icon' => '<i class="fas fa-carrot"></i>'
            ],
        ];

        foreach ($categories as $category) {

            $category = Category::factory()->create($category);
            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }

    }
}
