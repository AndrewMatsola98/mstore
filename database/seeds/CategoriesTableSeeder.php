<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=> 'Мобільні телефони', 'code'=> 'mobiles', 'description'=> 'Опис мобільних телефонів'],
            ['name'=> 'Портативна техніка', 'code'=> 'portable', 'description'=> 'Опис для розділу портативної техніки'],
            ['name'=> 'Побутова техніка', 'code'=> 'appliances', 'description'=> 'Розділ з побутовою технікою'],
        ]);
    }
}
