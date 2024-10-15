<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSaldoDonatorAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'total_saldo_donator';
    protected $primaryKey       = 'id_saldo_donator';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['saldo_tama_donator','diresaun_donator', 'naran_apoia', 'descripsaun_apoia',
                                  'total_saldo_donator', 'data_osan_tama_donator', 'horas_osan_tama_donator', 'deleted_at'];

    // Dates
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
   protected $validationRules      = [
            'saldo_tama_donator'  => 'required',
            'diresaun_donator'  => 'required',
            'total_saldo_donator'  => 'required',
            'data_osan_tama_donator'  => 'required',
            'horas_osan_tama_donator'  => 'required',
            'deleted_at'  => 'required',
    ];
    protected $validationMessages   = [
            'saldo_tama_donator' => [
            'required'  => 'Dados Saldo Tama Donator Sei Mamuk.',
        ],
            'diresaun_donator' => [
            'required'  => 'Dados Naran Diresaun Sei Mamuk.',
        ],
            'total_saldo_donator' => [
            'required'  => 'Dados Total Saldo Donator Sei Mamuk.',
        ],
            'data_osan_tama_donator' => [
            'required'  => 'Dados Titulo Data Osan Tama Donator Sei Mamuk.',
        ],
    ];

    public function saldodonator()
    {
        $this->join('akundiresaun', 'total_saldo_donator.diresaun_donator = akundiresaun.id_diresaun',  
        'naran_kompleto_diresaun', 'left');
        $this->join('total_saldo', 'total_saldo_donator.total_saldo_donator = total_saldo.id_saldo',  
        'total_saldo', 'kode_osan','instituisaun', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->orderBy('id_saldo_donator', 'DESC');
        $query = $this->findAll();
        return $query;
    }

     public function filterdonator(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->join('akundiresaun', 'total_saldo_donator.diresaun_donator = akundiresaun.id_diresaun',  
        'naran_kompleto_diresaun', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->join('total_saldo', 'total_saldo_donator.total_saldo_donator = total_saldo.id_saldo',  
        'total_saldo', 'left');
        $this->where('data_osan_tama_donator >=', $start);
        $this->where('data_osan_tama_donator <=', $end);
        $this->where('naran_kompleto_diresaun', $data);
        $query = $this->findAll();
        return $query;
    }
}
