<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederMisaunVisaun extends Seeder
{
    public function run()
    {
        $data  =  [
                'misaun'            => 'Diretor ANCT-TL',
                'visaun'            => 'Diretor ANCT-TL',
        ];
        $insert = $this->db->table('misaun_visaun');
        $insert->insert($data);
    }
}
