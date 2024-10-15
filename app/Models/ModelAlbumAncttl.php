<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAlbumAncttl extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'galeria_anct_tl';
    protected $primaryKey       = 'id_media';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    

    
    public function filtermedia(){
        $request = \Config\Services::request();
        $start = $request->getGet('start');
        $end = $request->getGet('end');
        $this->join('media_anct_tl', 'galeria_anct_tl.media = media_anct_tl.id_media', 'link_youtube',
        'link_facebook','link_tik_tok','foto','left', 'topiko', 'lian');
        $this->where('data >=', $start);
        $this->where('data <=', $end);
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
