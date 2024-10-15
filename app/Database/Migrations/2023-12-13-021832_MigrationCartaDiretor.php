<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationCartaDiretor extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id_carta' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'data_carta' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'data_carta' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

            'periode_carta' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'profisaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'carta' => [
                'type'       => 'TEXT',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_carta', true);
        $this->forge->addForeignKey('profisaun', 'akundiretor', 'id_diretor', 'CASCADE', 'CASCADE');
        $this->forge->createTable('carta_diretor');
    
    }

    public function down()
    {
         $this->forge->dropTable('carta_diretor');
    }
}
