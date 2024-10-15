<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationProfileDiresaunAncttl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_profile_diresaun' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_profile_diresaun_ancttl' => [
                 'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'lingua_profile_diresaun' => [
                'type'           => 'ENUM',
                'constraint'     => ['English', 'Portuguuesa', 'Tetum', 'Indonesia'],
                'default'        => 'English',
            ],
            
             'data_profile_diresaun' => [
                'type'          => 'VARCHAR',
                'constraint'    =>'100',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       =>true,
            ],
        ]);
        $this->forge->addKey('id_profile_diresaun', true);
        $this->forge->addForeignKey('id_profile_diresaun_ancttl', 'akundiresaun', 'id_diresaun', 'CASCADE', 'CASCADE');
        $this->forge->createTable('profile_diresaun');
    }

    public function down()
    {
        $this->forge->dropTable('profile_diresaun');
        
    }
}
