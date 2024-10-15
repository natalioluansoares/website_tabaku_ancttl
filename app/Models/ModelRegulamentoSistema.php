<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegulamentoSistema extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'regulamento_sistema';
    protected $primaryKey       = 'id_regulamento';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['regulamento', 'created_at', 'updated_at', 'deleted'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'regulamento'  => 'required|is_unique[regulamento_sistema.regulamento]',
    ];
    protected $validationMessages   = [
            'regulamento' => [
            'required'  => 'Dados Regulamento Sistema Sei Mamuk.',
            'is_unique' => 'Desculpa, Dados Nebe Ita Hatama Iha Tiha Ona.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
