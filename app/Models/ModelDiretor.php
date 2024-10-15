<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDiretor extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'akundiretor';
    protected $primaryKey       = 'id_diretor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['naran_kompleto', 'password', 'numero_eleitural', 'sexo', 'status_servisu', 'fatin_moris', 'loron_moris',
                                    'numero_whatsapp', 'email', 'regulamento', 'valido', 'foto_diretor', 'created_at', 'updated_at',
                                    'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'naran_kompleto'    => 'required',
            'numero_eleitural'  => 'required',
            'sexo'              => 'required',
            'status_servisu'    => 'required',
            'fatin_moris'       => 'required',
            'loron_moris'       => 'required',
            'numero_whatsapp'   => 'required',
            'regulamento'       => 'required',
            'foto_diretor'      => 'uploaded[foto_diretor]|mime_in[foto_diretor,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_diretor,16384]'
    ];
    protected $validationMessages   = [
            'naran_kompleto' => [
            'required'  => 'Dados Naran Sei Mamuk Sei Mamuk.',
        ],
            'numero_eleitural' => [
            'required'  => 'Dados Naran Sei Mamuk Sei Mamuk.',
        ],
            'sexo' => [
            'required'  => 'Dados Sexo Sei Mamuk Sei Mamuk.',
        ],
            'status_servisu' => [
            'required'  => 'Dados Status Servisu Sei Mamuk Sei Mamuk.',
        ],
            'fatin_moris' => [
            'required'  => 'Dados Fatin Moris Sei Mamuk Sei Mamuk.',
        ],
            'loron_moris' => [
            'required'  => 'Dados Loron Moris Sei Mamuk Sei Mamuk.',
        ],
            'numero_whatsapp' => [
            'required'  => 'Dados Numero Whatsapp Sei Mamuk Sei Mamuk.',
        ],
            'regulamento' => [
            'required'  => 'Dados Regulamento Sistema Sei Mamuk Sei Mamuk.',
        ],
          
        'foto_diretor' => [
            'uploaded' => 'Tenki Iha File Atu Upload',
			'mime_in' => 'File Extention Tenki Hanesan Foto',
			'max_size' => 'Ukuran File Maksimal 10 MB'
        ],
    ];

    public function akundiretor()
    {
        $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->orderBy('id_diretor', 'DESC');
        $query = $this->findAll();
        return $query;
    }

    public function cek_naran($naran_kompleto, $id=null)
    {
        $this->db   = \Config\Database::connect();
        $this->table('akundiretor')->where('naran_kompleto', $naran_kompleto);
        if ($id != null) {
            $this->table('akundiretor')->where('id_diretor !=', $id);
        }
        $nato = $this->get();
        return $nato;
    }
    public function cek_email($email, $id=null)
    {
        $this->db   = \Config\Database::connect();
        $this->table('akundiretor')->where('email', $email);
        if ($id != null) {
            $this->table('akundiretor')->where('id_diretor !=', $id);
        }
        $nato = $this->get();
        return $nato;
    }
    public function PilihBlogDiretor($id)
    {
        $this->select('*');
        $this->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento',
        'regulamento', 'left');
        $query = $this->getWhere(['id_diretor' => $id]);
         return $query;
    }
     
     public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_diretor' => $id));
        return $query;
    }
    public function HapusBlog($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_diretor' => $id));
        return $query;
    }
}
