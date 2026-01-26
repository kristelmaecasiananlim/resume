<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Delete existing admin if it exists
        $this->db->table('admins')->where('username', 'admin')->delete();

        $data = [
            'username'   => 'admin',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Insert data into the 'admins' table
        $this->db->table('admins')->insert($data);

        echo "Admin account created with username: admin, password: admin123";
    }
}
