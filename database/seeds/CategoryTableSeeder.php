<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::truncate();  // 先清理表数据
        factory(Category::class, 20)->create();  // 一次填充20篇文章
    }
}
