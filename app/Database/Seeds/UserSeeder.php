<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_user' => "novin",
            "email_user" => "novin@dev.com",
            "password_user" => password_hash('novin', PASSWORD_BCRYPT)
        ];
        // kalau array array, pakai insert batch
        $this->db->table('users')->insert($data);
    }
}
