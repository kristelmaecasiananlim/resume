<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'John Doe',
                'email'      => 'john.doe@example.com',
                'subject'    => 'Portfolio Inquiry',
                'message'    => 'Hello Kristel, I am interested in discussing a potential project collaboration. Your blockchain work looks impressive!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Jane Smith',
                'email'      => 'jane.smith@techcorp.com',
                'subject'    => 'Job Opportunity',
                'message'    => 'We are looking for talented developers and your profile caught our attention. Would you be interested in a discussion?',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Mike Johnson',
                'email'      => 'mike.j@startup.io',
                'subject'    => 'Freelance Project',
                'message'    => 'Hi! We need help with a Flutter mobile app project. Are you available for freelance work?',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert sample data
        $this->db->table('contacts')->insertBatch($data);
    }
}