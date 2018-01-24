<?php

use Illuminate\Database\Seeder;
use MetodikaTI\Specialties;
class SpecialtiesSeeder extends Seeder
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
            'name' => 'Alergia e inmunología ',
            'estatus' => 'activo'
          ],
          [
            'name' => 'Alergología',
            'estatus' => 'activo'
          ],          [
            'name' => 'Alergología pediátrica',
            'estatus' => 'activo'
          ],
          [
            'name' => 'Andrología',
            'estatus' => 'activo'
          ]
        ];
        foreach ($data as $item) {
          Specialties::create($item);
        }
    }
}
