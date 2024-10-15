<?php

namespace App\Controllers;

use App\Models\ModelTabaku;

class Videotabaku extends BaseController
{
    protected $helpers = ['antltl'];
    protected $tabaku;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->tabaku = new ModelTabaku();
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Indonesia')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideoTabakuTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videotabaku/videotabaku',$data);
    }
    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideoTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videotabaku/videotabaku',$data);
    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideoTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videotabaku/videotabaku',$data);
    }
    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'english')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'english')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideoTabaku')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'english')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videotabaku/videotabaku',$data);
    }
}
