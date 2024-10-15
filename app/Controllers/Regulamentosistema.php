<?php

namespace App\Controllers;

use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;
use Faker\Extension\Helper;

class Regulamentosistema extends ResourceController
{
    protected $regulamento;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->regulamento = new ModelRegulamentoSistema();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        $regulamento  = $this->regulamento->orderBy('id_regulamento','DESC')->where('deleted =', null)->findAll();
        $data = [
            'title' => 'Regulamento Sistema',
            'show' => 'Tabel Regulamento Sistema',
            'regulamento' => $regulamento,
        ];
        return view('diretor/regulamentosistema/regulamentosistema', $data);
    }

    public function show($id = null)
    {

    }

    public function new()
    {
        $regulamento  = $this->regulamento->findAll();
        $data = [
            'title' => 'Regulamento Sistema',
            'show' => 'Aumenta Dados Regulamento Sistema',
            'regulamento' => $regulamento,
        ];
        return view('diretor/regulamentosistema/aumentadadosregulamentosistema', $data);
    }


    public function create()
    {
        $regulamento = $this->request->getPost();
        $sistema = $this->regulamento->insert($regulamento);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->regulamento->errors());
        }else{
            return redirect()->to(base_url('regulamentosistema'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $regulamento  = $this->regulamento->where('id_regulamento', $id)->first();
        $data = [
            'title' => 'Regulamento Sistema',
            'show' => 'Aumenta Dados Regulamento Sistema',
            'regulamento' => $regulamento,
        ];
        return view('diretor/regulamentosistema/trokadadosregulamentosistema', $data);
    }

    
    public function update($id = null)
    {
        $data = $this->request->getPost();
         $update = $this->regulamento->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->regulamento->errors());
        }else {
            return redirect()->to(base_url('regulamentosistema'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function delete($id = null)
    {
        $data = [
             'deleted' =>date('Y-m-d H:i:s'),
        ];
        $this->regulamento->update($id, $data);
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos()
    {
         $data = 
        [
            'title' => 'Regulamento Sistema',
            'show' => 'Hamos Dados Regulamento Sistema Temporario',
            'regulamento' => $this->regulamento->where('deleted !=', null)->findAll()
        ];
        return view('diretor/regulamentosistema/hamosregulamentosistema',$data);
    }

    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('regulamento_sistema')
            ->set('deleted',null,true)
            ->where('id_regulamento',$id)
            ->update();
        }else {

        $this->db->table('regulamento_sistema')
            ->set('deleted',null,true)
            ->where('deleted is NOT NULL', NULL, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('regulamentosistema'))->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->to(site_url('regulamentosistemahamos'))->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }

    public function hamos_hotu($id = null)
    {
         if ($id != null) {
            $this->regulamento->delete($id, true);
            return redirect()->to(site_url('regulamentosistemahamos'))->with('success','Hamos Tiha Ona Dados Temporario');
        }
    }
}
