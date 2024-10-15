<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationTransactionPaymentAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaction' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_saldo_transaction' => [
                'type'       => 'BIGINT',
                'constraint' => '20',
                'unsigned'       => true,
            ],

            'diresaun_transaction' => [
                'type'       => 'BIGINT',
                'constraint' => '20',
                'unsigned'       => true,
            ],
            'naran_foti_osan'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            
            'numero_eleitural_osan'    => [
               'type'           => 'BIGINT',
                'constraint'    => '20',
                'unsigned'      => true,
            ],

            'total_osan_transaction'    => [
               'type'           => 'BIGINT',
                'constraint'    => '20',
                'unsigned'      => true,
            ],

            'kode_transaction'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],

            'descripsaun'    => [
                'type'           => 'TEXT',
            ],

            'data_transaction'    => [
                'type'           => 'DATE',
            ],

            'horas_transaction'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],

            'update_transaction'    => [
                'type'           => 'INT',
                'constraint'     => 4,
            ],

            'deleted_at'    => [
                'type'           => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id_transaction', true);
        $this->forge->addForeignKey('diresaun_transaction', 'akundiresaun', 'id_diresaun', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_saldo_transaction', 'total_saldo', 'id_saldo', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transaction_payment');
    
    }

    public function down()
    {
         $this->forge->dropTable('transaction_payment');
    }
}
