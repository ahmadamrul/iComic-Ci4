<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Sakeea',
                'address'    => 'Jl. 43 Bandung',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Loari',
                'address'    => 'Jl. 43 Semarang',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Moana',
                'address'    => 'Jl. 23 ta',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/Jakarta")
            ], [
                'name'       => 'Ssaukma',
                'address'    => 'Jl. 21 Bandung',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Laaoris',
                'address'    => 'Jl. 43 gg',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Luksi',
                'address'    => 'Jl. 41 Jakarta',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/Jakarta")
            ], [
                'name'       => 'Rokasdka',
                'address'    => 'Jl. 411 Bandung',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Rt',
                'address'    => 'Jl. 5 Semarang',
                'created_at' => Time::now(),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'SQae',
                'address'    => 'Jl. 01 Jember',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/Jakarta")
            ], [
                'name'       => 'Sae',
                'address'    => 'Jl. 12 Bandung',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Sea',
                'address'    => 'Jl. 11 Lo',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Aef',
                'address'    => 'Jl. 44 Jakarta',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/Jakarta")
            ], [
                'name'       => 'SSr',
                'address'    => 'Jl. 4123 Bandung',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'Rsa',
                'address'    => 'Jl. 12 Semarang',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/jakarta")
            ],
            [
                'name'       => 'ASs',
                'address'    => 'Jl. 21 Jakarta',
                'created_at' => Time::now("Asia/jakarta"),
                'updated_at' => Time::now("Asia/Jakarta")
            ]

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO people (name, address,created_at,updated_at) VALUES(:name:, :address:,:created_at:,:updated_at:)', $data);

        // Using Query Builder
        $this->db->table('people')->insertBatch($data);
    }
}
