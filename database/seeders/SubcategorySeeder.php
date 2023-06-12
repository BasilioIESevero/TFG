<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Ropa de trabajo */
            [
                'category_id' => 1,
                'name' => 'Camisas',
                'slug' => Str::slug('Camisas'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Delantales',
                'slug' => Str::slug('Delantales'),
            ],
            [
                'category_id' => 1,
                'name' => 'Calzado',
                'slug' => Str::slug('Calzado'),
            ],
            /* Cuberteria */
            [
                'category_id' => 2,
                'name' => 'Cucharas',
                'slug' => Str::slug('Cucharas'),
            ],
            [
                'category_id' => 2,
                'name' => 'Tenedores',
                'slug' => Str::slug('Tenedores'),
            ],
            [
                'category_id' => 2,
                'name' => 'Cuchillos',
                'slug' => Str::slug('Cuchillos'),
            ],
            /* Vajilla */
            [
                'category_id' => 3,
                'name' => 'Vidrio',
                'slug' => Str::slug('Vidrio'),
            ],
            [
                'category_id' => 3,
                'name' => 'Plástico',
                'slug' => Str::slug('Plástico'),
            ],
            [
                'category_id' => 3,
                'name' => 'Gres',
                'slug' => Str::slug('Gres'),
            ],
            [
                'category_id' => 3,
                'name' => 'Cerámica',
                'slug' => Str::slug('Cerámica'),
            ],
            /* Alimentación */
            [
                'category_id' => 4,
                'name' => 'Aceites',
                'slug' => Str::slug('Aceites'),
            ],
            [
                'category_id' => 4,
                'name' => 'Pastas',
                'slug' => Str::slug('Pastas'),
            ],
            [
                'category_id' => 4,
                'name' => 'Lácteos y derivados',
                'slug' => Str::slug('Lácteos y derivados'),
            ],
            /* Limpieza e higiene */
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ],
        ];
        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
