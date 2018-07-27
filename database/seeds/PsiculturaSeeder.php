<?php

use Illuminate\Database\Seeder;

class PisciculturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
        	DB::table('pisciculturas')->insert([
                'nome' => str_random(10)]
            );
        }
    }
}
