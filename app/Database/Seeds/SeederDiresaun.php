<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederDiresaun extends Seeder
{
    public function run()
    {
        $data = [
            [
            'naran_kompleto_diresaun'   => 'Emilia Leto',
            'password'                  =>  password_hash('12345',PASSWORD_BCRYPT),
            'numero_eleitural'          =>  '34567890234534',
            'sexo'                      =>  'Mane',
            'status_servisu'            =>  'Aktivo',
            'fatin_moris'               =>  'Fatuberlio',
            'loron_moris'               =>  '2002-04-23',
            'numero_whatsapp'           =>  '+6282147675980',
            'email'                     =>  'natalioluansoares@gmail.com',
            'regulamento'               =>   2,
            'valido'                    =>   1,
            'aktivo_servisu'            =>   1
            ],
            [
            'naran_kompleto_diresaun'   => 'Rio Boy',
            'password'                  =>  password_hash('12345',PASSWORD_BCRYPT),
            'numero_eleitural'          =>  '34567890234534',
            'sexo'                      =>  'Mane',
            'status_servisu'            =>  'Aktivo',
            'fatin_moris'               =>  'Fatuberlio',
            'loron_moris'               =>  '2002-04-23',
            'numero_whatsapp'           =>  '+6282147675980',
            'email'                     =>  'natalioluansoares@gmail.com',
            'regulamento'               =>   3,
            'valido'                    =>   1,
            'aktivo_servisu'            =>   1
            ],
            [
            'naran_kompleto_diresaun'   => 'Martinus Talo',
            'password'                  =>  password_hash('12345',PASSWORD_BCRYPT),
            'numero_eleitural'          =>  '34567890234534',
            'sexo'                      =>  'Mane',
            'status_servisu'            =>  'Aktivo',
            'fatin_moris'               =>  'Fatuberlio',
            'loron_moris'               =>  '2002-04-23',
            'numero_whatsapp'           =>  '+6282147675980',
            'email'                     =>  'natalioluansoares@gmail.com',
            'regulamento'               =>   4,
            'valido'                    =>   1,
            'aktivo_servisu'            =>   1
            ],
            [
            'naran_kompleto_diresaun'   => 'Mario Soares',
            'password'                  =>  password_hash('12345',PASSWORD_BCRYPT),
            'numero_eleitural'          =>  '34567890234534',
            'sexo'                      =>  'Mane',
            'status_servisu'            =>  'Aktivo',
            'fatin_moris'               =>  'Fatuberlio',
            'loron_moris'               =>  '2002-04-23',
            'numero_whatsapp'           =>  '+6282147675980',
            'email'                     =>  'natalioluansoares@gmail.com',
            'regulamento'               =>   5,
            'valido'                    =>   1,
            'aktivo_servisu'            =>   1
            ],
        ];
        $insert = $this->db->table('akundiresaun');
        $insert->insertBatch($data);
       
    }
}
