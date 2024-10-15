<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationMedia extends Migration
{
  public function up()
    {
        $this->forge->addField([
            'id_media' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'naran_intervista' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'topiko' => [
                'type'       => 'TEXT',
            ],
            'fatin' => [
                 'type'       => 'TEXT',
            ],

            'lian' => [
                'type'       => 'ENUM',
                'constraint'     => ['Tetum', 'Portuguesa','English', 'Indonesia'],
                'default'        => 'Tetum',
            ],

            'data' => [
                'type'       => 'DATE',
            ],
            'descripsaun' => [
                'type'       => 'TEXT',
            ],
            'conteudo' => [
                'type'       => 'TEXT',
            ],

            'link_facebook' => [
                  'type'       => 'TEXT',
            ],

            'link_youtube' => [
                  'type'       => 'TEXT',
            ],

            'link_video_youtube' => [
                'type'       => 'TEXT',
            ],

            'link_tik_tok' => [
                  'type'       => 'TEXT',
            ],

            'foto' => [
                 'type'        => 'VARCHAR',
                'constraint'   => '500',
            ],

            'kode_media' => [
                 'type'        => 'INT',
                 'constraint'   => 2,
            ],
            'aktivo_media' => [
                 'type'        => 'INT',
                 'constraint'   => 2,
                 'null'   => true,
            ],
            
        ]);
        $this->forge->addKey('id_media', true);
        $this->forge->createTable('media_anct_tl');
    
    }

    public function down()
    {
         $this->forge->dropTable('media_anct_tl');
    }

}
