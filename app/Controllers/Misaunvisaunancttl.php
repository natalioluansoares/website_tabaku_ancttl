<?php

namespace App\Controllers;

use App\Models\ModelMisaunVisaun;
use CodeIgniter\RESTful\ResourceController;

class Misaunvisaunancttl extends ResourceController
{
    protected $db;
    protected $misaunvisaun;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->misaunvisaun = new ModelMisaunVisaun();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'Misaun Visaun',
            'show' => 'Hili Lian Misaun Visaun ANCT-TL',
        ];
        return view('diretor/misaunvisaun/linguamisaunvisaun', $data);
    }
    public function tetum()
    {
        $misaunvisaun  = $this->misaunvisaun->orderBy('id_misaunvisaun','DESC')->where('lingua_misaun_visaun =', 'Tetum')->findAll();
        $data = [
            'title' => 'Misaun Visaun ANCTTL',
            'showmission' => 'Misaun ANCTTL',
            'showvision' => 'Visaun ANCTTL',
            'show' => 'Misaun & Visaun ANCTTL',
            'misaunvisaun' => $misaunvisaun,
        ];
        return view('diretor/misaunvisaun/misaunvisaun', $data);
    }
    public function portuguesa()
    {
        $misaunvisaun  = $this->misaunvisaun->orderBy('id_misaunvisaun','DESC')->where('lingua_misaun_visaun =', 'Portuguesa')->findAll();
        $data = [
            'title' => 'Missão Visão ANCTTL',
            'showmission' => 'Missão ANCTTL',
            'showvision' => 'Visão ANCTTL',
            'show' => 'Missão & Visão ANCTTL',
            'misaunvisaun' => $misaunvisaun,
        ];
        return view('diretor/misaunvisaun/misaunvisaun', $data);
    }
    public function english()
    {
        $misaunvisaun  = $this->misaunvisaun->orderBy('id_misaunvisaun','DESC')->where('lingua_misaun_visaun =', 'English')->findAll();
        $data = [
            'title' => 'ANCTTL Mission Vision',
            'showmission' => 'ANCTTL Mission',
            'showvision' => 'ANCTTL Vision',
            'show' => 'ANCTTL Mission & Vision',
            'misaunvisaun' => $misaunvisaun,
        ];
        return view('diretor/misaunvisaun/misaunvisaun', $data);
    }
    public function indonesia()
    {
        $misaunvisaun  = $this->misaunvisaun->orderBy('id_misaunvisaun','DESC')->where('lingua_misaun_visaun =', 'Indonesia')->findAll();
        $data = [
            'title' => 'Misi Visi ANCTTL',
            'showmission' => 'Misi ANCTTL',
            'showvision' => 'Visi ANCTTL',
            'show' => 'Misi & Visi ANCTTL',
            
            'misaunvisaun' => $misaunvisaun,
        ];
        return view('diretor/misaunvisaun/misaunvisaun', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'Misaun Visaun',
            'show' => 'Aumenta Misaun Visaun',
        ];
        return view('diretor/misaunvisaun/aumentamisaunvisaun', $data);
    }

    
    public function create()
    {
        $lian = $this->request->getPost('lingua_misaun_visaun');
        $misaun = $this->request->getPost('misaun');
        $visaun = $this->request->getPost('visaun');

        $data = [
            'lingua_misaun_visaun'  =>$lian,
            'misaun'  =>$misaun,
            'visaun'  =>$visaun,
        ];
        $sistema = $this->misaunvisaun->insert($data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->misaunvisaun->errors());
        }else{
            return redirect()->to(base_url('misaunvisaunancttl/lingua/'.$lian))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $misaunvisaun  = $this->misaunvisaun->where('id_misaunvisaun', $id)->first();
        $data = [
            'title' => 'Misaun Visaun',
            'show' => 'Troka Misaun Visaun',
            'misaunvisaun' => $misaunvisaun,
        ];
        return view('diretor/misaunvisaun/trokamisaunvisaun', $data);
    }

    
    public function update($id = null)
    {
        $lian = $this->request->getPost('lingua_misaun_visaun');
        $misaun = $this->request->getPost('misaun');
        $visaun = $this->request->getPost('visaun');

        $data = [
            'id_misaunvisaun'       =>$id,
            'lingua_misaun_visaun'  =>$lian,
            'misaun'                =>$misaun,
            'visaun'                =>$visaun,
        ];
         $update = $this->misaunvisaun->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->misaunvisaun->errors());
        }else {
            return redirect()->to(base_url('misaunvisaunancttl/lingua/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

   
    public function delete($id = null)
    {
        $this->misaunvisaun->where('id_misaunvisaun', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
    public function hamos()
    {
         $data = 
        [
            'title' => 'Misaun Visaun',
            'show' => 'Hamos Dados Misaun Visaun Temporario',
            'misaunvisaun' => $this->misaunvisaun->onlyDeleted()->findAll()
        ];
        return view('diretor/misaunvisaun/hamosmisaunvisaun',$data);
    }

    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('misaun_visaun')
            ->set('deleted_at',null,true)
            ->where('id_misaunvisaun',$id)
            ->update();
        }else {

        $this->db->table('misaun_visaun')
            ->set('deleted_at',null,true)
            ->where('deleted_at is NOT NULL', NULL, FALSE)
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
         if ($id != null) {
            $this->misaunvisaun->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->misaunvisaun->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
}
