<?php
namespace App\Controllers;

use App\Models\ModelProfileDiresaunAncttl;
use App\Models\ModelProfileMedia;
use App\Models\ModelProfileMediaDiresaun;

class Profilemedia extends BaseController
{
    protected $helpers = ['antltl'];
    protected $diretor;
    protected $diresaun;
    public function __construct()
    {
        $this->diresaun = new ModelProfileMediaDiresaun();
        $this->diretor = new ModelProfileMedia();
    }
    public function englishdiretor()
    {

        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diretor->where('lingua_profile =', 'English')->paginationprofile(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diretor->where('lingua_profile =', 'English')->filterprofile();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiretor')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diretor->where('lingua_profile =', 'English')->paginationprofile(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediretor', $data);
    }
    public function tetumdiretor()
    {
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diretor->where('lingua_profile =', 'Tetum')->paginationprofile(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diretor->where('lingua_profile =', 'Tetum')->filterprofile();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiretor')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diretor->where('lingua_profile =', 'Tetum')->paginationprofile(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediretor', $data);

    }
    public function portuguesadiretor()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diretor->where('lingua_profile =', 'Portuguesa')->paginationprofile(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diretor->where('lingua_profile =', 'Portuguesa')->filterprofile();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiretor')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diretor->where('lingua_profile =', 'Portuguesa')->paginationprofile(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediretor', $data);

    }
    public function indonesiadiretor()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diretor->where('lingua_profile =', 'Indonesia')->paginationprofile(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diretor->where('lingua_profile =', 'Indonesia')->filterprofile();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiretor')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diretor->where('lingua_profile =', 'Indonesia')->paginationprofile(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediretor', $data);
    }

    public function englishdiresaun()
    {

        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diresaun->where('lingua_profile_diresaun =', 'English')->paginationprofilediresaun(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diresaun->where('lingua_profile_diresaun =', 'English')->filterprofilediresaun();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiresaun')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diresaun->where('lingua_profile_diresaun =', 'English')->paginationprofilediresaun(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediresaun', $data);
    }
    public function tetumdiresaun()
    {
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diresaun->where('lingua_profile_diresaun =', 'Tetum')->paginationprofilediresaun(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diresaun->where('lingua_profile_diresaun =', 'Tetum')->filterprofilediresaun();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiresaun')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diresaun->where('lingua_profile_diresaun =', 'Tetum')->paginationprofilediresaun(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediresaun', $data);

    }
    public function portuguesadiresaun()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diresaun->where('lingua_profile_diresaun =', 'Portuguesa')->paginationprofilediresaun(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diresaun->where('lingua_profile_diresaun =', 'Portuguesa')->filterprofilediresaun();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiresaun')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diresaun->where('lingua_profile_diresaun =', 'Portuguesa')->paginationprofilediresaun(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediresaun', $data);

    }
    public function indonesiadiresaun()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->diresaun->where('lingua_profile_diresaun =', 'Indonesia')->paginationprofilediresaun(6, $keyword);
         $data ['title']= 'Sistema profile';
            
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['profile'] = $this->diresaun->where('lingua_profile_diresaun =', 'Indonesia')->filterprofilediresaun();
            if (!$data['profile']) {
                return redirect()->to(base_url(lang('homemediaancttl.homeUrlProfileDiresaun')))->with('error', lang('homemediaancttl.homeTidakMedia'));
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->diresaun->where('lingua_profile_diresaun =', 'Indonesia')->paginationprofilediresaun(6, $keyword);
            $data ['keyword']= $keyword;
         }
        return view('mediaancttl/profilediretorancttl/profilediresaun', $data);
    }

    public function profile()
    {
        return view('mediaancttl/profilediretorancttl/profileancttl');
    }

    public function profilediretor($id)
    {
        $profile = $this->diretor->where('id_profile', $id)->profileDiretorRow();
         if ($profile == null) {
            return redirect()->back()->withInput()->with('errors', 'Dados Nebe Ita Buka Laiha');
        }else {
            $data = [
                'profile' =>$profile
            ];
        return view('mediaancttl/profilediretorancttl/detailprofilediretor', $data);
        }
    }
    public function profilediresaun($id)
    {
        $profile = $this->diresaun->where('id_profile_diresaun', $id)->profileDiresaunRow();
         if ($profile == null) {
            return redirect()->back()->withInput()->with('errors', 'Dados Nebe Ita Buka Laiha');
        }else {
            $data = [
                'profile' =>$profile
            ];
        return view('mediaancttl/profilediretorancttl/detailprofilediresaun', $data);
        }
    }
}