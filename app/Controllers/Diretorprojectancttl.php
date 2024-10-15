<?php

namespace App\Controllers;

use App\Models\ModelDiretor;
use App\Models\ModelProjectAncttl;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;
use Dompdf\Dompdf;

class Diretorprojectancttl extends ResourceController
{
   protected $helpers = ['antltl'];
   protected $projeito;
   protected $regulamento;
   protected $diretor;
   protected $db;
   public function __construct()
   {
        $this->projeito = new ModelProjectAncttl();
        $this->regulamento = new ModelRegulamentoSistema();
        $this->diretor = new ModelDiretor();
        $this->db = \Config\Database::connect();
   }
    public function index()
    {
        
        $regulamento  = $this->regulamento->orderBy('id_regulamento', 'DESC')->findAll();
        $data = [
            'title' => 'Sistema Projeito',
            'show' => 'Hili Projeito diretor ANCT-TL',
            'regulamento' => $regulamento,
        ];
         return view('diretor/diretorprojectancttl/homediretorprojectancttl', $data);
    }
    public function detail($id)
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
        $data = $this->projeito->where('diresaun', $id)->where('aktivo_project =', null)->getDiretorPaginatedProject(6, $keyword);
        $data ['title']= 'Projeito ANCT-TL';
        $data ['show']= 'Projeito diretor ANCT-TL';
        $data ['keyword']= $keyword;
        $data ['regulamento']  = $this->regulamento->where('id_regulamento', $id)->first();
        if (null !== $this->request->getGet('filter-data')) {
             $data['projeito'] = $this->projeito->where('diresaun', $id)->where('aktivo_project =', null)->filterdiretorproject();
             if ($data['projeito'] == null) {
                return redirect()->to(base_url('diretorprojectancttl/detail/'.$id))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
             }
          }else {
              $keyword = $this->request->getGet('keyword');
              // print_r($keyword);
              $data = $this->projeito->where('diresaun', $id)->where('aktivo_project =', null)->getDiretorPaginatedProject(6, $keyword);
              $data ['title']= 'Projeito ANCT-TL';
              $data ['show']= 'Projeito diretor ANCT-TL';
              $data ['keyword']= $keyword;
              $data ['regulamento']  = $this->regulamento->where('id_regulamento', $id)->first();
        }
         return view('diretor/diretorprojectancttl/diretorprojectancttl', $data);
    }

    
    public function show($id = null)
    {
        $projeito  = $this->projeito->where('id_projeito', $id)->detaildiretorproject();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media diretor ANCT-TL',
            'projeito' => $projeito,
            'diretor' => $diretor,
        ];
        return view('diretor/diretorprojectancttl/detaildiretorprojectancttl', $data);
    }

    
    public function new()
    {
        $regulamento  = $this->regulamento->orderBy('id_regulamento', 'DESC')->findAll();
        $data = [
            'title' => 'Sistema Projeito',
            'show' => 'Aumenta Projeito diretor ANCT-TL',
            'regulamento' => $regulamento,
        ];
        return view('diretor/diretorprojectancttl/aumentadiretorprojectancttl', $data);
    }

    
    public function create()
    {
        $introdusaun                    = $this->request->getPost('introdusaun');
        $titulo_projeito                = $this->request->getPost('titulo_projeito');
        $objectivo_projeito             = $this->request->getPost('objectivo_projeito');
        $durasaun_projeito              = $this->request->getPost('durasaun_projeito');
        $implementasaun_projeito        = $this->request->getPost('implementasaun_projeito');
        $benefisiariu_projeito          = $this->request->getPost('benefisiariu_projeito');
        $lian_maktaka                   = $this->request->getPost('lian_maktaka');
        $diresaun                       = $this->request->getPost('diresaun');
        $created                        = $this->request->getPost('created');
        $horas_project                  = $this->request->getPost('horas_project');
        $dataBerkas                     = $this->request->getFile('file_project');
		$fileName                       = $dataBerkas->getRandomName();

        $data = [
            'introdusaun'                   => $introdusaun,
            'titulo_projeito'               => $titulo_projeito,
            'objectivo_projeito'            => $objectivo_projeito,
            'durasaun_projeito'             => $durasaun_projeito,
            'implementasaun_projeito'       => $implementasaun_projeito,
            'benefisiariu_projeito'         => $benefisiariu_projeito,
            'lian_maktaka'                  => $lian_maktaka,
            'diresaun'                      => $diresaun,
            'created'                       => $created,
            'aktivo_project'                => null,
            'kode_project'                  => 0,
            'diretor_project'               => 0,
            'horas_project'                 => $horas_project,
            'file_project'                  => $fileName,
        ];
        $projeito = $this->projeito->insert($data);
         if (!$projeito) {
            return redirect()->back()->withInput()->with('errors', $this->projeito->errors());
        }else{
            $dataBerkas->move('uploads/file_project/', $fileName);
            return redirect()->to(base_url('diretorprojectancttl/detail/'.$diresaun))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }


     public function troka($id)
    {
        $model = new ModelProjectAncttl();
        $project = $model->PilihProjectDiretor($id)->getRow();
        $regulamento= $this->regulamento->where('id_regulamento !=', 1)->findAll();
        $data = [
            'title' => 'Sistema Projeito',
            'show' => 'Aumenta Projeito diretor ANCT-TL',
            'project'   => $project,
            'regulamento'   => $regulamento
        ];
        return view('diretor/diretorprojectancttl/trokadiretorprojectancttl', $data);
    }
    public function troka_projeito()
    {

        $model = new ModelProjectAncttl();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('projectancttl');
        }
        $id = $this->request->getPost('id_projeito');
        $validation = $this->validate([
            'file_project' => 'uploaded[file_project]|mime_in[file_project,application/pdf]|max_size[file_project,16384]',
        ]);
 
        if ($validation == FALSE) {
            $diresaun = $this->request->getPost('diresaun');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }
        $data = [
            'introdusaun'                   => $this->request->getPost('introdusaun'),
            'titulo_projeito'               => $this->request->getPost('titulo_projeito'),
            'objectivo_projeito'            => $this->request->getPost('objectivo_projeito'),
            'durasaun_projeito'             => $this->request->getPost('durasaun_projeito'),
            'implementasaun_projeito'       => $this->request->getPost('implementasaun_projeito'),
            'benefisiariu_projeito'         => $this->request->getPost('benefisiariu_projeito'),
            'lian_maktaka'                  => $this->request->getPost('lian_maktaka'),
            'aktivo_project'                => null,
            'kode_project'                  => 0,
            'diretor_project'               => 0,
            'diresaun'                      => $diresaun,
            'created'                       =>$this->request->getPost('created'),
            'horas_project'                 =>$this->request->getPost('horas_project')
        ];
        
        } else {
        $dt = $model->PilihProjectDiretor($id)->getRow();
        $gambar = $dt->file_project;
        $path = 'uploads/file_project/';
        @unlink($path.$gambar);
            $diresaun = $this->request->getPost('diresaun');
            if ($diresaun == null) {
                return redirect()->back()->with('error','Dados Naran Diresaun Sei Mamuk');  
            }
           $upload = $this->request->getFile('file_project');
           $fileName = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public/uploads/file_project/', $fileName);
        $data = [
             'introdusaun'                  => $this->request->getPost('introdusaun'),
            'titulo_projeito'               => $this->request->getPost('titulo_projeito'),
            'objectivo_projeito'            => $this->request->getPost('objectivo_projeito'),
            'durasaun_projeito'             => $this->request->getPost('durasaun_projeito'),
            'implementasaun_projeito'       => $this->request->getPost('implementasaun_projeito'),
            'benefisiariu_projeito'         => $this->request->getPost('benefisiariu_projeito'),
            'lian_maktaka'                  => $this->request->getPost('lian_maktaka'),
            'aktivo_project'                => null,
            'kode_project'                  => 0,
            'diretor_project'               => 0,
            'diresaun'                      => $diresaun,
            'created'                       =>$this->request->getPost('created'),
            'horas_project'                 =>$this->request->getPost('horas_project'),
            'file_project'                  => $fileName,
        ];
        }
        $narativa = $model->edit_data_diretor($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->projeito->errors());
        }else {
                # code...
                return redirect()->to(base_url('diretorprojectancttl/detail/'.$diresaun))->with('success', 'Troka Tiha Ona Dados Foun');
                # code...
        }
    }

    
    public function delete($id = null)
    {
        $this->projeito->where('id_projeito', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos($id)
    {
         $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
        $data = $this->projeito->where('diresaun', $id)->where('aktivo_project =', 1)->getDiretorPaginatedProject(4, $keyword);
        $data ['title']= 'Temporario Projeito ANCT-TL';
        $data ['show']= 'Temporario Projeito diretor ANCT-TL';
        $data ['keyword']= $keyword;
        $data ['regulamento']  = $this->regulamento->where('id_regulamento', $id)->first();
        if (null !== $this->request->getGet('filter-data')) {
            $data['projeito'] = $this->projeito->where('diresaun', $id)->where('aktivo_project =', 1)->filterdiretorproject();
            if ($data['projeito'] == null) {
                return redirect()->to(base_url('diretorprojectancttl/hamos/'.$id))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
        }else {
            $keyword = $this->request->getGet('keyword');
            // print_r($keyword);
            $data = $this->projeito->where('diresaun', $id)->where('aktivo_project =', 1)->getDiretorPaginatedProject(4, $keyword);
            $data ['title']= 'Temporario Projeito ANCT-TL';
            $data ['show']= 'Temporario Projeito diretor ANCT-TL';
            $data ['keyword']= $keyword;
            $data ['regulamento']  = $this->regulamento->where('id_regulamento', $id)->first();
        }
         return view('diretor/diretorprojectancttl/hamosdiretorprojectancttl', $data);
    }

    public function trokarelatorio($id = null)
    {
        $model = new ModelProjectAncttl();
        $id = $this->request->getPost('id_projeito');
        $model->PilihProjectDiretor($id)->getRow();
        // // $gambar = $dt->file;
        // // $path = '../public/uploads/file/';
        // // @unlink($path.$gambar);
        $data = [
            'aktivo_project' =>1,
        ];
        $model->edit_data_diretor($id,$data);
        // $this->narativa->where('id_narativa', $id)->delete();
        return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
    }
    public function temporario($id = null)
    {
         if ($id !=null) {
            $this->db->table('projeito_anct_tl')
            ->set('aktivo_project',null,true)
            ->where('id_projeito',$id)
            ->update();
        }else {

        $this->db->table('projeito_anct_tl')
            ->set('aktivo_project',null,true)
            ->where('aktivo_project is NOT NULL', null, FALSE)
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
            $model = new ModelProjectAncttl();
            if ($id != null) {
            $dt = $model->PilihProjectDiretor($id)->getRow();
            $model->HapusProjeitoImage($id);
            $gambar = $dt->file_project;
            $path = '../public/uploads/file_project/';
            @unlink($path.$gambar);
            // $this->regulamento->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->projeito->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                // $path = '../public/uploads/file/';
                // @unlink($path);
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }

    public function download($id)
    {
        $file = new ModelProjectAncttl();
		$data = $file->find($id);
		return $this->response->download('uploads/file_project/' . $data->file_project, null);
    }

    public function mypdfproject($id = null)
    {
        $dompdf = new Dompdf();
        $projeito  = $this->projeito->where('id_projeito', $id)->detailproject();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Project ANCT-TL',
            'projeito' => $projeito,
            'diretor' => $diretor,
        ];
        $view = view('diretor/diretorprojectancttl/mypdfproject', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperdiretor()->naran_kompleto_diretor), array("Attachment" =>false));
    }
}
