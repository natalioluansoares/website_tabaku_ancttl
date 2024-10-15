<?php

namespace App\Controllers;

use App\Models\ModelChannelYoutube;
use App\Models\ModelTabaku;
use CodeIgniter\RESTful\ResourceController;

class Tabakudiretor extends ResourceController
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
    public function index()
    {
         $data = [
            'title' => 'Sistema Tabaku',
            'show' => 'Hili Lian Nebe Mak Ita Hatene',
        ];
        return view('diretor/mediatabaku/hometabaku', $data);
    }
    public function tetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Tabaku';
            
         $data ['show']= 'Media Tabaku';
         $data ['keyword']= $keyword;
         $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url('tabakudiretor/Tetum'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Tetum')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media Tabaku';
            $data ['lian']  ='hamostabakudiretor/Tetum';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/mediatabaku/tabaku', $data);
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
                return redirect()->to(base_url('tabakudiretor/Portuguesa'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Portuguesa')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media Cigarro';
            $data ['lian']  ='hamostabakudiretor/Portuguesa';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/mediatabaku/tabaku', $data);
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
                return redirect()->to(base_url('tabakudiretor/English'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','English')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media Cigarette';
            $data ['lian']  ='hamostabakudiretor/English';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/mediatabaku/tabaku', $data);
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
                return redirect()->to(base_url('tabakudiretor/Indonesia'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', null)->where('lian =','Indonesia')->paginationtabaku(6, $keyword);
            $data ['title']= 'Sistema Tabaku';
            $data ['show']= 'Media Rokok';
            $data ['lian']  ='hamostabakudiretor/Indonesia';
            $data ['keyword']= $keyword;
            $data['mediasosial']  = $this->link->orderBy('id_link','DESC')->findAll();
         }
         
        return view('diretor/mediatabaku/tabaku', $data);
    }
    public function show($id = null)
    {
        $tabaku  = $this->tabaku->where('id_tabaku', $id)->first();
        $galeria  = $this->tabaku->tabaku($id);
        $multigaleria  = $this->db->table('galeria_tabaku')->where('tabaku', $id)->get()->getResult();
        if (!$tabaku) {
            return redirect()->back()->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            
        }elseif (!$galeria) {
            return redirect()->back()->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
        
        }elseif (!$multigaleria) {
            return redirect()->back()->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
        }else {
            $data = [
            'title' => 'Sistema Tabaku',
            'show' => 'Detail Media Tabaku',
            'tabaku' => $tabaku,
            'galeria' =>$galeria,
            'multigaleria' =>$multigaleria,
        ];
    }
    return view('diretor/mediatabaku/detailtabaku', $data);    
    }

    public function new()
    {
        $data = [
            'title' => 'Sistema Tabaku',
            'show' => 'Aumenta Media Tabaku',
        ];
        return view('diretor/mediatabaku/aumentatabaku', $data);
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
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Naran Fontes Notisia Seidauk Aumenta');
        }elseif ($topiko == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Topiko Notisai Seidauk Aumenta');
        }elseif ($descripsaun == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Descripsaun Notisai Seidauk Aumenta');
        }elseif ($conteudo == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Konteudo Notisai Seidauk Aumenta');
        }elseif ($fatin == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Fatin Notisai Seidauk Aumenta');
        }elseif ($data == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Data Notisai Seidauk Aumenta');
        }elseif ($lian == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Lian Notisai Seidauk Aumenta');
        }elseif ($foto == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Foto Notisai Seidauk Aumenta');
        }elseif ($link_youtube == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Link Youtube Notisai Seidauk Aumenta');
        }elseif ($link_video_youtube == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Link Video Youtube Notisai Seidauk Aumenta');
        }elseif ($link_facebook == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Link Facebook Notisai Seidauk Aumenta');
        }elseif ($link_tik_tok == null) {
            return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Link Tik Tok Notisai Seidauk Aumenta');
        }else {
            
            if ($gambar) {
                $random = rand(000,9998976567897);
                $data = [
                    'id_tabaku'              =>$random,
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
                $tabaku = $this->tabaku->insert($data);
                if ($tabaku) {
                    foreach($gambar['gambar'] as $file){
                        $datarandom = $file->getRandomName();
                        $file->move('uploads/foto_tabaku/', $datarandom);
                        $data_galeria = [
                            'tabaku'  =>$random,
                            'galeria' => $datarandom
                        ];
                        $tabaku = $this->tabaku->insert_tabaku($data_galeria);
                    }
                }else {
                    return redirect()->to(base_url('tabakudiretor/new'))->with('error', 'Imagem Multi Notisia Seidauk Aumenta');
                }
    
                if (!$tabaku) {
                    return redirect()->back()->withInput()->with('errors', $this->tabaku->errors());
                }else {
                     $foto->move('uploads/fototabaku/', $datafoto);
                    return redirect()->to(base_url('tabakudiretor/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
                }
            }
        }
    }

    public function troka($id)
    {
        $model = new ModelTabaku();
        $tabaku = $model->PilihTabakuNotisia($id)->getRow();
        $data = [
            'title' => 'Sistema Tabaku',
            'show' => 'Media Tabaku',
            'tabaku' => $tabaku,
        ];
        return view('diretor/mediatabaku/trokatabaku', $data);
    }

    public function troka_media()
    {
         $model = new ModelTabaku();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('tabakudiretor');
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
        $dt = $model->PilihTabakuNotisia($id)->getRow();
        $lian = $this->request->getPost('lian');
        $gambar = $dt->foto;
        $path = '../public/uploads/fototabaku/';
        @unlink($path.$gambar);
           $upload = $this->request->getFile('foto');
           $fileName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public//uploads/fototabaku/', $fileName);
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
         $tabaku = $model->edit_data($id,$data);
        if (!$tabaku) {
            return redirect()->back()->withInput()->with('errors', $this->tabaku->errors());
        }else {
            return redirect()->to(base_url('tabakudiretor/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function trokarelatorio()
    {
        $model = new ModelTabaku();
        $id = $this->request->getPost('id_tabaku');
        $model->PilihTabakuNotisia($id)->getRow();
        $data = [
            'aktivo_media' =>1,
        ];
        $model->trokaMedia($id,$data);
        return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function aktivorelatorio()
    {
        $id = $this->request->getPost('id_tabaku');
        $aktivo = $this->request->getPost('kode_media');
        $data = [
            'id_tabaku' =>$id,
            'kode_media' =>$aktivo
        ];
        $this->db->table('media_tabaku')->where(['id_tabaku'=>$id])->update($data);
        return redirect()->to(base_url('tabakudiretor/'.$id))->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function delete($id = null)
    {
        $model = new ModelTabaku();
        $dt = $model->PilihTabakuNotisia($id)->getRow();
        $model->HapusMedia($id);
        $gambar = $dt->foto;
        $path = '../public/uploads/fototabaku/';
        if ($path) {
            unlink($path.$gambar);
            $this->tabaku->where('id_tabaku', $id)->delete();
        }
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
    public function hamostetum()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Tetum')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Tetum')->filtertabaku();
            if (!$data['tabaku']) {
                return redirect()->to(base_url('tabakudiretor/Tetum'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Tetum')->paginationtabaku(6, $keyword);
                $data ['title']= 'Sistema Tabaku Temporario';
            $data ['show']= 'Dados Temporario Tabaku ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Tetum';
            $data ['fila']  ='tabakudiretor/Tetum';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/mediatabaku/hamostabaku', $data);
    }
    public function hamosportuguesa()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Portuguesa')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Portuguesa')->filtertabaku();
            if ($data['tabaku'] == null) {
                return redirect()->to(base_url('tabakudiretor/Portuguesa'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Portuguesa')->paginationtabaku(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Portuguesa ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Portuguesa';
            $data ['fila']  ='tabakudiretor/Portuguesa';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/mediatabaku/hamostabaku', $data);
    }
    public function hamosenglish()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'English')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'English')->filtertabaku();
            if ($data['tabaku'] == null) {
                return redirect()->to(base_url('tabakudiretor/English'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'English')->paginationtabaku(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Portuguesa ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/English';
            $data ['fila']  ='tabakudiretor/English';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/mediatabaku/hamostabaku', $data);
    }
    public function hamosindonesia()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Indonesia')->paginationtabaku(6, $keyword);
         $data ['title']= 'Sistema Media';
            
         $data ['show']= 'Media diretor ANCT-TL';
         $data ['keyword']= $keyword;

         if (null !== $this->request->getGet('filter-data')) {
            $data['tabaku'] = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Indonesia')->filtertabaku();
            if ($data['tabaku'] == null) {
                return redirect()->to(base_url('tabakudiretor/Indonesia'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->tabaku->where('aktivo_media =', 1)->where('lian =', 'Indonesia')->paginationtabaku(6, $keyword);
             $data ['title']= 'Sistema Media Temporario';
            $data ['show']= 'Dados Temporario Media Portuguesa ANCT-TL';
            $data ['lian']  ='hamostabakudiretor/Indonesia';
            $data ['fila']  ='tabakudiretor/Indonesia';
            $data ['keyword']= $keyword;
         }
         
        return view('diretor/mediatabaku/hamostabaku', $data);
    }
    public function temporario($id = null)
    {
         if ($id !=null) {
            $this->db->table('media_tabaku')
            ->set('aktivo_media',null,true)
            ->where('id_tabaku',$id)
            ->update();
        }else {

        $this->db->table('media_tabaku')
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
}
