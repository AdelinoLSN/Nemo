<?php

use Illuminate\Database\Seeder;

class QualidadeAguaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<5;$i++) {
        		$data = date('d-m-Y');
    			$data .= ' '.date('H:i:s');
        		DB::table('qualidade_aguas')->insert(['ph' => mt_rand (1 ,20),'id_tanque'=>mt_rand (1 ,5),'data'=>$data]);
        	}
    }
}
