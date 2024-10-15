<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Provider\Lorem;

class SeederCartaDiretor extends Seeder
{
    public function run()
    {
        $data  =  [
            
                'data_carta'            => 'Fatuberlio, 23 Desember 2023',
                'periode_carta'         => '2023 - 2028',
                'profisaun'             => 1,
                'carta'                 => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi 
                                            aliquam consequuntur veritatis iusto deserunt dolores fuga est 
                                            ea, adipisci officiis natus alias numquam obcaecati quidem
                                            officia voluptates incidunt. Cum, laborum?',
            
        ];
        $insert = $this->db->table('carta_diretor');
        $insert->insert($data);
    }
}

