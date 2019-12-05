<?php

use Illuminate\Database\Seeder;

class AvionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <9 ; $i++) 
        { 

        DB::table('Avions')->insert([
            'num_avion'=>'B'.$i.$i.$i,
            'nom_avion' => "BOING AIRBUS",
            'capacite_avion' =>300,
            'nb_bagage_max'=>225,
        ]);
        }   
        
    
}
}