<?php

namespace App\Controllers;

use App\Models\ModelDiretor;
use App\Models\ModelProjectAncttl;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;
use Dompdf\Dompdf;

class Projectancttl extends ResourceController
{
   protected $helpers = ['antltl'];
   protected $projeito;
   protected $diretor;
   protected $regulamento;
   public function __construct()
   {
        $this->projeito = new ModelProjectAncttl();
        $this->regulamento = new ModelRegulamentoSistema();
        $this->diretor = new ModelDiretor();
   }
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
        $data = $this->projeito->getPaginated(6, $keyword);
        $data ['title']= 'Projeito ANCT-TL';
        $data ['show']= 'Projeito Diresaun ANCT-TL';
        $data ['keyword']= $keyword;
        $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
        if (null !== $this->request->getGet('filter-data')) {
             $data['projeito'] = $this->projeito->filterproject();
             if ($data['projeito'] == null) {
                return redirect()->to(base_url('projectancttl'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
             }
          }else {
              $keyword = $this->request->getGet('keyword');
              // print_r($keyword);
              $data = $this->projeito->getPaginated(6, $keyword);
              $data ['title']= 'Projeito ANCT-TL';
              $data ['show']= 'Projeito Diresaun ANCT-TL';
              $data ['keyword']= $keyword;
              $data ['regulamento'] = $this->regulamento->where('id_regulamento !=', 1)->findAll();
        }
         return view('diresaun/projectoancttl/projectoancttl', $data);
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
        return view('diresaun/projectoancttl/hiliprojectoancttl', $data);
    }
    
    public function show($id = null)
    {
        $projeito  = $this->projeito->where('id_projeito', $id)->detaildiretorproject();
        $diretor = $this->diretor->akundiretor();
        $data = [
            'title' => 'Sistema Media',
            'show' => 'Detail Media Diresaun ANCT-TL',
            'projeito' => $projeito,
            'diretor' => $diretor,
        ];
        return view('diresaun/projectoancttl/detailprojectancttl', $data);
    }

    
    public function new()
    {
        $regulamento = $this->regulamento->where('id_regulamento !=', 1)->findAll();
        $data = [
            'title' => 'Sistema Projeito',
            'show' => 'Aumenta Projeito Diresaun ANCT-TL',
            'regulamento' => $regulamento
        ];
        return view('diresaun/projectoancttl/aumentaprojectoancttl', $data);
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
            if (helperDiresaun()->regulamento_diresaun == 2) {
                $dataBerkas->move('uploads/file_project/', $fileName);
                return redirect()->to(base_url('projectancttl/detail/'.$diresaun))->with('success','Aumenta Tiha Ona Dados Foun');
            }else {
                $dataBerkas->move('uploads/file_project/', $fileName);
                return redirect()->to(base_url('projectancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }


    public function edit($id = null)
    {
        $project = $this->projeito->where('id_projeito', $id)->first();
        $regulamento = $this->regulamento->where('id_regulamento !=', 1)->findAll();
        $data = [
            'title'         => 'Sistema Projeito',
            'show'          => 'Aumenta Projeito Diresaun ANCT-TL',
            'project'       => $project,
            'regulamento'   => $regulamento
        ];
        return view('diresaun/projectoancttl/trokaprojectoancttl', $data);
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
                if (helperDiresaun()->regulamento_diresaun == 2) {
                    # code...
                    return redirect()->to(base_url('projectancttl/detail/'.$diresaun))->with('success', 'Troka Tiha Ona Dados Foun');
                }else {
                    return redirect()->to(base_url('projectancttl'))->with('success', 'Troka Tiha Ona Dados Foun');
                    # code...
                }
        }
    }

    public function trokaproject($id = null)
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
    
    // public function delete($id = null)
    // {
    //     $this->projeito->where('id_projeito', $id)->delete();
    //     return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    // }
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
        $view = view('diresaun/projectoancttl/mypdfproject', $data);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation (potrait, landscape)
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream((helperDiresaun()->naran_kompleto_diresaun), array("Attachment" =>false));
    }
}
