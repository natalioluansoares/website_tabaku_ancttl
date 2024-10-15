<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationMisaunVisaun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_misaunvisaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'misaun' => [
                'type'       => 'TEXT',
            ],
            'visaun' => [
                'type'       => 'TEXT',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_misaunvisaun', true);
        $this->forge->createTable('misaun_visaun');
    
    }

    public function down()
    {
         $this->forge->dropTable('misaun_visaun');
    }
}
