<?php

namespace App\Controllers;

use App\Models\ModelHistoriaAncttl;
use CodeIgniter\RESTful\ResourceController;

class Historiaancttl extends ResourceController
{
    protected $historia;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->historia = new ModelHistoriaAncttl();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Hili Lian Historia ANCTTL',
        ];
        return view('diretor/historiaancttl/linguahistoria', $data);
    }
    public function tetum()
    {
        $historia  = $this->historia->orderBy('id_historia','DESC')->where('lingua_historia =', 'Tetum')->findAll();
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Historia Badak ANCTTL',
            'historia' => $historia,
        ];
        return view('diretor/historiaancttl/historiaancttl', $data);
    }
    public function portuguesa()
    {
        $historia  = $this->historia->orderBy('id_historia','DESC')->where('lingua_historia =', 'Portuguesa')->findAll();
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Uma Breve História da ANCTTL',
            'historia' => $historia,
        ];
        return view('diretor/historiaancttl/historiaancttl', $data);
    }
    public function english()
    {
        $historia  = $this->historia->orderBy('id_historia','DESC')->where('lingua_historia =', 'English')->findAll();
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'A Brief History Of ANCTTL',
            'historia' => $historia,
        ];
        return view('diretor/historiaancttl/historiaancttl', $data);
    }
    public function indonesia()
    {
        $historia  = $this->historia->orderBy('id_historia','DESC')->where('lingua_historia =', 'Indonesia')->findAll();
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Sejarah Singkat ANCTTL',
            'historia' => $historia,
        ];
        return view('diretor/historiaancttl/historiaancttl', $data);
    }

    
    public function new()
    {
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Aumenta Dados Historia ANCTTL',
        ];
        return view('diretor/historiaancttl/aumentahistoriaancttl', $data);
    }

    
    public function create()
    {
        $lian = $this->request->getPost('lingua_historia');
        $historia = $this->request->getPost('historia');

        $data = [
            'lingua_historia'   =>$lian,
            'historia'          =>$historia
        ];
        $sistema = $this->historia->insert($data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->historia->errors());
        }else{
            return redirect()->to(base_url('historiaancttl/lingua/'.$lian))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $historia  = $this->historia->orderBy('id_historia', 'DESC')->where('id_historia', $id)->first();
        $data = [
            'title' => 'Historia ANCTTL',
            'show' => 'Troka Dados Historia ANCTTL',
            'historia' => $historia,
        ];
        return view('diretor/historiaancttl/trokahistoriaancttl', $data);
    }

    
    public function update($id = null)
    {
        $lian = $this->request->getPost('lingua_historia');
        $historia = $this->request->getPost('historia');

        $data = [
            'id_historia'       =>$id,
            'lingua_historia'   =>$lian,
            'historia'          =>$historia
        ];
         $update = $this->historia->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->historia->errors());
        }else {
            return redirect()->to(base_url('historiaancttl/lingua/'.$lian))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function delete($id = null)
    {
        $this->historia->where('id_historia', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos()
    {
         $data = 
        [
            'title' => 'Historia ANCTTL',
            'show' => 'Hamos Dados Historia ANCTTL Temporario',
            'historia' => $this->historia->orderBy('id_historia', 'DESC')->onlyDeleted()->findAll()
        ];
        return view('diretor/historiaancttl/hamoshistoriaancttl',$data);
    }

    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('historia_anct_tl')
            ->set('deleted_at',null,true)
            ->where('id_historia',$id)
            ->update();
        }else {

        $this->db->table('historia_anct_tl')
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
            $this->historia->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->historia->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
}
