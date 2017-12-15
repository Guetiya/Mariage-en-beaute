<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \DB::table('categories')->insert([
            ['name' => 'Peinado'],
            ['name' => 'Maquillaje'],
            ['name' => 'Asesoria de imagen'],
            ['name' => 'Nutrición']
        ]);
    }
}
