<?php

namespace App\Controllers;

use App\Models\ModelDiretor;
use App\Models\ModelProfilDiretor;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;

class Profilediretor extends ResourceController
{
    protected $profile;
    protected $diretor;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->profile = new ModelProfilDiretor();
        $this->diretor = new ModelDiretor();
        $this->db   = \Config\Database::connect();
    }
    
    public function tetum()
    {
        $lingua = $this->profile->where('lingua_profile =', 'Tetum')->profileDiretor();
        $row = 'Tetum';

        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Profile Diretor Tetum',
            'lingua' => $lingua,
            'row' => $row,
        ];
        return view('diretor/profilediretor/profilediretor', $data);
    }

    
    public function portuguesa()
    {
         $lingua = $this->profile->where('lingua_profile =', 'Portuguesa')->profileDiretor();
        $row = 'Portuguesa';
        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Profile Diretor Tetum',
            'lingua' => $lingua,
            'row' => $row
        ];
        return view('diretor/profilediretor/profilediretor', $data);
    }

    public function english()
    {
         $lingua = $this->profile->where('lingua_profile =', 'English')->profileDiretor();
         $row = $this->profile->where('lingua_profile =', 'English')->profileDiretorRow();

        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Profile Diretor Tetum',
            'lingua' => $lingua,
            'row' => $row
        ];
        return view('diretor/profilediretor/profilediretor', $data);
    }
    
    public function indonesia()
    {
         $lingua = $this->profile->where('lingua_profile =', 'Indonesia')->profileDiretor();
         $row = 'Indonesia';

        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Profile Diretor Tetum',
            'lingua' => $lingua,
            'row' => $row,
        ];
        return view('diretor/profilediretor/profilediretor', $data);
    }
    public function detail($id)
    {
        $profile  = $this->profile->where('id_profile', $id)->profileDiretorRow();
         if ($profile == null) {
            return redirect()->back()->withInput()->with('errors', 'Dados Nebe Ita Buka Laiha');
        }else {
        $data = [
            'title' => 'Detail Profile Diretor',
            'show' => 'Carta Diretor ANCT-TL',
            'profile' => $profile,
        ];
        return view('diretor/profilediretor/detailprofilediretor', $data);
        }
    }
    public function new()
    {
        $diretor = $this->diretor->findAll();

        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Aumenta Profile Diretor Tetum',
            'diretor' => $diretor
        ];
        return view('diretor/profilediretor/aumentaprofilediretor', $data);
    }

    
    public function create()
    {
        $dataprofile        = $this->request->getPost('data_profile');
        $profile            = $this->request->getPost('profile');
        $id_profile_diretor = $this->request->getPost('id_profile_diretor');
        $lingua             = $this->request->getPost('lingua_profile');

        $data = [
            'data_profile'      =>$dataprofile,
            'profile'           =>$profile,
            'id_profile_diretor'=>$id_profile_diretor,
            'lingua_profile'    =>$lingua,
        ];
        $sistema    = $this->profile->insert($data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->profile->errors());
        }else{
            return redirect()->to(base_url('profilediretor/'.$lingua))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $profile  = $this->profile->where('id_profile', $id)->profileDiretorRow();
        $diretor = $this->diretor->findAll();
        $data = [
            'title' => 'Detail Profile Diretor',
            'show' => 'Carta Diretor ANCT-TL',
            'profile' => $profile,
            'diretor' => $diretor
        ];
        return view('diretor/profilediretor/trokaprofilediretor', $data);
    }

    
    public function update($id = null)
    {
        $dataprofile        = $this->request->getPost('data_profile');
        $profile            = $this->request->getPost('profile');
        $id_profile_diretor = $this->request->getPost('id_profile_diretor');
        $lingua             = $this->request->getPost('lingua_profile');

        $data = [
            'id_profile'        =>$id,
            'data_profile'      =>$dataprofile,
            'profile'           =>$profile,
            'id_profile_diretor'=>$id_profile_diretor,
            'lingua_profile'    =>$lingua,
        ];
        $sistema    = $this->profile->update($id, $data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->profile->errors());
        }else{
            return redirect()->to(base_url('profilediretor/'.$lingua))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    public function delete($id = null)
    {
       $this->profile->where('id_profile_diretor', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos($lingua)
    {
         $data = 
        [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Aumenta Profile Diretor Tetum',
            'title' => 'Temporario Profile Diretor',
            'show' => 'Hamos Dados Profile Diretor Temporario',
            'lingua' => $this->profile->where('lingua_profile =', $lingua)->onlyDeleted()->profileDiretor(),
            'profile'  => $this->profile->where('lingua_profile=', $lingua)->profileDiretorRow()
        ];
        return view('diretor/profilediretor/hamosprofilediretor',$data);
    }

    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('profile_diretor')
            ->set('deleted_at',null,true)
            ->where('id_profile_diretor',$id)
            ->update();
        }else {

        $this->db->table('profile_diretor')
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
            $this->profile->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->profile->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
}
