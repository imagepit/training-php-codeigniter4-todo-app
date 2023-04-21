<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TodosMigration extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at datetime default current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('todos');
    }

    public function down()
    {
        //
        $this->forge->dropTable('todos');
    }
}
