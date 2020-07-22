<?php

use Illuminate\Database\Seeder;

class Pariwisata_Lombok extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pariwisata_lombok')->insert([
            'NamaLokasi' =>  'Sengigi',
            'Wilayah' =>  'Lombok Barat',
            'Jarak_Dari_Mataram' =>  '5KM',
            'JenisTempat' =>  'Pantai',
            'Keterangan' =>  'Pantai dengan pasir putih dan terdapat dermaga',
         ]); 
    }
}