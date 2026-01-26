<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'        => 'Vital Link Chain: Blockchain-Based Secure Shared Access System',
                'description'  => 'A decentralized healthcare records management system utilizing blockchain technology and smart contract-based access control for secure patient OPD records with integrated encryption protocols. Built with Flutter, Solidity, Node.js, Web3.js, Truffle, Ganache, and MongoDB.',
                'date_range'   => 'February - December 2025',
                'logo_path'    => 'images/project-logo/vital-link-chain-logo.png',
                'project_url'  => 'https://drive.google.com/file/d/1tu52Ws49DQ_qtpPAbv_im9hISlecI6lD/view?usp=sharing',
                'technologies' => 'Flutter, Solidity, Node.js, Web3.js, Truffle, Ganache, MongoDB',
                'status'       => 'active',
                'display_order' => 1,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'Techno Desk Works',
                'description'  => 'A freelance marketplace platform for students to offer professional services, featuring profile creation, portfolio building, messaging, and payment handling. Built with Dart using Flutter framework.',
                'date_range'   => 'May - June 2024',
                'logo_path'    => 'images/project-logo/techno-desk-works-logo.png',
                'project_url'  => 'https://drive.google.com/file/d/1EoXmngUH1gCjN_ewbdm2Lg8Ig0Stk2p8/view?usp=sharing',
                'technologies' => 'Flutter, Dart',
                'status'       => 'active',
                'display_order' => 2,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'Guardium',
                'description'  => 'A health monitoring wearable device concept for epilepsy patients that tracks vital parameters and alerts caregivers through mobile devices. Completed ideation phase using Figma.',
                'date_range'   => 'May - June 2024',
                'logo_path'    => 'images/project-logo/guardium-logo.png',
                'project_url'  => 'https://drive.google.com/file/d/1SRl6d3bL6RtHsXId5p-CaH2uoQtkE6OP/view?usp=sharing',
                'technologies' => 'Figma, IoT',
                'status'       => 'active',
                'display_order' => 3,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'June III',
                'description'  => 'An optimized inventory management system built with HTML, CSS, and PHP.',
                'date_range'   => 'March - May 2024',
                'logo_path'    => 'images/project-logo/june-iii-logo.png',
                'project_url'  => null,
                'technologies' => 'HTML, CSS, PHP',
                'status'       => 'active',
                'display_order' => 4,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'OSSF (Opportunity Space for Student Freelancers)',
                'description'  => 'An online marketplace connecting businesses with student freelancers for remote work. Built with HTML, CSS, and JavaScript.',
                'date_range'   => 'November - December 2023',
                'logo_path'    => 'images/project-logo/ossf-logo.png',
                'project_url'  => null,
                'technologies' => 'HTML, CSS, JavaScript',
                'status'       => 'active',
                'display_order' => 5,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'title'        => 'You Matter Website',
                'description'  => 'A mental health support website providing curated music and videos for emotional wellbeing. Built with HTML and CSS.',
                'date_range'   => 'November - December 2022',
                'logo_path'    => 'images/project-logo/you-matter-logo.png',
                'project_url'  => null,
                'technologies' => 'HTML, CSS',
                'status'       => 'active',
                'display_order' => 6,
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert sample data
        $this->db->table('projects')->insertBatch($data);
    }
}
