<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfileMedia extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_diretor';
    protected $primaryKey       = 'id_profile';
    // protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;

    
    

    protected $db;
    public function profileDiretorRow()
    {

        $this->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        $query = $this->first(); 
        return $query; 
    }

    function getprofile()
    {
        $builder = $this->db->table('profile_diretor');
        $builder->select('*');
        $builder->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $builder->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        $query = $builder->get()->getResult(); 
        return $query; 
    }
    function paginationprofile($num, $keyword = null)
    {
        $this->builder();
        $this->builder()->select('*');
        $this->builder()->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->builder()->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        if ($keyword != '') {
            $this->builder()->like('naran_kompleto', $keyword);
            $this->builder()->orLike('profile', $keyword);
            $this->builder()->orLike('sexo', $keyword);
        }
        $this->orderBy('id_profile', 'DESC');
        return [
            'profile' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filterprofile(){
        $this->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data_profile >=', $start);
        $this->where('data_profile <=', $end);
        $query = $this->findAll();
        return $query;
    }
}
