<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'title' => 'TODO1',
            ],
            [
                'title' => 'TODO2',
            ],
            [
                'title' => 'TODO3',
            ]
        ];

        $this->db->table('todos')->insertBatch($data);
    }
}
