<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMisaunVisaun extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'misaun_visaun';
    protected $primaryKey       = 'id_misaunvisaun';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['misaun', 'visaun', 'lingua_misaun_visaun','deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
            'lingua_misaun_visaun'  => 'required',
            'misaun'                => 'required',
            'visaun'                => 'required',
    ];
    protected $validationMessages   = [
            'lingua_misaun_visaun' => [
            'required'  => 'Dados Lian Sei Mamuk.',
        ],
            'misaun' => [
            'required'  => 'Dados Misaun Sei Mamuk.',
        ],
            'visaun' => [
            'required'  => 'Dados Visaun Sei Mamuk.',
        ],
    ];

}
