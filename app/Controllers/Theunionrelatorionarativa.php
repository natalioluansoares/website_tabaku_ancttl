<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModelDiretor;
use App\Models\ModelKodeNarativaTheUnion;
use App\Models\ModelRegulamentoSistema;
use App\Models\ModelRelatorioNarativa;
class Theunionrelatorionarativa extends ResourceController
{
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
   protected $helpers = ['antltl'];
   protected $db;
   protected $narativa;
   protected $diretor;
   protected $regulamento;
   protected $kode;
   public function __construct()
   {
        $this->narativa = new ModelRelatorioNarativa();
        $this->diretor =  new ModelDiretor();
        $this->regulamento =  new ModelRegulamentoSistema();
        $this->kode =  new ModelKodeNarativaTheUnion();
        $this->db = \Config\Database::connect();
   }
    public function index()
    {

        $data ['title']= 'Kode Relatorio Narativa';
        $data ['show']= 'Kode Relatorio Narativa ANCT-TL The Union';
        $data ['kode'] = $this->kode->findAll();

        return view('diresaun/theunionrelatorionarativa/relatorionarativa', $data);
    }

    public function detail($id)
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('diresaun_narativa', $id)->where('kode_relatorio =', null)->getDiretorPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['regulamento'] = $this->regulamento->where('id_regulamento =', 3)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa', $id)->where('kode_relatorio =', null)->filterdiretornarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('theunionrelatorionarativa/detail/'.$id))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa', $id)->where('kode_relatorio =', null)->getDiretorPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento =', 3)->findAll();
         }
        return view('diresaun/theunionrelatorionarativa/relatorionarativadiresaun', $data);
    }

    public function show($id = null)
    {
        $narativa  = $this->narativa->where('id_narativa', $id)->detaildiretornarativa();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media Diresaun ANCT-TL',
            'narativa' => $narativa,
            'diretor' => $diretor,
        ];
        return view('diresaun/theunionrelatorionarativa/detailrelatorionarativa', $data);
    }

    public function download($id)
    {
        $file = new ModelRelatorioNarativa();
		$data = $file->find($id);
		return $this->response->download('uploads/file/' . $data->file, null);
    }

    
    public function new()
    {
        $kode = $this->kode->findAll();
        $regulamento= $this->regulamento->where('id_regulamento =', 3)->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Aumenta Relatorio Narativa',
            'regulamento' => $regulamento,
            'kode' => $kode,
        ];
        return view('diresaun/theunionrelatorionarativa/aumentarelatorionarativa', $data);
    }

    
    public function create()
    {
 
		
        $topiko_narativa = $this->request->getPost('topiko_narativa');
		$conteudo_narativa = $this->request->getPost('conteudo_narativa');
		$data = $this->request->getPost('data');
		$horas = $this->request->getPost('horas');
		$diresaun = $this->request->getPost('diresaun_narativa');
		$kode = $this->request->getPost('kode_narativa');
		$dataBerkas = $this->request->getFile('file');
		$fileName = $dataBerkas->getRandomName();
		$narativa = $this->narativa->insert([
			'topiko_narativa'   => $topiko_narativa,
			'conteudo_narativa' => $conteudo_narativa,
			'data'              => $data,
			'horas'             => $horas,
			'diresaun_narativa' => $diresaun,
			'kode_narativa' => $kode,
			'kode_relatorio'    => null,
			'file'              => $fileName,
		]);
         if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else{
            
                $dataBerkas->move('uploads/file/', $fileName);
                return redirect()->to(base_url('theunionrelatorionarativa/detail/'.$kode))->with('success','Aumenta Tiha Ona Dados Foun');

        }
		
	}
    


    public function troka($id)
    {
        $model = new ModelRelatorioNarativa();
        $narativa = $model->PilihBlog($id)->getRow();
        $regulamento= $this->regulamento->where('id_regulamento !=', 1)->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Troka Relatorio Narativa',
            'narativa' => $narativa,
            'regulamento' => $regulamento,
            'kode' => $this->kode->findAll(),
        ];
        return view('diresaun/theunionrelatorionarativa/trokarelatorionarativa', $data);
    }
    
    public function troka_narativa()
    {
        $model = new ModelRelatorioNarativa();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('theunionrelatorionarativa');
        }
        $id = $this->request->getPost('id_narativa');
        $validation = $this->validate([
            'file' => 'uploaded[file]|mime_in[file,application/pdf]|max_size[file,16384]',
        ]);
 
        if ($validation == FALSE) {
            $diresaun = $this->request->getPost('diresaun_narativa');
            $kode = $this->request->getPost('kode_narativa');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }
        $data = array(
            'topiko_narativa'   => $this->request->getPost('topiko_narativa'),
            'conteudo_narativa' => $this->request->getPost('conteudo_narativa'),
            'data'              => $this->request->getPost('data'),
            'kode_narativa'     => $kode,
            'diresaun_narativa' => $diresaun,
            'kode_relatorio'    => null,
            'horas'             => $this->request->getPost('horas'),
        );
        } else {
        $dt = $model->PilihBlog($id)->getRow();
        $gambar = $dt->file;
        $path = 'uploads/file/';
        @unlink($path.$gambar);
            $kode = $this->request->getPost('kode_narativa');
            $diresaun = $this->request->getPost('diresaun_narativa');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }
           $upload = $this->request->getFile('file');
           $fileName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public/uploads/file/', $fileName);
        $data = array(
            'topiko_narativa'   => $this->request->getPost('topiko_narativa'),
            'conteudo_narativa' => $this->request->getPost('conteudo_narativa'),
            'data'              => $this->request->getPost('data'),
            'horas'             => $this->request->getPost('horas'),
            'kode_narativa'     => $kode,
            'diresaun_narativa' => $diresaun,
            'kode_relatorio'    => null,
            'file'              => $fileName
        );
        }
        $narativa = $model->edit_data($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else {
                # code...
                return redirect()->to(base_url('theunionrelatorionarativa/detail/'.$kode))->with('success', 'Troka Tiha Ona Dados Foun');
                # code...
        }
        
    }
    
   public function trokarelatorio($id = null)
    {
        $model = new ModelRelatorioNarativa();
        $id = $this->request->getPost('id_narativa');
        $model->PilihBlogDiretor($id)->getRow();
        // // $gambar = $dt->file;
        // // $path = '../public/uploads/file/';
        // // @unlink($path.$gambar);
        $data = [
            'kode_relatorio' =>1,
        ];
        $model->edit_data_diretor($id,$data);
        // $this->narativa->where('id_narativa', $id)->delete();
        return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
    }
}
