<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRelatorioNarativa extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'relatorio_narativa';
    protected $primaryKey       = 'id_narativa';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['topiko_narativa', 'kode_narativa', 'conteudo_narativa', 'tinan_relatorio', 'file', 'kode_relatorio',
     'diresaun_narativa', 'data', 'horas', 'deleted_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'topiko_narativa'       => 'required',
            'diresaun_narativa'     => 'required',
            'conteudo_narativa'     => 'required',
            'file'                  => 'uploaded[file]|mime_in[file,application/pdf]|max_size[file,16384]',
    ];
    protected $validationMessages   = [
            'topiko_narativa' => [
            'required'  => 'Dados Topiko Narativa Sei Mamuk.',
        ],
            'diresaun_narativa' => [
            'required'  => 'Dados Naran Diresaun Sei Mamuk.',
        ],
            'conteudo_narativa' => [
            'required'  => 'Dados Konteudo Narativa Sei Mamuk.',
        ],
            'file' => [
            'uploaded' => 'Tenki Iha File Atu Upload',
			'mime_in' => 'File Extention Tenki Hanesan pdf',
			'max_size' => 'Ukuran File Maksimal 10 MB'
        ],
    ];
    protected $db;
    function getnarativa()
    {
        $builder = $this->db->table('relatorio_narativa');
        $builder->select('*');
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function getPaginated($num, $keyword = null)
    {
        $this->builder();
        $this->select('*');
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        if ($keyword != '') {
            $this->like('topiko_narativa', $keyword);
            $this->orlike('data', $keyword);
            $this->orlike('horas', $keyword);
            // $this->orLike('created', $keyword);
            // $this->orLike('fatin', $keyword);
            // $this->orLike('descripsaun', $keyword);
        }
        // $this->where('regulamento =', $data);
        $this->orderBy('id_narativa', 'DESC');
        return [
            'narativa' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    // function getDiretornarativa()
    // {
    //     $builder = $this->db->table('relatorio_narativa');
    //     $builder->select('*');
    //     $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
    //     'regulamento', 'left');
    //      $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
    //      'regulamento', 'left');
    //     $query = $builder->get()->getResult(); 
    //     return $query; 
    // }
    // function getDiretorPaginated($num, $keyword = null)
    // {
    //     $this->builder();
    //     $this->select('*');
    //     $this->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 
    //     'regulamento', 'left');
    //      $this->join('akundiresaun', 'relatorio_narativa.narativa_diresaun = akundiresaun.id_diresaun',
    //      'regulamento', 'left');
    //     if ($keyword != '') {
    //         $this->like('topiko_narativa', $keyword);
    //         $this->orlike('data', $keyword);
    //         $this->orlike('horas', $keyword);
    //         // $this->orLike('created', $keyword);
    //         // $this->orLike('fatin', $keyword);
    //         // $this->orLike('descripsaun', $keyword);
    //     }
    //     $this->orderBy('id_narativa', 'DESC');
    //     return [
    //         'narativa' =>$this->paginate($num),
    //         'pager'   =>$this->pager,
    //     ];
    // }
    public function detailnarativa()
    {
       $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->orderBy('id_narativa', 'DESC');
        $query = $this->first();
        return $query;  
    }
    // Relatorio Narativa Diretor
    public function detaildiretornarativa()
    {
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        $this->orderBy('id_narativa', 'DESC');
        $query = $this->first();
        return $query;  
    }
    public function PilihBlog($id)
    {
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
         $query = $this->getWhere(['id_narativa' => $id]);
         return $query;
    }
     public function PilihBlogDiretor($id)
    {
        // $this = $this->db->table('relatorio_narativa');
        $this->select('*');
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
        $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
        'regulamento', 'left');
        $query = $this->getWhere(['id_narativa' => $id]);
         return $query;
    }
     public function edit_data_diretor($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_narativa' => $id));
        return $query;
    }
     public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_narativa' => $id));
        return $query;
    }
    public function HapusBlog($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_narativa' => $id));
        return $query;
    }
    public function filternarativa(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $data = helperDiresaun()->regulamento;
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $this->where('regulamento', $data);
        $query = $this->findAll();
        return $query;
    }
    public function filterdiretornarativa(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
        'regulamento', 'left');
         $this->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
         'regulamento', 'left');
        
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $query = $this->findAll();
        return $query;
    }
}
