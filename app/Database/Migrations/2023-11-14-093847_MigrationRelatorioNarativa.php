<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationRelatorioNarativa extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id_narativa' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'topiko_narativa' => [
               'type'       => 'Text',
            ],

            'contuedo_narativa' => [
                'type'       => 'Text',
            ],

            'file' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],

            'diresaun_narativa' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'data' => [
                'type'       => 'DATE',
                'null'       =>true,
            ],
            'horas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       =>true,
            ],
            'kode_relatorio' => [
                'type'       => 'INT',
                'constraint' => 2,
            ],
            'tinan_relatorio' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_narativa', true);
        $this->forge->addForeignKey('diresaun_narativa', 'regulamento_sistema', 'id_regulamento', 'CASCADE', 'CASCADE');
        $this->forge->createTable('relatorio_narativa');
    
    }

    public function down()
    {
         $this->forge->dropTable('relatorio_narativa');
    }
}
