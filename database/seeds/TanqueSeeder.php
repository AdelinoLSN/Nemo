<?php

use Illuminate\Database\Seeder;

class TanqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         for($i = 0; $i < 10; $i++){
           DB::table('tanques')->insert([
             'volume' => rand(1,1000)/10,
             'manutencao_necessaria' => "Não",
             'piscicultura_id' => rand(1,5)
           ]);
         }
     }
}