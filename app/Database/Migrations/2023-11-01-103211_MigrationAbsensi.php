<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationAbsensi extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_absensi' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'diresaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,

            ],
            'data_tama' => [
                'type'           => 'DATE',
            ],

            'horas_tama' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],

            'absensi_diresaun' => [
                'type'           => 'ENUM',
                'constraint'     => ['Dader', 'Lokraik'],
                'default'        => 'Dader',
            ],

            'kodeabsensi' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],

            'presente' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
            'alpha' => [
                'type'           => 'INT',
                'constraint'     => 11,

            ],
        ]);
        $this->forge->addKey('id_absensi', true);
        $this->forge->addForeignKey('diresaun', 'akundiresaun', 'id_diresaun', 'CASCADE', 'CASCADE');
        $this->forge->createTable('absensi');
    }

    public function down()
    {
         $this->forge->dropTable('absensi');
    }
}
