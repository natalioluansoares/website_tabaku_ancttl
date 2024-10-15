<?php

namespace App\Controllers;

use App\Models\ModelMediaAncttl;

class Videoancttl extends BaseController
{
    protected $helpers = ['antltl'];
    protected $media;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->media = new ModelMediaAncttl();
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationmedia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->media->where('lian =', 'Indonesia')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideo')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Indonesia')->paginationmedia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videoancttl/videoancttl',$data);
    }
    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationmedia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->where('lian =', 'Tetum')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideo')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Tetum')->paginationmedia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videoancttl/videoancttl',$data);
    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationmedia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideo')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->where('lian =', 'Portuguesa')->paginationmedia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videoancttl/videoancttl',$data);
    }
    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->where('lian =', 'english')->paginationmedia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Video ANCTTL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->where('lian =', 'english')->filtermedia();
            if (!$data['media']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlVideo')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->where('lian =', 'english')->paginationmedia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Video ANCTTL';
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/videoancttl/videoancttl',$data);
    }
}
