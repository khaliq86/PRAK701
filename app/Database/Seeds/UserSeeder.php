<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();

        $data = [
            [
                'username' => 'ebel',
                'email' => 'ebel@gmail.com',
                'password' => password_hash('4321', PASSWORD_DEFAULT)
            ],
            [
                'username' => 'ansari',
                'email' => 'ansari@gmail.com',
                'password' => password_hash('2345', PASSWORD_DEFAULT)
            ],
            [
                'username' => 'fahmi',
                'email' => 'fahmi@gmail.com',
                'password' => password_hash('3456', PASSWORD_DEFAULT)
            ]
        ];

        $model->insertBatch($data);
    }
}