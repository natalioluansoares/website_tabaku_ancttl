<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProjectAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'projeito_anct_tl';
    protected $primaryKey       = 'id_projeito';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['introdusaun','titulo_projeito', 'objectivo_projeito', 'durasaun_projeito',
                                 'implementasaun_projeito', 'benefisiariu_projeito','horas_project','diretor_project',
                                  'lian_maktaka', 'diresaun', 'created', 'kode_project', 'aktivo_project', 'file_project'];

    // Dates
   protected $validationRules      = [
            'introdusaun'               => 'required',
            'titulo_projeito'           => 'required',
            'objectivo_projeito'        => 'required',
            'durasaun_projeito'         => 'required',
            'implementasaun_projeito'   => 'required',
            'benefisiariu_projeito'     => 'required',
            'diresaun'                  => 'required',
            'created'                   => 'required',
            'file_project'              => 'uploaded[file_project]|mime_in[file_project,application/pdf]|max_size[file_project,16384]',
            'lian_maktaka'              => 'required',
    ];
    protected $validationMessages   = [
            'introdusaun' => [
            'required'  => 'Dados Introdusaun Sei Mamuk.',
        ],
            'titulo_projeito' => [
            'required'  => 'Dados Titulo Projeito Sei Mamuk.',
        ],
            'objectivo_projeito' => [
            'required'  => 'Dados Objectivo Projeito Sei Mamuk.',
        ],
            'durasaun_projeito' => [
            'required'  => 'Dados Durante Projeito Sei Mamuk.',
        ],
            'implementasaun_projeito' => [
            'required'  => 'Dados Lokalidade Implementasaun Projeito Sei Mamuk.',
        ],
            'benefisiariu_projeito' => [
            'required'  => 'Dados Benefisiariu Projeito Sei Mamuk.',
        ],
            'diresaun' => [
            'required'  => 'Dados Diresaun Sei Mamuk.',
        ],
            'created' => [
            'required'  => 'Dados Data Projecto Sei Mamuk.',
        ],
            'lian_maktaka' => [
            'required'  => 'Dados Lian Maktaka Sei Mamuk.',
        ],
        'file_project' => [
            'uploaded' => 'Tenki Iha File Atu Upload',
			'mime_in' => 'File Extention Tenki Hanesan pdf',
			'max_size' => 'Ukuran File Maksimal 10 MB'
        ]
    ];
    
    protected $db;
    function getmedia()
    {
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $builder = $this->db->table('projeito_anct_tl');
        $builder->select('*');
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');

        $this->where('naran_kompleto_diresaun =', $data);
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function getPaginated($num, $keyword = null)
    {
        $this->builder();
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->select('*');
         $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');;
        if ($keyword != '') {
            $this->like('titulo_projeito', $keyword);
            $this->orLike('created', $keyword);
            // $this->orLike('fatin', $keyword);
            // $this->orLike('descripsaun', $keyword);
        }
        $this->where('naran_kompleto_diresaun', $data);
        $this->orderBy('id_projeito', 'DESC');
        return [
            'projeito' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function detailproject()
    {
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');;
        $this->orderBy('id_projeito', 'DESC');
        $this->where('naran_kompleto_diresaun =', $data);
        $query = $this->first();
        return $query;
    }
    public function filterproject(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $data = helperDiresaun()->naran_kompleto_diresaun;
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        
        $this->where('created >=', $start);
        $this->where('created <=', $end);
        $this->where('naran_kompleto_diresaun =', $data);
        $query = $this->findAll();
        return $query;
    }

    // Project Diretor
    function getdiretorproject()
    {
        $builder = $this->db->table('projeito_anct_tl');
        $builder->select('*');
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function getDiretorPaginatedProject($num, $keyword = null)
    {
        $this->builder();
        $this->select('*');
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        if ($keyword != '') {
            $this->like('titulo_projeito', $keyword);
            $this->orLike('created', $keyword);
            // $this->orLike('fatin', $keyword);
            // $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('id_projeito', 'DESC');
        return [
            'projeito' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function detaildiretorproject()
    {
         $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->orderBy('id_projeito', 'DESC');
        $query = $this->first();
        return $query;
    }
    public function filterdiretorproject(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
         $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->where('created >=', $start);
        $this->where('created <=', $end);
        $query = $this->findAll();
        return $query;
    }
    public function edit_data_diretor($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_projeito' => $id));
        return $query;
    }
    public function PilihProjectDiretor($id)
    {
        // $this = $this->db->table('relatorio_narativa');
        $this->select('*');
        $this->join('regulamento_sistema', 'projeito_anct_tl.diresaun = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
        'regulamento', 'left');
        $query = $this->getWhere(['id_projeito' => $id]);
         return $query;
    }

    public function HapusProjeitoImage($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_projeito' => $id));
        return $query;
    }
}
