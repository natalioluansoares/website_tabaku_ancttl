<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfileDiresaunAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profile_diresaun';
    protected $primaryKey       = 'id_profile_diresaun';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_profile_diresaun_ancttl','lingua_profile_diresaun', 
                                    'profile_diresaun', 'data_profile_diresaun', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'data_profile_diresaun'  => 'required',
            'profile_diresaun'              => 'required',
            'id_profile_diresaun_ancttl'     => 'required',
            'lingua_profile_diresaun'       => 'required',
    ];
    protected $validationMessages   = [
            'data_profile_diresaun' => [
            'required'  => 'Dados Data Profile Sei Mamuk.',
        ],
            'profile_diresaun' => [
            'required'  => 'Dados Profile Sei Mamuk.',
        ],
            'id_profile_diresaun_ancttl' => [
            'required'  => 'Dados Naran Diretor Sei Mamuk.',
        ],
            'lingua_profile_diresaun' => [
            'required'  => 'Dados Lian Sei Mamuk.',
        ],
    ];
    
    
    public function profileDiresaun()
    {
        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $this->orderBy('id_profile_diresaun', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    public function profileDiresaunHelper()
    {
         $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $this->where('naran_kompleto_diresaun =', $data);
        $this->orderBy('id_profile_diresaun', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    public function profileDiresaunHelperRow()
    {
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $this->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $this->where('naran_kompleto_diresaun =', $data);
        $this->orderBy('id_profile_diresaun', 'DESC');
        $query = $this->first();
        return $query;
    }
    public function profileDiresaunRow()
    {

        $builder = $this->db->table('profile_diresaun');
        $builder->select('*');
        $builder->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $builder->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $builder->orderBy('id_profile_diresaun', 'DESC');
        $query = $builder->get()->getRow(); 
        return $query; 
    }
    public function profileDiresaunResult()
    {

        $builder = $this->db->table('profile_diresaun');
        $builder->select('*');
        $builder->join('akundiresaun', 'profile_diresaun.id_profile_diresaun_ancttl = akundiresaun.id_diresaun', 
        'naran_kompleto_diresaun', 'loron_moris', 'sexo', 'foto_diretor', 'status_servisu','fatin_moris', 'left');
        $builder->join('regulamento_sistema', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun', 
        'regulamento', 'left');
        $builder->orderBy('id_profile_diresaun', 'DESC');
        $query = $builder->get()->getResult(); 
        return $query; 
    }
    
    
}
