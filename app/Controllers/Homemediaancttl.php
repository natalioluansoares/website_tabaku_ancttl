<?php

namespace App\Controllers;

use App\Models\ModelCartaMediaAncttl;
use App\Models\ModelChannelYoutube;
use App\Models\ModelMediaAncttl;
use App\Models\ModelTabaku;

class Homemediaancttl extends BaseController
{
    protected $db;
    protected $carta;
    protected $media;
    protected $tabaku;
    protected $link;
    // protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->carta = new ModelCartaMediaAncttl();
        $this->media = new ModelMediaAncttl();
        $this->tabaku = new ModelTabaku();
        $this->link = new ModelChannelYoutube();

    }
    public function in():string
    {
        $carta = $this->carta->where('lingua =', 'Indonesia')->lingua();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Indonesia')->get()->getResult();
        $media = $this->db->table('media_anct_tl')->where('aktivo_media =',  null)->where('lian =', 'Indonesia')->limit(3)->get()->getResult();
        $tabaku = $this->db->table('media_tabaku')->where('aktivo_media =',  null)->where('lian =', 'Indonesia')->limit(3)->get()->getResult();
        $video = $this->media->video();;
        $data = service('request')->getLocale();
        $data =[
            'carta'         => $carta,
            'misaunvisaun'  => $misaunvisaun,
            'media'         => $media,
            'tabaku'        => $tabaku,
            'video'         => $video,
        ];
        return view('mediaancttl/home/home', $data);
    }
    public function en():string
    {
        $carta = $this->carta->where('lingua =', 'English')->lingua();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'English')->get()->getResult();
        $tabaku = $this->db->table('media_tabaku')->where('aktivo_media =',  null)->where('lian =', 'English')->limit(3)->get()->getResult();
        $video = $this->media->video();
        $media = $this->db->table('media_anct_tl')->where('aktivo_media =',  null)->where('lian =', 'English')->limit(3)->get()->getResult();
        $data = service('request')->getLocale();
        $data =[
            'carta' => $carta,
            'misaunvisaun' => $misaunvisaun,
            'media' => $media,
            'tabaku' => $tabaku,
            'video' => $video,
        ];
        return view('mediaancttl/home/home', $data);
    }
    public function por():string
    {
        $carta = $this->carta->where('lingua =', 'Portuguesa')->lingua();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Portuguesa')->get()->getResult();
        $video = $this->media->video();
        $media = $this->db->table('media_anct_tl')->where('aktivo_media =',  null)->where('lian =', 'Portuguesa')->limit(3)->get()->getResult();
        $tabaku = $this->db->table('media_tabaku')->where('aktivo_media =',  null)->where('lian =', 'Portuguesa')->limit(3)->get()->getResult();
        $data = service('request')->getLocale();
        $data =[
            'carta' => $carta,
            'misaunvisaun' => $misaunvisaun,
            'tabaku' => $tabaku,
            'media' => $media,
            'video' => $video,
        ];
        return view('mediaancttl/home/home', $data);
    }
    public function te():string
    {
        $carta = $this->carta->where('lingua =', 'Tetum')->lingua();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Tetum')->get()->getResult();
        $video = $this->media->video();
        $media = $this->db->table('media_anct_tl')->where('aktivo_media =',  null)->where('lian =', 'Tetum')->limit(3)->get()->getResult();
        $tabaku = $this->db->table('media_tabaku')->where('aktivo_media =',  null)->where('lian =', 'Tetum')->limit(3)->get()->getResult();
        $data = service('request')->getLocale();
        $data =[
            'carta' => $carta,
            'misaunvisaun' => $misaunvisaun,
            'media' => $media,
            'tabaku' => $tabaku,
            'video' => $video,
        ];
        return view('mediaancttl/home/home', $data);
    }
    public function detail($id): string
    {
        $diretor = $this->carta->getcartadiretor($id);
        $data =[
            'diretor' => $diretor,
        ];
        return view('mediaancttl/home/detailcarta',$data);
    }
    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Tetum')->where('aktivo_media =', null)->paginationtetum(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Tetum';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filtertetum();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlMedia')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Tetum')->where('aktivo_media =', null)->paginationtetum(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Tetum';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/home/medialian',$data);
    }

    public function Portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Portuguesa')->where('aktivo_media =', null)->paginationportuguesa(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Portuguesa';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterportuguesa();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlMedia')))->with('error',lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Portuguesa')->where('aktivo_media =', null)->paginationportuguesa(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Portuguesa';
            $data ['keyword']= $keyword;
         }
         return view('mediaancttl/home/medialian',$data);
    }

    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'English')->where('aktivo_media =', null)->paginationenglish(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian English';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterenglish();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlMedia')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'English')->where('aktivo_media =', null)->paginationenglish(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian English';
            $data ['keyword']= $keyword;
         }
         return view('mediaancttl/home/medialian',$data);
    }

    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Indonesia')->where('aktivo_media =', null)->paginationindonesia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Indonesia';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterindonesia();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlMedia')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Indonesia')->where('aktivo_media =', null)->paginationindonesia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Indonesia';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/home/medialian',$data);
    }
    public function detailmediaindonesia($id = null)
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Indonesia')->where('aktivo_media =', null)->paginationindonesia(10, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Indonesia';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
        $data['mediadetail']  = $this->media->where('id_media', $id)->first();
        $data['multigaleria']  = $this->media->multigaleria($id);
        $data['galeria']  = $this->media->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterindonesia();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Indonesia')->where('aktivo_media =', null)->paginationindonesia(10, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Indonesia';
            $data ['keyword']= $keyword;
            $data['mediadetail']  = $this->media->where('id_media', $id)->first();
            $data['multigaleria']  = $this->media->multigaleria($id);
            $data['galeria']  = $this->media->galeria($id);
         }
        
         return view('mediaancttl/home/detailmedia',$data);
    }
    public function detailmediatetum($id = null)
    {
        $keyword = $this->request->getGet('keyword');
         $data = $this->media->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtetum(10, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
        
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         $data['mediadetail']  = $this->media->where('id_media', $id)->first();
         $data['multigaleria']  = $this->media->multigaleria($id);
         $data['galeria']  = $this->media->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->where('lian =','Tetum')->filtertetum();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtetum(10, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
            $data['mediadetail']  = $this->media->where('id_media', $id)->first();
            $data['multigaleria']  = $this->media->multigaleria($id);
            $data['galeria']  = $this->media->galeria($id);
         }
        
         return view('mediaancttl/home/detailmedia',$data);
    }
    public function detailmediaportuguesa($id = null)
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Portuguesa')->where('aktivo_media =', null)->paginationportuguesa(10, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Indonesia';
         $data ['keyword']= $keyword;
        $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
        $data['mediadetail']  = $this->media->where('id_media', $id)->first();
        $data['multigaleria']  = $this->media->multigaleria($id);
        $data['galeria']  = $this->media->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['mediadetail'] = $this->media->where('aktivo_media =', null)->filterportuguesa();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Portuguesa')->where('aktivo_media =', null)->paginationportuguesa(10, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Indonesia';
            $data ['keyword']= $keyword;
            $data['mediadetail']  = $this->media->where('id_media', $id)->first();
            $data['multigaleria']  = $this->media->multigaleria($id);
            $data['galeria']  = $this->media->galeria($id);
         }
        
         return view('mediaancttl/home/detailmedia',$data);
    }
    public function detailmediaenglish($id = null)
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'English')->where('aktivo_media =', null)->paginationenglish(10, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Lian Indonesia';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
        $data['mediadetail']  = $this->media->where('id_media', $id)->first();
        $data['multigaleria']  = $this->media->multigaleria($id);
        $data['galeria']  = $this->media->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterenglish();
            if ($data['media'] == null) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'English')->where('aktivo_media =', null)->paginationenglish(10, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Lian Indonesia';
            $data ['keyword']= $keyword;
            $data['mediadetail']  = $this->media->where('id_media', $id)->first();
            $data['multigaleria']  = $this->media->multigaleria($id);
            $data['galeria']  = $this->media->galeria($id);
         }
        
         return view('mediaancttl/home/detailmedia',$data);
    }
}
