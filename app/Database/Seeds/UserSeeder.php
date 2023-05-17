<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_user' => "angel",
            "email_user" => "angel@dev.com",
            "password_user" => password_hash('angel', PASSWORD_BCRYPT)
        ];
        // kalau array array, pakai insert batch
        $this->db->table('users')->insert($data);
    }
}
