<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAbsensi extends Seeder
{
    public function run()
    {
         $data  =  [
            [
                'diresaun'              => 1,
                'data_tama'             => '2023-11-01',
                'horas_tama'            => '08:00',
                'absensi_diresaun'      => 'Dader',
                'kodeabsensi'           => 112023,
                'presente'              => 1,
                'alpha'                 => 1,
            ],
            [
                'diresaun'              => 2,
                'data_tama'             => '2023-11-01',
                'horas_tama'            => '08:00',
                'absensi_diresaun'      => 'Dader',
                'kodeabsensi'           => 112023,
                'presente'              => 1,
                'alpha'                 => 1,
            ],
            [
               'diresaun'               => 3,
                'data_tama'             => '2023-11-01',
                'horas_tama'            => '08:00',
                'absensi_diresaun'      => 'Dader',
                'kodeabsensi'           => 112023,
                'presente'              => 1,
                'alpha'                 => 1,
            ],
            [
               'diresaun'               => 4,
                'data_tama'             => '2023-11-01',
                'horas_tama'            => '08:00',
                'absensi_diresaun'      => 'Dader',
                'kodeabsensi'           => 112023,
                'presente'              => 1,
                'alpha'                 => 1,
            ],
            
        ];
        $insert = $this->db->table('absensi');
        $insert->insertBatch($data);
    }
}
