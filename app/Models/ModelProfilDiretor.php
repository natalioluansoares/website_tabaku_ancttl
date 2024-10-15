<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfilDiretor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_diretor';
    protected $primaryKey       = 'id_profile';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_profile_diretor', 'lingua_profile', 'profile', 'data_profile', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'data_profile'      => 'required',
            'profile'           => 'required',
            'id_profile_diretor'=> 'required',
            'lingua_profile'    => 'required',
    ];
    protected $validationMessages   = [
            'data_profile' => [
            'required'  => 'Dados Data Profile Sei Mamuk.',
        ],
            'profile' => [
            'required'  => 'Dados Profile Sei Mamuk.',
        ],
            'id_profile_diretor' => [
            'required'  => 'Dados Naran Diretor Sei Mamuk.',
        ],
            'lingua_profile' => [
            'required'  => 'Dados Lian Sei Mamuk.',
        ],
    ];
    

    protected $db;
    public function profileDiretor()
    {
        $this->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        $this->orderBy('id_profile', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    public function profileDiretorRow()
    {

        $builder = $this->db->table('profile_diretor');
        $builder->select('*');
        $builder->join('akundiretor', 'profile_diretor.id_profile_diretor = akundiretor.id_diretor', 
        'naran_kompleto', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $builder->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiretor.regulamento', 
        'regulamento', 'left');
        $query = $builder->get()->getRow(); 
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
        $builder = $this->db->table('profile_diretor');
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data_profile >=', $start);
        $this->where('data_profile <=', $end);
        $query = $builder->get()->getResult();
        return $query;
    }
}
