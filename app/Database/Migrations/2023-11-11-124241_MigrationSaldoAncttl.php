<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationSaldoAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_saldo' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_osan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'instituisaun' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'total_saldo' => [
                'type'       => 'BIGINT',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id_saldo', true);
        $this->forge->createTable('total_saldo');
    
    }

    public function down()
    {
         $this->forge->dropTable('total_saldo');
    }
}
