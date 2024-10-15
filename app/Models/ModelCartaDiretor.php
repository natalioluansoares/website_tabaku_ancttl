<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCartaDiretor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'carta_diretor';
    protected $primaryKey       = 'id_carta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['data_carta', 'periode_carta', 'profisaun', 'lingua', 'carta', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'data_carta'        => 'required',
            'periode_carta'     => 'required',
            'profisaun'         => 'required',
            'carta'             => 'required',
            'lingua'            => 'required',
    ];
    protected $validationMessages   = [
            'data_carta' => [
            'required'  => 'Dados Data Carta Sei Mamuk.',
        ],
            'periode_carta' => [
            'required'  => 'Dados Periode Carta Sei Mamuk.',
        ],
            'profisaun' => [
            'required'  => 'Dados Profisaun Sei Mamuk.',
        ],
            'carta' => [
            'required'  => 'Dados Carta Diretor Sei Mamuk.',
        ],
            'lingua' => [
            'required'  => 'Dados Lian Sei Mamuk.',
        ],
    ];

    public function cartadiretor()
    {
       $this->select('carta_diretor.id_carta, akundiretor.id_diretor, 
        akundiretor.naran_kompleto, akundiretor.regulamento, carta_diretor.profisaun,
        carta_diretor.data_carta,carta_diretor.periode_carta, carta_diretor.carta, carta_diretor.lingua,
        regulamento_sistema.id_regulamento, regulamento_sistema.regulamento as diretorregulamento');
        $this->join('akundiretor', 'carta_diretor.profisaun = akundiretor.id_diretor', 
        'regulamento', 'left');
         $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento',
         'naran_kompleto', 'regulamento', 'left');
        $this->orderBy('id_carta', 'DESC');
        $query = $this->findAll();
        return $query;  
    }
    public function cartadiretorfirst()
    {
       $this->select('carta_diretor.id_carta, akundiretor.id_diretor, 
        akundiretor.naran_kompleto, akundiretor.regulamento, carta_diretor.profisaun,
        carta_diretor.data_carta,carta_diretor.periode_carta, carta_diretor.carta,carta_diretor.lingua,
        regulamento_sistema.id_regulamento, regulamento_sistema.regulamento as diretorregulamento');
        $this->join('akundiretor', 'carta_diretor.profisaun = akundiretor.id_diretor', 
        'regulamento', 'left');
         $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento',
         'naran_kompleto', 'regulamento', 'left');
        $this->orderBy('id_carta', 'DESC');
        $query = $this->first();
        return $query;  
    }
    // public function cartadiretor()
    // {
    //     $this->select('carta_diretor.profisaun, regulamento_sistema.id_regulamento, 
    //     regulamento_sistema.regulamento as diretorregulamento, akundiretor.id_diretor, akundiretor.naran_kompleto');
    //     $this->join('regulamento_sistema', 'carta_diretor.profisaun = regulamento_sistema.id_regulamento', 
    //     'regulamento', 'left');
    //      $this->join('akundiretor', 'regulamento_sistema.id_regulamento = akundiretor.regulamento',
    //      'naran_kompleto', 'regulamento', 'left');
    //     $this->orderBy('id_carta', 'DESC');
    //     $query = $this->findAll();
    //     return $query;  
    // }

}
