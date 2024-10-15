<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfileMediaDiresaun extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_diresaun';
    protected $primaryKey       = 'id_profile_diresaun';
    // protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;

    
    

    protected $db;
    public function profileDiresaunRow()
    {

        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $query = $this->first(); 
        return $query; 
    }
    function getprofile()
    {
        $builder = $this->db->table('profile_diresaun');
        $builder->select('*');
        $builder->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $builder->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $query = $builder->get()->getResult(); 
        return $query; 
    }
    

    function paginationprofilediresaun($num, $keyword = null)
    {
        $this->builder();
        $this->builder()->select('*');
        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        if ($keyword != '') {
            $this->builder()->like('naran_kompleto_diresaun', $keyword);
            $this->builder()->orLike('profile_diresaun', $keyword);
            $this->builder()->orLike('sexo', $keyword);
        }
        $this->orderBy('id_profile_diresaun', 'DESC');
        return [
            'profile' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filterprofilediresaun(){
        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data_profile_diresaun >=', $start);
        $this->where('data_profile_diresaun <=', $end);
        $query = $this->findAll();
        return $query;
    }
}
