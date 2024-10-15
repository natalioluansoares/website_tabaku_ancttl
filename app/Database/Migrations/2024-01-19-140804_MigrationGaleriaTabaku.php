<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationGaleriaTabaku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_galeria' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tabaku' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'galeria' => [
                'type'       => 'VARCHAR',
                'constraint'     => '400',

            ],
        ]);
        $this->forge->addKey('id_galeria', true);
        $this->forge->addForeignKey('tabaku', 'media_tabaku', 'id_tabaku', 'CASCADE', 'CASCADE');
        $this->forge->createTable('galeria_tabaku');
    
    }

    public function down()
    {
         $this->forge->dropTable('galeria_tabaku');
    }
}
