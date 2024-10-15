<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationHistoriaAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_historia' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'historia' => [
                'type'       => 'TEXT',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_historia', true);
        $this->forge->createTable('historia_anct_tl');
    
    }

    public function down()
    {
         $this->forge->dropTable('historia_anct_tl');
    }
}
