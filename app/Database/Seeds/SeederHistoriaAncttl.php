<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederHistoriaAncttl extends Seeder
{
    public function run()
    {
        $data  =  [
                'historia'            => 'Diretor ANCT-TL',
        ];
        $insert = $this->db->table('historia_anct_tl');
        $insert->insert($data);
    }
}
