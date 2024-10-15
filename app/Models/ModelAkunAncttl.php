<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAkunAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akundiresaun';
    protected $primaryKey       = 'id_diresaun';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto_diresaun', 'numero_eleitural', 'sexo', 'status_servisu', 'fatin_moris', 
                                  'loron_moris', 'numero_whatsapp', 'password', 'email', 'regulamento_diresaun', 'valido', 'created_at',
                                   'updated_at', 'deleted_at', 'foto_diresaun'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'regulamento_diresaun'  => 'required',
        'numero_eleitural'      => 'required',
        'numero_whatsapp'       => 'required',
        'email'                 => 'required',
        'sexo'                  => 'required',
        'status_servisu'        => 'required',
        'fatin_moris'           => 'required',
        'loron_moris'           => 'required',
        'password'              => 'required',
        'foto_diresaun'      => 'uploaded[foto_diresaun]|mime_in[foto_diresaun,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_diresaun,16384]'
    ];
    protected $validationMessages   = [
        'regulamento_diresaun' => [
        'required'  => 'Dados Regulamento Sistema Sei Mamuk.',
        ],
        'password' => [
        'required'  => 'Dados Password Sei Mamuk.',
        ],
        'numero_eleitural' => [
        'required'  => 'Dados Numero Eleitural Sei Mamuk.',
        'is_unique' => 'Desculpa, Dados Nebe Ita Hatama Iha Tiha Ona.',
        ],
        'numero_whatsapp' => [
        'required'  => 'Dados Numero Whatsapp Sei Mamuk.',
        'is_unique' => 'Desculpa, Dados Nebe Ita Hatama Iha Tiha Ona.',
        ],
        'email' => [
        'required'  => 'Dados Email Sei Mamuk.',
        'is_unique' => 'Desculpa, Dados Nebe Ita Hatama Iha Tiha Ona.',
        ],
        'sexo' => [
        'required'  => 'Dados Sexo Sei Mamuk.',
        ],
        'status_servisu' => [
        'required'  => 'Dados Status Servisu Sei Mamuk.',
        ],
        'fatin_moris' => [
        'required'  => 'Dados Fatin Moris Sei Mamuk.',
        ],
        'loron_moris' => [
        'required'  => 'Dados Loron Moris Sei Mamuk.',
        ]
    ];
    function getakundiresaun()
    {
        $builder = $this->db->table('akundiresaun');
        $builder->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $builder->where('deleted_at =',null);
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationakundiresaun($num, $keyword = null)
    {
        $this->builder();

        $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        if ($keyword != '') {
            $this->like('naran_kompleto_diresaun', $keyword);
            $this->orLike('numero_eleitural', $keyword);
            $this->orLike('numero_whatsapp', $keyword);
            $this->orLike('email', $keyword);
            $this->orLike('loron_moris', $keyword);
            $this->orLike('regulamento', $keyword);
        }
        $this->where(' deleted_at=',null);
        $this->orderBy('id_diresaun', 'DESC');
        return [
            'akunancttl' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filterdiresaun(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->where('loron_moris >=', $start);
        $this->where('loron_moris <=', $end);
        $this->where('deleted_at =',null);
        $query = $this->findAll();
        return $query;
    }

    public function akunancttl()
    {
        $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->orderBy('id_diresaun', 'DESC');
        $query = $this->findAll();
        return $query;
    }
    public function trokaakunancttl()
    {
        $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->orderBy('id_diresaun', 'DESC');
        $query = $this->first();
        return $query;
    }

    public function cek_naran($naran_kompleto, $id=null)
    {
        $this->db   = \Config\Database::connect();
        $this->table('akundiresaun')->where('naran_kompleto_diresaun', $naran_kompleto);
        if ($id != null) {
            $this->table('akundiresaun')->where('id_diresaun !=', $id);
        }
        $nato = $this->get();
        return $nato;
    }
    public function cek_email($email, $id=null)
    {
        $this->db   = \Config\Database::connect();
        $this->table('akundiresaun')->where('email', $email);
        if ($id != null) {
            $this->table('akundiresaun')->where('id_diresaun !=', $id);
        }
        $nato = $this->get();
        return $nato;
    }

    public function PilihBlogDiretor($id)
    {
        $this->select('*');
        $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento',
        'regulamento', 'left');
        $query = $this->getWhere(['id_diresaun' => $id]);
         return $query;
    }
     
     public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_diresaun' => $id));
        return $query;
    }
    public function HapusBlog($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_diresaun' => $id));
        return $query;
    }
}
