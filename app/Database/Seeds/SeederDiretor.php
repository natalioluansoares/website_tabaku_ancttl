<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederDiretor extends Seeder
{
    public function run()
    {
        $data  =  [
            'naran_kompleto'            => 'Natalio Cristianto Luan Soares',
            'password'                  =>  password_hash('12345',PASSWORD_BCRYPT),
            'numero_eleitural'          =>  '34567890234534',
            'sexo'                      =>  'Mane',
            'status_servisu'            =>  'Aktivo',
            'fatin_moris'               =>  'Fatuberlio',
            'loron_moris'               =>  '2002-04-23',
            'numero_whatsapp'           =>  '+6282147675980',
            'email'                     =>  'natalioluansoares@gmail.com',
            'regulamento'               =>   1,
            'valido'                    =>   1
            
        ];
        $insert = $this->db->table('akundiretor');
        $insert->insert($data);
    }
}
