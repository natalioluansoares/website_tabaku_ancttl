<?php

namespace App\Controllers;

use App\Models\ModelAlbumTabaku;

class Albumtabaku extends BaseController
{
    protected $helpers = ['antltl'];
    protected $tabaku;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->tabaku = new ModelAlbumTabaku();
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('lian =', 'Indonesia')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumtabaku/albumtabaku', $data);

    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumtabaku/albumtabaku', $data);

    }

    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'English')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'English')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'English')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumtabaku/albumtabaku', $data);

    }

    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlTabakuAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumtabaku/albumtabaku', $data);

    }
}
