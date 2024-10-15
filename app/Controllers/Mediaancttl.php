<?php

namespace App\Controllers;

use App\Models\ModelMediaAncttl;
use CodeIgniter\RESTful\ResourceController;

class Mediaancttl extends ResourceController
{
    protected $media;
    protected $helpers = ['antltl'];
   public function __construct()
   {
    $this->media = new ModelMediaAncttl();
   }
    public function index()
    {
        
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Hili Lian Nebe Mak Ita Hatene',
        ];
        return view('diresaun/mediaancttl/homemedia', $data);
    }

    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->paginationtetum(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Diresaun ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->filtertetum();
            if (!$data['media']) {
                return redirect()->to(base_url('mediaancttl/Tetum'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->paginationtetum(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Diresaun ANCT-TL';
            $data ['keyword']= $keyword;
         }
         
        return view('diresaun/mediaancttl/mediaancttl', $data);
    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->paginationportuguesa(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Diresaun ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->filterportuguesa();
            if ($data['media'] == null) {
                return redirect()->to(base_url('mediaancttl/Portuguesa'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->paginationportuguesa(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Diresaun ANCT-TL';
            $data ['keyword']= $keyword;
         }
         
        return view('diresaun/mediaancttl/mediaancttl', $data);
    }
    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->paginationenglish(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Diresaun ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->filterenglish();
            if ($data['media'] == null) {
                return redirect()->to(base_url('mediaancttl/English'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->paginationenglish(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Diresaun ANCT-TL';
            $data ['keyword']= $keyword;
         }
         
        return view('diresaun/mediaancttl/mediaancttl', $data);
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->paginationindonesia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media Diresaun ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->filterindonesia();
            if ($data['media'] == null) {
                return redirect()->to(base_url('mediaancttl/Indonesia'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->paginationindonesia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media Diresaun ANCT-TL';
            $data ['keyword']= $keyword;
         }
         
        return view('diresaun/mediaancttl/mediaancttl', $data);
    }
    
    public function show($id = null)
    {
        $media  = $this->media->where('id_media', $id)->first();
        $multigaleria  = $this->media->multigaleria($id);
        $galeria  = $this->media->galeria($id);
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media Diresaun ANCT-TL',
            'media' => $media,
            'galeria' =>$galeria,
            'multigaleria' =>$multigaleria,
            
        ];
        return view('diresaun/mediaancttl/detailmediaancttl', $data);
    }

  
    public function new()
    {
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Aumenta Media Diresaun ANCT-TL',
        ];
        return view('diresaun/mediaancttl/aumentamediaancttl', $data);
    }

   
    public function create()
    {
        $naran_intervista       = $this->request->getPost('naran_intervista');
        $topiko                 = $this->request->getPost('topiko');
        $descripsaun            = $this->request->getPost('descripsaun');
        $conteudo               = $this->request->getPost('conteudo');
        $fatin                  = $this->request->getPost('fatin');
        $data                   = $this->request->getPost('data');
        $lian                   = $this->request->getPost('lian');
        $gambar                 = $this->request->getFiles();
        $foto                   = $this->request->getFile('foto');
        $datafoto               = $foto->getRandomName();
        $link_youtube           = $this->request->getPost('link_youtube');
        $link_video_youtube     = $this->request->getPost('link_video_youtube');
        $link_facebook          = $this->request->getPost('link_facebook');
        $link_tik_tok           = $this->request->getPost('link_tik_tok');
        if ($naran_intervista == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Naran Fontes Notisia Seidauk Aumenta');
        }elseif ($topiko == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Topiko Notisai Seidauk Aumenta');
        }elseif ($descripsaun == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Descripsaun Notisai Seidauk Aumenta');
        }elseif ($conteudo == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Konteudo Notisai Seidauk Aumenta');
        }elseif ($fatin == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Fatin Notisai Seidauk Aumenta');
        }elseif ($data == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Data Notisai Seidauk Aumenta');
        }elseif ($lian == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Lian Notisai Seidauk Aumenta');
        }elseif ($foto == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Foto Notisai Seidauk Aumenta');
        }elseif ($link_youtube == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Link Youtube Notisai Seidauk Aumenta');
        }elseif ($link_video_youtube == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Link Video Youtube Notisai Seidauk Aumenta');
        }elseif ($link_facebook == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Link Facebook Notisai Seidauk Aumenta');
        }elseif ($link_tik_tok == null) {
            return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Link Tik Tok Notisai Seidauk Aumenta');
        }else {
            
            if ($gambar) {
                $random = rand(000,999);
                $data = [
                    'id_media'              =>$random,
                    'naran_intervista'      =>$naran_intervista,
                    'topiko'                =>$topiko,
                    'descripsaun'           =>$descripsaun,
                    'conteudo'              =>$conteudo,
                    'fatin'                 =>$fatin,
                    'lian'                  =>$lian,
                    'data'                  =>$data,
                    'link_youtube'          =>$link_youtube,
                    'link_video_youtube'    =>$link_video_youtube,
                    'link_facebook'         =>$link_facebook,
                    'link_tik_tok'          =>$link_tik_tok,
                    'kode_media'            =>0,
                    'foto'                  => $datafoto,
                ];
                $media = $this->media->insert($data);
                if ($media) {
                    foreach($gambar['gambar'] as $file){
                        $datarandom = $file->getRandomName();
                        $file->move('uploads/foto_anct_tl/', $datarandom);
                        $data_galeria = [
                            'media'  =>$random,
                            'galeria' => $datarandom
                        ];
                        $media = $this->media->insert_galeria($data_galeria);
                    }
                }else {
                    return redirect()->to(base_url('mediaancttl/new'))->with('error', 'Imagem Multi Notisia Seidauk Aumenta');
                }
             }
    
                if (!$media) {
                    return redirect()->back()->withInput()->with('errors', $this->media->errors());
                }else {
                     $foto->move('uploads/fotoancttl/', $datafoto);
                    return redirect()->to(base_url('mediaancttl/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
                }
            }
    }

    
    public function troka($id)
    {
        $model = new ModelMediaAncttl();
        $media = $model->PilihMediaNotisia($id)->getRow();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Media Diresaun ANCT-TL',
            'media' => $media,
        ];
        return view('diresaun/mediaancttl/trokamediaancttl', $data);
    }

    
    public function troka_media()
    {
         $model = new ModelMediaAncttl();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('mediaancttl');
        }
        $id = $this->request->getPost('id_media');
        $validation = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,16384]'
        ]);
 
        if ($validation == FALSE) {
            $lian = $this->request->getPost('lian');
            
            
        $data = array(
            'naran_intervista'      =>$this->request->getPost('naran_intervista'),
            'topiko'                =>$this->request->getPost('topiko'),
            'descripsaun'           =>$this->request->getPost('descripsaun'),
            'conteudo'              =>$this->request->getPost('conteudo'),
            'fatin'                 =>$this->request->getPost('fatin'),
            'lian'                  =>$lian,
            'kode_media'            =>0,
            'data'                  =>$this->request->getPost('data'),
            'link_youtube'          =>$this->request->getPost('link_youtube'),
            'link_video_youtube'    =>$this->request->getPost('link_video_youtube'),
            'link_facebook'         =>$this->request->getPost('link_facebook'),
            'link_tik_tok'          =>$this->request->getPost('link_tik_tok'),
        );

        }else {
        $dt = $model->PilihMediaNotisia($id)->getRow();
        $lian = $this->request->getPost('lian');
        $gambar = $dt->foto;
        $path = '../public/uploads/fotoancttl/';
        @unlink($path.$gambar);
           $upload = $this->request->getFile('foto');
           $fileName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public//uploads/fotoancttl/', $fileName);
        $data = array(
            'naran_intervista'      =>$this->request->getPost('naran_intervista'),
            'topiko'                =>$this->request->getPost('topiko'),
            'descripsaun'           =>$this->request->getPost('descripsaun'),
            'conteudo'              =>$this->request->getPost('conteudo'),
            'fatin'                 =>$this->request->getPost('fatin'),
            'lian'                  =>$lian,
            'kode_media'            =>0,
            'data'                  =>$this->request->getPost('data'),
            'link_youtube'          =>$this->request->getPost('link_youtube'),
            'link_video_youtube'    =>$this->request->getPost('link_video_youtube'),
            'link_facebook'         =>$this->request->getPost('link_facebook'),
            'link_tik_tok'          =>$this->request->getPost('link_tik_tok'),
            'foto'                  => $fileName
        );
        }
         $media = $model->edit_data($id,$data);
        if (!$media) {
            return redirect()->back()->withInput()->with('errors', $this->media->errors());
        }else {
            return redirect()->to(base_url('mediaancttl/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function delete($id = null)
    {
        $model = new ModelMediaAncttl();
        $dt = $model->PilihMedia($id)->getRow();
        $model->HapusMedia($id);
        $gambar = $dt->galeria;
        $path = '../public/uploads/foto_anct_tl/';
        if ($path) {
            unlink($path.$gambar);
            $this->media->where('id_media', $id)->delete();
        }
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
