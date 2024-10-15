<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationProjectAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_projeito' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'introdusaun' => [
                'type'       => 'TEXT',
            ],

            'titulo_projeito' => [
                'type'       => 'TEXT',
            ],

            'objectivo_projeito' => [
                'type'       => 'TEXT',
            ],

            'durasaun_projeito' => [
                'type'       => 'TEXT',
            ],

            'implementasaun_projeito' => [
                'type'       => 'TEXT',
            ],

            'benefisiariu_projeito' => [
                'type'       => 'TEXT',
            ],

            'logical_frame_work' => [
                'type'       => 'TEXT',
            ],

            'project_cycle_managament' => [
                'type'       => 'TEXT',
            ],

            'project_managament_risk' => [
                'type'       => 'TEXT',
            ],

            'result_based_managament' => [
                'type'       => 'TEXT',
            ],

            'monitoring_indereira_direita' => [
                'type'       => 'TEXT',
            ],

            'relatorio' => [
                'type'       => 'TEXT',
            ],

            'lian_maktaka' => [
                'type'       => 'TEXT',
            ],
            'diresaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],

            'created' => [
                'type'       => 'DATE',
            ],
            'updated' => [
                'type'       => 'DATE',
            ],
            'deleted' => [
                'type'       => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_projeito', true);
        $this->forge->addForeignKey('diresaun', 'regulamento_sistema', 'id_regulamento', 'CASCADE', 'CASCADE');
        $this->forge->createTable('projeito_anct_tl');
    
    }

    public function down()
    {
         $this->forge->dropTable('projeito_anct_tl');
    }
}
