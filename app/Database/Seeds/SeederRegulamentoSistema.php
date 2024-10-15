<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederRegulamentoSistema extends Seeder
{
    public function run()
    {
        $data  =  [
            [
                'regulamento'            => 'Diretor ANCT-TL',
            ],
            [
                'regulamento'            => 'Administrasaun Ho Finansas ANCT-TL',
            ],
            [
                'regulamento'            => 'The Union ANCT-TL',
            ],
            [
                'regulamento'            => 'Advokasia No Monitorin ANCT-TL',
            ],
            [
                'regulamento'            => 'Kampanha No Treinamentu ANCT-TL',
            ],
            
        ];
        $insert = $this->db->table('regulamento_sistema');
        $insert->insertBatch($data);
    }
}
