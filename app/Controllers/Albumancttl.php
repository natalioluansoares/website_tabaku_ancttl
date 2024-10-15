<?php

namespace App\Controllers;

use App\Models\ModelAlbumAncttl;

class Albumancttl extends BaseController
{
    protected $helpers = ['antltl'];
    protected $media;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->media = new ModelAlbumAncttl();
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Indonesia')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('lian =', 'Indonesia')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Indonesia')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumancttl/albumancttl', $data);

    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Portuguesa')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('lian =', 'Portuguesa')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Portuguesa')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumancttl/albumancttl', $data);

    }

    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'English')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('lian =', 'English')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'English')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumancttl/albumancttl', $data);

    }

    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('lian =', 'Tetum')->paginationgaleria(12, $keyword);
         $data ['title']= 'Album Media';
            
         $data ['show']= 'Album Media ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('lian =', 'Tetum')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlAlbum')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('lian =', 'Tetum')->paginationgaleria(12, $keyword);
            $data ['title']= 'Album Media';
            $data ['show']= 'Album Media ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/albumancttl/albumancttl', $data);

    }
}
