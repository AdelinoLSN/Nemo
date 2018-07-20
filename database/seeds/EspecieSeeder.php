<?php

use Illuminate\Database\Seeder;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<5;$i++) {
        	DB::table('especie_peixes')->insert([
                'nome' => str_random(7),
                'psicultura_id'=>mt_rand (1 ,3),
                'tipo_racao' => str_random(7),
                'tempo_desenvolvimento' =>mt_rand (1 ,40),
                'temperatura_ideal_agua' =>mt_rand (1 ,40),
                'quantidade_por_volume' =>mt_rand (1 ,40)
            ]);
    }
}
}