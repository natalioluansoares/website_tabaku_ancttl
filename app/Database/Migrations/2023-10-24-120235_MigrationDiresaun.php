<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationDiresaun extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_diresaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_kompleto_diresaun' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
             'numero_eleitural' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'sexo' => [
                'type'           => 'ENUM',
                'constraint'     => ['Mane', 'Feto'],
                'default'        => 'Mane',
            ],
            'status_servisu' => [
                'type'           => 'ENUM',
                'constraint'     => ['Aktivo', 'La Aktivo'],
                'default'        => 'Aktivo',
            ],
            'fatin_moris' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',

            ],
            'loron_moris' => [
                'type'           => 'DATE',
            ],
            'numero_whatsapp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'regulamento_diresaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'valido' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'aktivo_servisu' => [
                'type'           => 'INT',
                'constraint'     => 11,
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
        $this->forge->addKey('id_diresaun', true);
        $this->forge->addForeignKey('regulamento', 'regulamento_sistema', 'id_regulamento', 'CASCADE', 'CASCADE');
        $this->forge->createTable('akundiresaun');
    }

    public function down()
    {
        $this->forge->dropTable('akundiresaun');
    }
}
