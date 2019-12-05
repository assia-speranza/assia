<?php

use Illuminate\Database\Seeder;

class EmbarquementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=2; $i <2; $i++) 
        {
        DB::table('embarquements')->insert([
            'num_embarquement'=>$i,
            'num_siege'=>$i,
            'date_embarquement'=>now(),
            'num_enregistrement'=>$i,
            ]);  
   




    }
}
}