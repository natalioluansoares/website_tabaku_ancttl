<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSalarioDiresaunAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'salario_anct_tl';
    protected $primaryKey       = 'id_salario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_salario', 'unit_saldo', 'qty_saldo', 'freq_salario', 'kode_aktivo',
                                  'data_salario', 'saldo_ancttl', 'horas_salario', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'naran_salario'  => 'required',
            'unit_saldo'            => 'required',
            'qty_saldo'       => 'required',
            'freq_salario'          => 'required',
            'kode_aktivo'             => 'required',
            'data_salario'              => 'required',
            'saldo_ancttl'      => 'required',
            'horas_salario'     => 'required',
    ];
    protected $validationMessages   = [
            'naran_salario'  => [
            'required'          => 'Dados Naran Sei Mamuk.',
        ],
            'unit_salario' => [
            'required'          => 'Dados Unit Salario Sei Mamuk.',
        ],
            'qty_salario' => [
            'required'          => 'Dados Qty Salario Sei Mamuk.',
        ],
            'freq_salario'       => [
            'required'          => 'Dados Freq Salario Sei Mamuk.',
        ],
            'data_salario' => [
            'required'          => 'Dados Data Salario Sei Mamuk.',
        ],
            'saldo_ancttl' => [
            'required'          => 'Dados Instituisaun Sei Mamuk.',
        ],
    ];

    public function salario()
    {
        if ((isset($_GET['tinan']) && $_GET['tinan']!='')|| (isset($_GET['fulan']) && $_GET['fulan']!='')){

            $fulan              = $_GET['fulan'];
            $tinan              = $_GET['tinan'];
            $osan   = $fulan.$tinan;
        }else{

            $fulan      = date('m');
            $tinan      = date('Y');
            $osan   = $fulan.$tinan;
        }
        $this->join('akundiresaun', 'salario_anct_tl.naran_salario = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'left');
        $this->join('total_saldo', 'salario_anct_tl.saldo_ancttl = total_saldo.id_saldo',
        'total_saldo', 'left');
        $this->where('kode_aktivo =', $osan);
        $this->orderBy('id_salario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    public function downloadsalario()
    {
        $this->join('akundiresaun', 'salario_anct_tl.naran_salario = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'left');
        $this->join('total_saldo', 'salario_anct_tl.saldo_ancttl = total_saldo.id_saldo',
        'total_saldo', 'left');
        $this->orderBy('id_salario', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    public function editsalario()
    {
        $this->join('akundiresaun', 'salario_anct_tl.naran_salario = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'left');
        $this->join('total_saldo', 'salario_anct_tl.saldo_ancttl = total_saldo.id_saldo',
        'total_saldo', 'left');
        $this->orderBy('id_salario', 'DESC');
        $query = $this->first();
        return $query;
    }

}
