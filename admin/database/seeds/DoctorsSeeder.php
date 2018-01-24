<?php

use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
            'name' => 'SALVADOR GERARDO GUTIÉRREZ BARRERA',
            'email' => 'salvagutierrez@hotmail.com',
            'consulting_room' => 'CM-102',
            'celphone' => '21633010,21692620',
            'celphone' => '8182521588',
            'especialidades_id' => 1
          ]
        ];
    }
}
