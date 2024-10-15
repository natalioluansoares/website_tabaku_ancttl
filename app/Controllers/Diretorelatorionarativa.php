<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModelDiretor;
use App\Models\ModelProjectAncttl;
use App\Models\ModelRegulamentoSistema;
use App\Models\ModelRelatorionarativa;
use Dompdf\Dompdf;
class diretorelatorionarativa extends ResourceController
{
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
   protected $helpers = ['antltl'];
   protected $db;
   protected $narativa;
   protected $regulamento;
   protected $diretor;
   public function __construct()
   {
        $this->narativa = new ModelRelatorionarativa();
        $this->regulamento = new ModelRegulamentoSistema();
        $this->diretor =  new ModelDiretor();
        $this->db = \Config\Database::connect();
   }
    public function index()
    {
        $regulamento  = $this->regulamento->orderBy('id_regulamento', 'ASC')->
        where('id_regulamento !=', 1)->where('id_regulamento !=', 2)->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Hili Relatorio Narativa ANCT-TL',
            'regulamento' => $regulamento,
        ];
        return view('diretor/diretorelatorionarativa/hilidiretorelatorionarativa', $data);
       
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
         $data ['persen']= '60';
         $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->findAll();

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
            $data ['persen']= '60';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();
         }
        return view('diretor/diretorelatorionarativa/diretorelatorionarativa', $data);
    }
    public function relatorionarativasegundoadministrasun($id)
    {
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->where('kode_relatorio =', null)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['persen']= '40';
         $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();

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
            $data ['persen']= '40';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();
         }
        return view('diretor/diretorelatorionarativa/diretorelatorionarativa', $data);
    }
        public function show($id = null)
        {
        $narativa  = $this->narativa->detaildiretornarativa($id);
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Detail Relatorio Narativa ANCT-TL',
            'narativa' => $narativa,
            'diretor' => $diretor,
        ];
        return view('diretor/diretorelatorionarativa/detaildiretorelatorionarativa', $data);
    }

    public function download($id)
    {
        $file = new ModelRelatorionarativa();
		$data = $file->find($id);
		return $this->response->download('uploads/file/' . $data->file, null);
    }

    
    public function new()
    {
        $regulamento  = $this->regulamento->orderBy('id_regulamento', 'ASC')->
        where('id_regulamento !=', 1)->where('id_regulamento !=', 2)->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Aumenta Relatorio Narativa',
            'regulamento' => $regulamento,
        ];
        return view('diretor/diretorelatorionarativa/aumentadiretorelatorionarativa', $data);
    }

    
    public function create()
    {
 
		
        $topiko_narativa = $this->request->getPost('topiko_narativa');
		$conteudo_narativa = $this->request->getPost('conteudo_narativa');
		$data = $this->request->getPost('data');
		$horas = $this->request->getPost('horas');
		$regulamento_diresaun = $this->request->getPost('regulamento_diresaun');
		$kode = $this->request->getPost('kode_narativa');
		$dataBerkas = $this->request->getFile('file');
		$fileName = $dataBerkas->getRandomName();
		$narativa = $this->narativa->insert([
			'topiko_narativa'   => $topiko_narativa,
			'conteudo_narativa' => $conteudo_narativa,
			'data'              => $data,
			'horas'             => $horas,
			'kode_narativa'     => $kode,
			'diresaun_narativa' => $regulamento_diresaun,
			'kode_relatorio'    => null,
			'aktivo_relatorio'    => 0,
			'file'              => $fileName,
		]);
         if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else{
            $dataBerkas->move('uploads/file/', $fileName);
            return redirect()->to(base_url('diretorelatorionarativa/relatorionarativaadministrasaun/'.$kode.'/'
            .$regulamento_diresaun))->with('success','Aumenta Tiha Ona Dados Foun');
        }
		
	}
    


    public function troka($id)
    {
        $model = new ModelRelatorionarativa();
        $narativa = $model->PilihBlogDiretor($id)->getRow();
         $regulamento  = $this->regulamento->orderBy('id_regulamento', 'DESC')->findAll();
        $data = [
            'title' => 'Relatorio Narativa',
            'show' => 'Troka Relatorio Narativa',
            'narativa' => $narativa,
            'regulamento' => $regulamento,
        ];
        return view('diretor/diretorelatorionarativa/trokadiretorelatorionarativa', $data);
    }
    
    public function troka_narativa()
    {
        $model = new ModelRelatorionarativa();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('diretorelatorionarativa');
        }
        $id = $this->request->getPost('id_narativa');
        $validation = $this->validate([
            'file' => 'uploaded[file]|mime_in[file,application/pdf]|max_size[file,16384]',
        ]);
 
        if ($validation == FALSE) {
        $regulamento_diresaun   = $this->request->getPost('regulamento_diresaun');
        $kode                   = $this->request->getPost('kode_narativa');
        $data = array(
            'topiko_narativa'       => $this->request->getPost('topiko_narativa'),
            'conteudo_narativa'     => $this->request->getPost('conteudo_narativa'),
            'data'                  => $this->request->getPost('data'),
            'data'                  => $this->request->getPost(''),
            'diresaun_narativa'     => $regulamento_diresaun,
            'kode_narativa'         => $kode,
            'kode_relatorio'        => null,
            'aktivo_relatorio'      => 0,
            'horas'                 => $this->request->getPost('horas'),
        );
        } else {
        $dt = $model->PilihBlogDiretor($id)->getRow();
        $gambar = $dt->file;
        $path = 'uploads/file/';
        @unlink($path.$gambar);
        $regulamento_diresaun= $this->request->getPost('regulamento_diresaun');
        $kode    = $this->request->getPost('kode_narativa');
        $upload = $this->request->getFile('file');
        $fileName = $upload->getRandomName();
        $upload->move(WRITEPATH . '../public/uploads/file/', $fileName);
        $data = array(
            'topiko_narativa'       => $this->request->getPost('topiko_narativa'),
            'conteudo_narativa'     => $this->request->getPost('conteudo_narativa'),
            'data'                  => $this->request->getPost('data'),
            'diresaun_narativa'     => $regulamento_diresaun,
            'kode_narativa'         => $kode,
            'horas'                 => $this->request->getPost('horas'),
            'kode_relatorio'        => null,
            'aktivo_relatorio'      => 0,
            'file'                  => $fileName
        );
        }
        $narativa = $model->edit_data_diretor($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->narativa->errors());
        }else {
            return redirect()->to(base_url('diretorelatorionarativa/relatorionarativaadministrasaun/'.$kode.'/'
            .$regulamento_diresaun))->with('success', 'Troka Tiha Ona Dados Foun');
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
    public function aktivorelatorio()
    {
        $id = $this->request->getPost('id_narativa');
        $aktivo = $this->request->getPost('aktivo_relatorio');
        $data = [
            'id_narativa' =>$id,
            'aktivo_relatorio' =>$aktivo
        ];
        $this->db->table('relatorio_narativa')->where(['id_narativa'=>$id])->update($data);
        return redirect()->to(base_url('diretorelatorionarativa/'.$id))->with('success','Hamos Tiha Ona Dados Temporario');
    }
   public function hamosrelatorionarativaprimeiro($id)
    {

        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $id)
         ->where('kode_relatorio =', 1)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['persen']= '60';
         $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->findAll();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '60')
            ->where('diresaun_narativa =', $id)->where('kode_relatorio =', 1)->filterdiretornarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasun/60/'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '60')->where('diresaun_narativa =', $id)->where('kode_relatorio =', 1)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['persen']= '60';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();
         }
        return view('diretor/diretorelatorionarativa/hamosdiretorelatorionarativa', $data);
    }
    public function hamosrelatorionarativasegundo($id)
    {
       $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
         $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->where('kode_relatorio =', 1)->getPaginated(6, $keyword);
         $data ['title']= 'Relatorio Narativa';
         $data ['show']= 'Relatorio Narativa ANCT-TL';
         $data ['keyword']= $keyword;
         $data ['persen']= '40';
         $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();

         if (null !== $this->request->getGet('filter-data')) {
            $data['narativa'] = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->where('kode_relatorio =', 1)->filterdiretornarativa();
            if ($data['narativa'] == null) {
                return redirect()->to(base_url('relatorionarativa/relatorionarativaadministrasun/40'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
         }else{
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
           $data = $this->narativa->where('kode_narativa =', '40')->where('diresaun_narativa =', $id)->
           where('kode_relatorio =', 1)->getPaginated(6, $keyword);
            $data ['title']= 'Relatorio Narativa';
            $data ['show']= 'Relatorio Narativa ANCT-TL';
            $data ['persen']= '40';
            $data ['keyword']= $keyword;
            $data ['regulamento'] = $this->regulamento->where('id_regulamento', $id)->first();
         }
        return view('diretor/diretorelatorionarativa/hamosdiretorelatorionarativa', $data);
    }

    public function temporario($id = null)
    {
         if ($id !=null) {
            $this->db->table('relatorio_narativa')
            ->set('kode_relatorio',null,true)
            ->where('id_narativa',$id)
            ->update();
        }else {

        $this->db->table('relatorio_narativa')
            ->set('kode_relatorio',null,true)
            ->where('kode_relatorio is NOT NULL', null, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->back()->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }
    public function hamos_hotu($id = null)
    {
            $model = new ModelRelatorioNarativa();
            if ($id != null) {
            $dt = $model->PilihBlog($id)->getRow();
            $model->HapusBlog($id);
            $gambar = $dt->file;
            $path = '../public/uploads/file/';
            @unlink($path.$gambar);
            // $this->regulamento->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->narativa->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                // $path = '../public/uploads/file/';
                // @unlink($path);
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
}
