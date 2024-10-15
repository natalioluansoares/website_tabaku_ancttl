<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationFullcalendar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '300',
            ],
            'start' => [
               'type'       => 'DATETIME',
            ],
            'end' => [
                'type'       => 'DATETIME',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('horario');
    
    }

    public function down()
    {
         $this->forge->dropTable('horario');
    }
}
