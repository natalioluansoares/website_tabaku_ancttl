<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModelDiretor;
use App\Models\ModelRegulamentoSistema;
use App\Models\ModelRelatorioNarativa;
class Relatorionarativa extends ResourceController
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
   public function __construct()
   {
        $this->narativa = new ModelRelatorioNarativa();
        $this->diretor =  new ModelDiretor();
        $this->regulamento =  new ModelRegulamentoSistema();
        $this->db = \Config\Database::connect();
   }
    public function index()
    {
        $data ['title']= 'Relatorio Narativa';
        $data ['show']= 'Relatorio Narativa ANCT-TL';
        $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)
        ->where('id_regulamento !=', 2)->findAll();

        return view('diresaun/relatorionarativa/relatorionarativa', $data);
           
    }

    public function relatorionarativaprimeiroadministrasaun($id)
    {

        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $id)
         ->where('kode_relatorio =', null)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '60')
            ->where('diresaun_narativa =', $id)->where('kode_relatorio =', null)->filterdiretornarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasun/60/'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $id)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
         }
        return view('diresaun/relatorionarativa/relatorionarativadiresaun', $data);
    }
    public function relatorionarativasegundoadministrasun($id)
    {
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->where('kode_relatorio =', null)->filterdiretornarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasun/40'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->
           where('kode_relatorio =', null)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
         }
        return view('diresaun/relatorionarativa/relatorionarativadiresaun', $data);
    }
    public function relatorionarativaprimeiro()
    {   
        $diresaun = helperDiresaun()->regulamento_diresaun;
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '60')->where('kode_relatorio =', null)
         ->where('diresaun_narativa =', $diresaun)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $diresaun)->where('kode_relatorio =', null)->filternarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/detail/'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $diresaun)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
         }
        return view('diresaun/relatorionarativa/relatorionarativadiresaun', $data);
    }
    public function relatorionarativasegundo()
    {
        $diresaun = helperDiresaun()->regulamento_diresaun;
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $diresaun)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $diresaun)->where('kode_relatorio =', null)->filternarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/detail/'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $diresaun)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
         }
        return view('diresaun/relatorionarativa/relatorionarativadiresaun', $data);
    }

    public function show($id = null)
    {
        $narativa  = $this->narativa->where('id_narativa', $id)->detailnarativa();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media Diresaun ANCT-TL',
            'narativa' => $narativa,
            'diretor' => $diretor,
        ];
        return view('diresaun/relatorionarativa/detailrelatorionarativa', $data);
    }

    public function download($id)
    {
        $file = new ModelRelatorioNarativa();
		$data = $file->find($id);
		return $this->response->download('uploads/file/' . $data->file, null);
    }

    public function aktivorelatorio()
    {
        $id = $this->request->getPost('id_narativa');
        $aktivo = $this->request->getPost('aktivo_relatorio');
        $data = [
            'id_narativa' =>$id,
            'aktivo_relatorio' =>$aktivo
        ];
        $this->db->table('relatorio_narativa')->where(['id_narativa'=>$id])->update($data);
        return redirect()->to(base_url('relatorionarativa/'.$id))->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function new()
    {
        $regulamento= $this->regulamento->where('id_regulamento !=', 1)->where('id_regulamento !=', 2)->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Aumenta Relatorio Narativa',
            'regulamento' => $regulamento,
        ];
        return view('diresaun/relatorionarativa/aumentarelatorionarativa', $data);
    }

    
    public function create()
    {
 
		
        $topiko_narativa        = $this->request->getPost('topiko_narativa');
		$conteudo_narativa      = $this->request->getPost('conteudo_narativa');
		$data                   = $this->request->getPost('data');
		$horas                  = $this->request->getPost('horas');
		$diresaun               = $this->request->getPost('diresaun_narativa');
		$dataBerkas             = $this->request->getFile('file');
		$fileName               = $dataBerkas->getRandomName();
        $kode                   = $this->request->getPost('kode_narativa');
		$narativa               = $this->narativa->insert([
			'topiko_narativa'   => $topiko_narativa,
			'conteudo_narativa' => $conteudo_narativa,
			'data'              => $data,
			'horas'             => $horas,
			'diresaun_narativa' => $diresaun,
            'kode_narativa'     => $kode,
            'aktivo_relatorio'  => 0,
			'kode_relatorio'    => null,
			'file'              => $fileName,
		]);
         if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else{
            if (helperDiresaun()->regulamento_diresaun == 2) {
                $dataBerkas->move('uploads/file/', $fileName);
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasaun/'.$kode.'/'.$diresaun))->with('success','Aumenta Tiha Ona Dados Foun');
            }else {
              $dataBerkas->move('uploads/file/', $fileName);
                return redirect()->to(base_url('relatorionarativa/relatorionarativaancttl/'.$kode))->with('success','Aumenta Tiha Ona Dados Foun');  
            }
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
        ];
        return view('diresaun/relatorionarativa/trokarelatorionarativa', $data);
    }
    
    public function troka_narativa()
    {
        $model = new ModelRelatorioNarativa();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('relatorionarativa');
        }
        $id = $this->request->getPost('id_narativa');
        $validation = $this->validate([
            'file' => 'uploaded[file]|mime_in[file,application/pdf]|max_size[file,16384]',
        ]);
 
        if ($validation == FALSE) {
            $diresaun = $this->request->getPost('diresaun_narativa');
            $kode     = $this->request->getPost('kode_narativa');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }
        $data = array(
            'topiko_narativa'   => $this->request->getPost('topiko_narativa'),
            'conteudo_narativa' => $this->request->getPost('conteudo_narativa'),
            'data'              => $this->request->getPost('data'),
            'kode_narativa'     => $kode,
            'diresaun_narativa' => $diresaun,
            'aktivo_relatorio'  => 0,
            'kode_relatorio'    => null,
            'horas'             => $this->request->getPost('horas'),
        );
        } else {
        $dt = $model->PilihBlog($id)->getRow();
        $gambar = $dt->file;
        $path = 'uploads/file/';
        @unlink($path.$gambar);
            $diresaun = $this->request->getPost('diresaun_narativa');
            $kode     = $this->request->getPost('kode_narativa');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }elseif ($kode == null) {
                return redirect()->back()->with('error','Dados Kode Relatorio Narativa Sei Mamuk');  
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
            'aktivo_relatorio'  => 0,
            'kode_relatorio'    => null,
            'file'              => $fileName
        );
        }
        $narativa = $model->edit_data($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else {
            if (helperDiresaun()->regulamento_diresaun == 2) {
                # code...
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasaun/'.$kode.'/'.$diresaun))->with('success', 'Troka Tiha Ona Dados Foun');
            }else {
                # code...
                return redirect()->to(base_url('relatorionarativa'))->with('success', 'Troka Tiha Ona Dados Foun');
            }
        }
    }
    
   public function trokarelatorio($id = null)
    {
        $model = new ModelRelatorionarativa();
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
