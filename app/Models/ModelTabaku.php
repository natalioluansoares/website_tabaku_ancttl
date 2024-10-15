<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTabaku extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'media_tabaku';
    protected $primaryKey       = 'id_tabaku';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields    = ['id_tabaku','naran_intervista', 'topiko', 'fatin', 'data',
                                  'descripsaun', 'conteudo', 'link_facebook',
                                  'link_youtube', 'kode_media', 'link_tik_tok', 'foto', 'lian', 'link_video_youtube'];

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
    function gettabaku()
    {
        $builder = $this->db->table('media_tabaku');
        $builder->select('*');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationtabaku($num, $keyword = null)
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
            'tabaku' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
    public function filtertabaku(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $query = $this->findAll();
        return $query;
    }
    public function tabaku($id)
    {
        $builder = $this->db->table('galeria_tabaku');
        $builder->limit(3);
        $query = $builder->where('tabaku', $id)->get()->getResult();
        return $query;
    }
    public function insert_tabaku($data)
    {
        return $this->db->table('galeria_tabaku')->insert($data);
    }
    public function galeria($id)
    {
        $builder = $this->db->table('galeria_tabaku');
        $builder->limit(3);
        $query = $builder->where('tabaku', $id)->get()->getResult();
        return $query;
    }

     public function multigaleria($id)
    {
        $builder = $this->db->table('galeria_tabaku');
        $builder->join('media_tabaku', 'galeria_tabaku.tabaku = media_tabaku.id_tabaku', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko');
        $query = $builder->where('tabaku', $id)->get()->getResult();
        return $query;
    }

     public function PilihTabakuNotisia($id)
    {   
         $query = $this->getWhere(['id_tabaku' => $id]);
         return $query;
    }

     public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_tabaku' => $id));
        return $query;
    }


    public function trokaMedia($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_tabaku' => $id));
        return $query;
    }
    public function HapusMedia($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_tabaku' => $id));
        return $query;
    }
}
