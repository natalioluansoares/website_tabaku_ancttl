<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationSaldoHusiDonatorAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_saldo_donator' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'naran_apoia' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descripsaun_apoia' => [
                'type'       => 'TEXT',
            ],

            'titulo_donator' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

            'instituisaun_donator' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

            'sexo_donator' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'saldo_tama_donator' => [
                'type'       => 'BIGINT',
                'constraint' => 20,
            ],

            'diresaun_donator'    => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],

            'total_saldo_donator'    => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],

            'data_osan_tama_donator'    => [
                'type'           => 'DATE',
            ],

            'horas_osan_tama_donator'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],

            'deleted_at'    => [
                'type'           => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id_saldo_donator', true);
        $this->forge->addForeignKey('diresaun_donator', 'akundiresaun', 'id_diresaun', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('total_saldo_donator', 'total_saldo', 'id_saldo', 'CASCADE', 'CASCADE');
        $this->forge->createTable('total_saldo_donator');
    
    }

    public function down()
    {
         $this->forge->dropTable('total_saldo_donator');
    }
}
