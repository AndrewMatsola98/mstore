<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //пароль адміна
        DB::table('users')->insert([
            'name' => 'Адміністратор',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1,
        ]);
    }
}