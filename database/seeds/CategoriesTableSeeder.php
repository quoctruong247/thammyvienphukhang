<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Thẩm mỹ Mắt',
            'slug' => Str::slug('Thẩm mỹ Mắt','-'),
            'on_off' => 0,
            
        ]);
       Category::create([
            'name' => 'Thẩm mỹ Mũi',
            'slug' => Str::slug('Thẩm mỹ Mũi','-'),
            'on_off' => 0,
            
        ]);
        Category::create([
            'name' => 'Thẩm mỹ Không Phẩu Thuật',
            'slug' => Str::slug('Thẩm mỹ Không Phẩu Thuật','-'),
            'on_off' => 0,
            
        ]);
        Category::create([
            'name' => 'Phun Xăm',
            'slug' => Str::slug('Phun Xăm','-'),
            'on_off' => 0,
            
        ]);

        //factory(App\Category::class, 50)->create();
    
    }
}
