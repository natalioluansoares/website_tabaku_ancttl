<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMediaAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'media_anct_tl';
    protected $primaryKey       = 'id_media';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_media','naran_intervista', 'topiko', 'fatin', 'data',
                                  'descripsaun', 'conteudo', 'link_facebook',
                                  'link_youtube', 'kode_media', 'link_tik_tok', 'foto', 'lian', 'link_video_youtube'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
            'naran_intervista'  => 'required',
            'topiko'            => 'required',
            'descripsaun'       => 'required',
            'lian'              => 'required',
            'conteudo'          => 'required',
            'fatin'             => 'required',
            'data'              => 'required',
            'link_youtube'      => 'required',
            'link_video_youtube'=> 'required',
            'link_facebook'     => 'required',
            'link_tik_tok'      => 'required',
            'foto'              => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,16384]'
    ];
    protected $validationMessages   = [
            'naran_intervista'  => [
            'required'          => 'Dados Naran Intervista Sei Mamuk.',
        ],
            'topiko' => [
            'required'          => 'Dados Topiko Sei Mamuk.',
        ],
            'lian' => [
            'required'          => 'Dados Lian Sei Mamuk.',
        ],
            'descripsaun'       => [
            'required'          => 'Dados Descripsaun Sei Mamuk.',
        ],
            'conteudo'          => [
            'required'          => 'Dados Konteudo Sei Mamuk.',
        ],
            'fatin' => [
            'required'          => 'Dados Fatin Intervista Sei Mamuk.',
        ],
            'data' => [
            'required'          => 'Dados Data intervista Sei Mamuk.',
        ],
            'link_youtube'      => [
            'required'          => 'Dados Link YouTube Sei Mamuk.',
        ],
            'link_video_youtube'=> [
            'required'          => 'Dados Link Video YouTube Sei Mamuk.',
        ],
            'link_facebook'     => [
            'required'          => 'Dados Link Facebook Sei Mamuk.',
        ],
            'link_tik_tok'      => [
            'required'          => 'Dados Link Tik Tok Sei Mamuk.',
        ],
        'foto' => [
            'uploaded' => 'Tenki Iha File Atu Upload',
			'mime_in' => 'File Extention Tenki Hanesan pdf',
			'max_size' => 'Ukuran File Maksimal 10 MB'
        ],
    ];

    protected $db;
    function getportuguesa()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
        $builder->where('lian =', 'Portuguesa');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationportuguesa($num, $keyword = null)
    {
        $this->builder();
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        $this->where('lian =', 'Portuguesa');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    function gettetum()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
        $builder->where('lian =', 'Tetum');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationtetum($num, $keyword = null)
    {
        $this->builder();
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        $this->where('lian =', 'Tetum');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    function getenglish()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
        $builder->where('lian =', 'English');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationenglish($num, $keyword = null)
    {
        $this->builder();
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        $this->where('lian =', 'English');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    function getindonesia()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
        $builder->where('lian =', 'Indonesia');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationindonesia($num, $keyword = null)
    {
        $this->builder();
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        $this->where('lian =', 'Indonesia');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filtertetum(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $this->where('Lian =', 'Tetum');
        $query = $this->findAll();
        return $query;
    }
    public function filterportuguesa(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $this->where('Lian =', 'Portuguesa');
        $query = $this->findAll();
        return $query;
    }
    public function filterenglish(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $this->where('Lian =', 'English');
        $query = $this->findAll();
        return $query;
    }
    public function filterindonesia(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $this->where('Lian =', 'Indonesia');
        $query = $this->findAll();
        return $query;
    }
    function getmedia()
    {
        $builder = $this->db->table('media_anct_tl');
        $builder->select('*');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationmedia($num, $keyword = null)
    {
        $this->builder();
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filtermedia(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $query = $this->findAll();
        return $query;
    }

    public function insert_galeria($data)
    {
        return $this->db->table('galeria_anct_tl')->insert($data);
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_media' => $id));
        return $query;
    }
    
     public function PilihMedia($id)
    {
        $builder = $this->db->table('galeria_anct_tl');
        $builder->select('*');
        $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'left');
        $query = $builder->getWhere(['media' => $id]);
        return $query;
    }

     public function PilihMediaNotisia($id)
    {   
         $query = $this->getWhere(['id_media' => $id]);
         return $query;
    }
     public function PilihMediaGaleria($id)
    {    $this->db = \Config\Database::connect();
         $query = $this->db->table('galeria_anct_tl')->getWhere(['media' => $id]);
         return $query;
    }
    public function HapusGaleria($id)
    {
        $builder = $this->db->table('galeria_anct_tl');
        $builder->select('*');
        $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'left');
        $query = $builder->delete(array('media' => $id));
        return $query;
    }
    public function HapusMedia($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_media' => $id));
        return $query;
    }

    public function galeria($id)
    {
        $builder = $this->db->table('galeria_anct_tl');
        // $builder->select('*');
        // $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        // 'link_facebook','link_tik_tok','foto','left');
        $builder->limit(3);
        $query = $builder->where('media', $id)->get()->getResult();
        return $query;
    }

    public function video()
    {
        $builder = $this->db->table('media_anct_tl');
        // $builder->select('*');
        // $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        // 'link_facebook','link_tik_tok','foto','left');
        $builder->limit(2);
        $query = $builder->orderBy('data', 'DESC')->get()->getResult();
        return $query;
    }
    public function multigaleria($id)
    {
        $builder = $this->db->table('galeria_anct_tl');
        $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko');
        $query = $builder->where('media', $id)->get()->getResult();
        return $query;
    }
     public function PilihBlogDiretor($id)
    {
        $query = $this->getWhere(['id_media' => $id]);
         return $query;
    }
     

    public function edit_data_diretor($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_media' => $id));
        return $query;
    }

     function getgaleria()
    {
        $this->db = \Config\Database::connect();
        $builder = $this->db->table('galeria_anct_tl');
        $builder->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko', 'lian');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationgaleria($num, $keyword = null)
    {
        $this->builder();
        $this->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko', 'lian');
        if ($keyword != '') {
            $this->like('naran_intervista', $keyword);
            $this->orLike('topiko', $keyword);
            $this->orLike('fatin', $keyword);
            $this->orLike('data', $keyword);
            $this->orLike('descripsaun', $keyword);
        }
        $this->orderBy('data', 'DESC');
        return [
            'media' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
}
