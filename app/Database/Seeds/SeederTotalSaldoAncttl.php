<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederTotalSaldoAncttl extends Seeder
{
    public function run()
    {
        $data = [
            'total_saldo'            => 10000,
            'instituisaun'            => 'Aliasa Nasional Controlo Tabaku Timor-Leste',
        ];
        $insert = $this->db->table('total_saldo');
        $insert->insert($data);
    }
}
