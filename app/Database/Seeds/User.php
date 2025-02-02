<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $this->db->table('user')->insert([
            'nama' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role' => 'admin'
        ]);
    }
}
