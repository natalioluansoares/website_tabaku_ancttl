<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHistoriaAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'historia_anct_tl';
    protected $primaryKey       = 'id_historia';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['historia', 'lingua_historia', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
            'lingua_historia'   => 'required',
            'historia'          => 'required',
    ];
    protected $validationMessages   = [
            'lingua_historia' => [
            'required'  => 'Dados Lian Sei Mamuk.',
        ],
            'historia' => [
            'required'  => 'Dados Historia Sei Mamuk.',
        ],
    ];
}
