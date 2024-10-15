<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationRegulamento extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_regulamento' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'regulamento' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_regulamento', true);
        $this->forge->createTable('regulamento_sistema');
    
    }

    public function down()
    {
         $this->forge->dropTable('regulamento_sistema');
    }
}
