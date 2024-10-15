<?php

namespace App\Controllers;

use App\Models\ModelChannelYoutube;
use App\Models\ModelMediaAncttl;
use CodeIgniter\RESTful\ResourceController;

class Diretormedia extends ResourceController
{
    protected $media;
    protected $db;
    protected $link;
    protected $helpers = ['antltl'];
   public function __construct()
   {
    $this->media = new ModelMediaAncttl();
    $this->link = new ModelChannelYoutube();
    $this->db = \Config\Database::connect();
   }
    public function index()
    {
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Hili Lian Nebe Mak Ita Hatene',
        ];
        return view('diretor/diretormedia/homemedia', $data);
    }

    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->paginationtetum(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filtertetum();
            if (!$data['media']) {
                return redirect()->to(base_url('diretormedia/Tetum'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->paginationtetum(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamosdiretormedia/Tetum';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/diretormedia/diretormedia', $data);
    }
    public function portuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->paginationportuguesa(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterportuguesa();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/Portuguesa'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->paginationportuguesa(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamosdiretormedia/Portuguesa';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/diretormedia/diretormedia', $data);
    }
    public function english()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->paginationenglish(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterenglish();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/English'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->paginationenglish(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamosdiretormedia/English';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/diretormedia/diretormedia', $data);
    }
    public function indonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', null)->paginationindonesia(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', null)->filterindonesia();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/Indonesia'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', null)->paginationindonesia(6, $keyword);
            $data ['title']= 'Sistema Media';
            $data ['show']= 'Media diretor ANCT-TL';
            $data ['lian']  ='hamosdiretormedia/Indonesia';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/diretormedia/diretormedia', $data);
    }
    
    public function show($id = null)
    {
        $media  = $this->media->where('id_media', $id)->first();
        $galeria  = $this->media->galeria($id);
        $multigaleria  = $this->db->table('galeria_anct_tl')->where('media', $id)->get()->getResult();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media diretor ANCT-TL',
            'media' => $media,
            'galeria' =>$galeria,
            'multigaleria' =>$multigaleria,
        ];
        return view('diretor/diretormedia/detaildiretormedia', $data);
    }

  
    public function new()
    {
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Aumenta Media diretor ANCT-TL',
        ];
        return view('diretor/diretormedia/aumentadiretormedia', $data);
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
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Naran Fontes Notisia Seidauk Aumenta');
        }elseif ($topiko == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Topiko Notisai Seidauk Aumenta');
        }elseif ($descripsaun == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Descripsaun Notisai Seidauk Aumenta');
        }elseif ($conteudo == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Konteudo Notisai Seidauk Aumenta');
        }elseif ($fatin == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Fatin Notisai Seidauk Aumenta');
        }elseif ($data == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Data Notisai Seidauk Aumenta');
        }elseif ($lian == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Lian Notisai Seidauk Aumenta');
        }elseif ($foto == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Foto Notisai Seidauk Aumenta');
        }elseif ($link_youtube == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Link Youtube Notisai Seidauk Aumenta');
        }elseif ($link_video_youtube == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Link Video Youtube Notisai Seidauk Aumenta');
        }elseif ($link_facebook == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Link Facebook Notisai Seidauk Aumenta');
        }elseif ($link_tik_tok == null) {
            return redirect()->to(base_url('diretormedia/new'))->with('error', 'Link Tik Tok Notisai Seidauk Aumenta');
        }else {
            
            if ($gambar) {
                $random = rand(000,99989769895439);
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
                    'aktivo_media'          =>null,
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
                    return redirect()->to(base_url('diretormedia/new'))->with('error', 'Imagem Multi Notisia Seidauk Aumenta');
                }
    
                if (!$media) {
                    return redirect()->back()->withInput()->with('errors', $this->media->errors());
                }else {
                     $foto->move('uploads/fotoancttl/', $datafoto);
                    return redirect()->to(base_url('diretormedia/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
                }
            }
        }
    }

    
    public function troka($id)
    {
        $model = new ModelMediaAncttl();
        $media = $model->PilihMediaNotisia($id)->getRow();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Media diretor ANCT-TL',
            'media' => $media,
        ];
        return view('diretor/diretormedia/trokadiretormedia', $data);
    }

    
    public function troka_media()
    {
         $model = new ModelMediaAncttl();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('diretormedia');
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
            'aktivo_media'          =>null,
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
            'aktivo_media'          =>null,
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
            return redirect()->to(base_url('diretormedia/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function trokarelatorio($id = null)
    {
        $model = new ModelMediaAncttl();
        $id = $this->request->getPost('id_media');
        $model->PilihBlogDiretor($id)->getRow();
        // // $gambar = $dt->file;
        // // $path = '../public/uploads/file/';
        // // @unlink($path.$gambar);
        $data = [
            'aktivo_media' =>1,
        ];
        $model->edit_data_diretor($id,$data);
        // $this->narativa->where('id_narativa', $id)->delete();
        return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function aktivorelatorio()
    {
        $id = $this->request->getPost('id_media');
        $aktivo = $this->request->getPost('kode_media');
        $data = [
            'id_media' =>$id,
            'kode_media' =>$aktivo
        ];
        $this->db->table('media_anct_tl')->where(['id_media'=>$id])->update($data);
        return redirect()->to(base_url('diretormedia/'.$id))->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function delete($id = null)
    {
        $model = new ModelMediaAncttl();
        $dt = $model->PilihMediaNotisia($id)->getRow();
        $model->HapusMedia($id);
        $gambar = $dt->foto;
        $path = '../public/uploads/fotoancttl/';
        if ($path) {
            unlink($path.$gambar);
            $this->media->where('id_media', $id)->delete();
        }
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamosindonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', 1)->paginationindonesia(4, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', 1)->filterindonesia();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/Indonesia'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', 1)->paginationindonesia(4, $keyword);
            $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Indonesia ANCT-TL';
            $data ['lian']  ='diretormedia/Indonesia';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/diretormedia/hamosdiretormedia', $data);
    }
    public function hamostetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', 1)->paginationtetum(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', 1)->filtertetum();
            if (!$data['media']) {
                return redirect()->to(base_url('diretormedia/Tetum'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', 1)->paginationtetum(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Tetum ANCT-TL';
            $data ['lian']  ='diretormedia/Tetum';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/diretormedia/hamosdiretormedia', $data);
    }
    public function hamosportuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', 1)->paginationportuguesa(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', 1)->filterportuguesa();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/Portuguesa'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', 1)->paginationportuguesa(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Portuguesa ANCT-TL';
            $data ['lian']  ='diretormedia/Portuguesa';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/diretormedia/hamosdiretormedia', $data);
    }
    public function hamosenglish()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->media->where('aktivo_media =', 1)->paginationenglish(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['media'] = $this->media->where('aktivo_media =', 1)->filterenglish();
            if ($data['media'] == null) {
                return redirect()->to(base_url('diretormedia/English'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->media->where('aktivo_media =', 1)->paginationenglish(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media English ANCT-TL';
            $data ['lian']  ='diretormedia/English';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/diretormedia/hamosdiretormedia', $data);
    }
    public function temporario($id = null)
    {
         if ($id !=null) {
            $this->db->table('media_anct_tl')
            ->set('aktivo_media',null,true)
            ->where('id_media',$id)
            ->update();
        }else {

        $this->db->table('media_anct_tl')
            ->set('aktivo_media',null,true)
            ->where('aktivo_media is NOT NULL', null, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->back()->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }
    // public function hamos_hotu($id = null)
    // {
        
    // }
}
