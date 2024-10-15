<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCartaMediaAncttl extends Model
{
    protected $table            = 'carta_diretor';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function lingua()
    {
       $this->select('carta_diretor.id_carta, akundiretor.id_diretor, 
        akundiretor.naran_kompleto, akundiretor.regulamento, carta_diretor.profisaun,
        carta_diretor.data_carta,carta_diretor.periode_carta, carta_diretor.carta, foto_diretor,
        regulamento_sistema.id_regulamento, regulamento_sistema.regulamento as diretorregulamento');
        $this->join('akundiretor', 'carta_diretor.profisaun = akundiretor.id_diretor', 
        'regulamento', 'left');
         $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento',
         'naran_kompleto', 'regulamento', 'left');
        $this->orderBy('id_carta', 'DESC');
        $query = $this->findAll();
        return $query;  
    }
    
    public function getcartadiretor($id)
    {
       $this->select('carta_diretor.id_carta, akundiretor.id_diretor, 
        akundiretor.naran_kompleto, akundiretor.regulamento, carta_diretor.profisaun,
        carta_diretor.data_carta,carta_diretor.periode_carta, carta_diretor.carta, carta_diretor.lingua, foto_diretor,
        regulamento_sistema.id_regulamento, regulamento_sistema.regulamento as diretorregulamento');
        $this->join('akundiretor', 'carta_diretor.profisaun = akundiretor.id_diretor', 
        'regulamento', 'left');
         $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento',
         'naran_kompleto', 'regulamento', 'left');
         $this->where('id_carta', $id);
        $this->orderBy('id_carta', 'DESC');
        $query = $this->first();
        return $query;  
    }
    function getlingua()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
         $builder->limit(4);
        $query = $builder->get()->getResult(); 
        return $query;  
    }
}
