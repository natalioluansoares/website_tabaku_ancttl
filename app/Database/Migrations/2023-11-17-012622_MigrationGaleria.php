<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationGaleria extends Migration
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
            'media' => [
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
        $this->forge->addForeignKey('media', 'media_anct_tl', 'id_media', 'CASCADE', 'CASCADE');
        $this->forge->createTable('galeria_anct_tl');
    
    }

    public function down()
    {
         $this->forge->dropTable('galeria_anct_tl');
    }
}
