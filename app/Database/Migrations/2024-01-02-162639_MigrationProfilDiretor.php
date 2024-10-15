<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationProfilDiretor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_profile' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_profile_diretor' => [
                 'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'lingua_profile' => [
                'type'           => 'ENUM',
                'constraint'     => ['English', 'Portuguuesa', 'Tetum', 'Indonesia'],
                'default'        => 'English',
            ],
            
             'data_profile' => [
                'type'          => 'VARCHAR',
                'constraint'    =>'100',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_profile', true);
        $this->forge->addForeignKey('id_profile_diretor', 'akundiretor', 'id_diretor', 'CASCADE', 'CASCADE');
        $this->forge->createTable('profile_diretor');
    }

    public function down()
    {
        $this->forge->dropTable('profile_diretor');
        
    }
}
