<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTotalSaldoAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'total_saldo';
    protected $primaryKey       = 'id_saldo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_osan','total_saldo', 'instituisaun'];
    protected $validationRules      = [
            'kode_osan'     => 'required',
            'instituisaun'  => 'required',
    ];
    protected $validationMessages   = [
            'kode_osan' => [
            'required'  => 'Dados Kode Osan Sei Mamuk.',
        ],
            'instituisaun' => [
            'required'  => 'Dados Instituisaun Sei Mamuk.',
        ],
    ];
}
