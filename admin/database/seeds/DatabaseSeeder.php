<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();
		$this->call('UserTableSeeder');
		$this->call('SystemModuleTableSeeder');
		$this->call('UserProfileTableSeeder');
		$this->call('PermissionTableSeeder'); 
        $this->call('SpecialtiesSeeder');   
        $this->call('DoctorsSeeder');
	}
}
