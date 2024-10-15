<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationChannelYoutube extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_link' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'link_media' => [
                'type'       => 'TEXT',
            ],
            'link_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'link_coding' => [
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
        $this->forge->addKey('id_link', true);
        $this->forge->createTable('media_sosial');
    
    }

    public function down()
    {
         $this->forge->dropTable('media_sosial');
    }
}
