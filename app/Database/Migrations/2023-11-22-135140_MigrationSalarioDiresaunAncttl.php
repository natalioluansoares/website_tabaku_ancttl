<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationSalarioDiresaunAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_salario' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_salario' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'unit_saldo' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'qty_saldo' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'freq_salario' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'kode_aktivo' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'data_salario' => [
                'type'           => 'DATE',
                'null'           => true
            ],

            'saldo_ancttl' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'horas_salario' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null'           => true
            ],
        ]);
        $this->forge->addKey('id_salario', true);
        $this->forge->addForeignKey('naran_salario', 'akundiresaun', 'id_diresaun', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('saldo_ancttl', 'total_saldo', 'id_saldo', 'CASCADE', 'CASCADE');
        $this->forge->createTable('salario_anct_tl');
    
    }

    public function down()
    {
         $this->forge->dropTable('salario_anct_tl');
    }
}
