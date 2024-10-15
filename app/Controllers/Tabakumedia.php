<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelChannelYoutube;
use App\Models\ModelTabaku;

class Tabakumedia extends BaseController
{
    protected $helpers = ['antltl'];
    protected $tabaku;
    protected $link;
    protected $db;
    public function __construct()
    {
        $this->tabaku = new ModelTabaku();
        $this->link = new ModelChannelYoutube();
         $this->db = \Config\Database::connect();   
    }
    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Cigaros';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Tetum';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('mediaancttl/mediatabaku/tabaku', $data);
    }
    
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Cigarro';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Portuguesa';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('mediaancttl/mediatabaku/tabaku', $data);
    }

    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Cigarette';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/English';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('mediaancttl/mediatabaku/tabaku', $data);
    }

    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Indonesia';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('mediaancttl/mediatabaku/tabaku', $data);
    }

    public function detailtabakuenglish($id = null)
    {
        $keyword = $this->request->getGet('keyword');
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->paginationtabaku(10, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
         $data['multigaleria']  = $this->tabaku->multigaleria($id);
         $data['galeria']  = $this->tabaku->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->paginationtabaku(10, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
            $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
            $data['multigaleria']  = $this->tabaku->multigaleria($id);
            $data['galeria']  = $this->tabaku->galeria($id);
         }
         return view('mediaancttl/mediatabaku/detailtabaku',$data);
    }

    public function detailtabakuindonesia($id = null)
    {
        $keyword = $this->request->getGet('keyword');
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->paginationtabaku(10, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
         $data['multigaleria']  = $this->tabaku->multigaleria($id);
         $data['galeria']  = $this->tabaku->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->paginationtabaku(10, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
            $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
            $data['multigaleria']  = $this->tabaku->multigaleria($id);
            $data['galeria']  = $this->tabaku->galeria($id);
         }
         return view('mediaancttl/mediatabaku/detailtabaku',$data);
    }

    public function detailtabakuportuguesa($id = null)
    {
        $keyword = $this->request->getGet('keyword');
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->paginationtabaku(10, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
         $data['multigaleria']  = $this->tabaku->multigaleria($id);
         $data['galeria']  = $this->tabaku->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->paginationtabaku(10, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
            $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
            $data['multigaleria']  = $this->tabaku->multigaleria($id);
            $data['galeria']  = $this->tabaku->galeria($id);
         }
         return view('mediaancttl/mediatabaku/detailtabaku',$data);
    }

    public function detailtabakutetum($id = null)
    {
        $keyword = $this->request->getGet('keyword');
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(10, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Rokok';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
         $data['multigaleria']  = $this->tabaku->multigaleria($id);
         $data['galeria']  = $this->tabaku->galeria($id);

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuDetail').'/'.$id))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(10, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
            $data['tabakudetail']  = $this->tabaku->where('id_tabaku', $id)->first();
            $data['multigaleria']  = $this->tabaku->multigaleria($id);
            $data['galeria']  = $this->tabaku->galeria($id);
         }
         return view('mediaancttl/mediatabaku/detailtabaku',$data);
    }
}
