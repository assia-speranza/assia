<?php

use Illuminate\Database\Seeder;

class Reservation_volsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // DB::table('Reservation_vols')->insert([
                 
        //         'reference_reservation' => 'AF1',
        //         'num_vol' =>'FA1111',
        //         ]);
        
    //  $faker = Faker\Factory::create();
    //     for ($i=1; $i <2 ; $i++) 
    //     {
        DB::table('Reservation_vols')->insert([
            'reference_reservation' => "FA111111",
            'id_vol'=>2,

            ]);
            DB::table('Reservation_vols')->insert([
                'reference_reservation' => "FA222222",
                'id_vol'=>3,
    
                ]);


    }
}
