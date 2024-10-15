<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAlbumTabaku extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'galeria_tabaku';
    protected $primaryKey       = 'id_tabaku';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    

    
    public function filtertabaku(){
        $request = \Config\Services::request();
        $this->join('media_tabaku', 'galeria_tabaku.tabaku = media_tabaku.id_tabaku', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko', 'lian');
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
        $query = $this->findAll();
        return $query;
    }
    function getmedia()
    {
        $builder = $this->db->table('media_tabaku');
        $builder->select('*');
        $query = $builder->get()->getResult(); 
        return $query;  
    }



     function getgaleria()
    {
        $this->db = \Config\Database::connect();
        $builder = $this->db->table('galeria_tabaku');
        $builder->join('media_tabaku', 'galeria_tabaku.tabaku = media_tabaku.id_tabaku', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko', 'lian');
        $query = $builder->get()->getResult(); 
        return $query;  
    }
    function paginationgaleria($num, $keyword = null)
    {
        $this->builder();
        $this->join('media_tabaku', 'galeria_tabaku.tabaku = media_tabaku.id_tabaku', 'link_youtube',
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
            'tabaku' =>$this->paginate($num),
            'pager'   =>$this->pager,
        ];
    }
}
