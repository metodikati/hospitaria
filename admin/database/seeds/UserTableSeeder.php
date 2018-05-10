<?php

use Illuminate\Database\Seeder;

use MetodikaTI\User;

class UserTableSeeder extends Seeder
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
            'name' => 'Demon',
            'email' => 'demon@metodika.com.mx',
            'password' => bcrypt('Mku8njdro0@'),
            'user_profile_id' => 1
          ],
          [
            'name' => 'U-erre',
            'email' => 'u-erre@metodika.com.mx',
            'password' => bcrypt('Huo0lpaw@'),
            'user_profile_id' => 2            
          ]
        ];

        foreach ($data as $item) {
          User::create($item);
        }
    }
}
