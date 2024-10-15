<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelProfileDiresaunAncttl;
use CodeIgniter\RESTful\ResourceController;

class Profilediresaundiretor extends ResourceController
{
    protected $profile;
    protected $akundiresaun;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->profile = new ModelProfileDiresaunAncttl();
        $this->akundiresaun = new ModelAkunAncttl();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        
    }
    
    
    public function show($id = null)
    {
        $profile = $this->profile->where('id_profile_diresaun_ancttl =', $id)->profileDiresaun();
        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Profile Diretor Tetum',
            'profile' => $profile,
        ];
        return view('diretor/profilediresaunancttl/profilediresaun', $data);
    }

    
    public function new()
    {
        $diresaun = $this->akundiresaun->findAll();

        $data = [
            'title' => 'Profile Diretor',
            'fila'  => 'Click Hodi Fila Ba Akun Diretor',
            'aumenta'  => 'Click Hodi Aumenta Profile Diretor',
            'temporario'  => 'Click Hodi Hare File Temporario Profile Diretor',
            'troka'  => 'Click Hodi Troka Profile Diretor',
            'hamos'  => 'Click Hodi Hamos Profile Diretor',
            'detail'  => 'Click Hodi Hare Detail Profile Diretor',
            'show' => 'Aumenta Profile Diretor Tetum',
            'diresaun' => $diresaun
        ];
        return view('diretor/profilediresaunancttl/aumentaprofilediresaun', $data);
    }
    public function detail($id)
    {
        $profile  = $this->profile->where('id_profile_diresaun', $id)->profileDiretorRow();
        if ($profile == null) {
            return redirect()->back()->withInput()->with('errors', 'Dados Nebe Ita Buka Laiha');
        }else {
            # code...
            $data = [
                'title' => 'Detail Profile Diresaun',
                'show' => 'Carta Diresaun ANCT-TL',
                'profile' => $profile,
            ];
            return view('diretor/profilediretor/detailprofilediretor', $data);
        }
    }
   
    public function create()
    {
        $dataprofile        = $this->request->getPost('data_profile_diresaun');
        $profile            = $this->request->getPost('profile_diresaun');
        $id_profile = $this->request->getPost('id_profile_diresaun_ancttl');
        $lingua             = $this->request->getPost('lingua_profile_diresaun');

        $data = [
            'data_profile_diresaun'      =>$dataprofile,
            'profile_diresaun'           =>$profile,
            'id_profile_diresaun_ancttl' =>$id_profile,
            'lingua_profile_diresaun'    =>$lingua,
        ];
        $sistema    = $this->profile->insert($data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->profile->errors());
        }else{
            return redirect()->to(base_url('profilediresaundiretor/'.$id_profile))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $profile  = $this->profile->where('id_profile_diresaun', $id)->profileDiresaunRow();
        $diresaun = $this->akundiresaun->findAll();
        $data = [
            'title' => 'Detail Profile Diretor',
            'show' => 'Carta Diretor ANCT-TL',
            'profile' => $profile,
            'diresaun' => $diresaun
        ];
        return view('diretor/profilediresaunancttl/trokaprofilediresaun', $data);
    }

    
    public function update($id = null)
    {
        $dataprofile        = $this->request->getPost('data_profile_diresaun');
        $profile            = $this->request->getPost('profile_diresaun');
        $id_profile = $this->request->getPost('id_profile_diresaun_ancttl');
        $lingua             = $this->request->getPost('lingua_profile_diresaun');

        $data = [
            'id_profile_diresaun'                =>$id,
            'data_profile_diresaun'      =>$dataprofile,
            'profile_diresaun'           =>$profile,
            'id_profile_diresaun_ancttl' =>$id_profile,
            'lingua_profile_diresaun'    =>$lingua,
        ];
        $sistema    = $this->profile->update($id, $data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->profile->errors());
        }else{
            return redirect()->to(base_url('profilediresaundiretor/'.$id_profile))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

   
    public function delete($id = null)
    {
        $this->profile->where('id_profile_diresaun_ancttl', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos()
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
            'lingua' => $this->profile->onlyDeleted()->profileDiresaun(),
            // 'profile'  => $this->profile->where('lingua_profile=', $lingua)->profileDiretorRow()
        ];
        return view('diretor/profilediresaunancttl/hamosprofilediresaun',$data);
    }

    public function temporario($id = null)
    {
        $this->db->table('profile_diresaun')
        ->set('deleted_at',null,true)
        ->where('id_profile_diresaun_ancttl',$id)
        ->update();
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('profilediresaundiretor/'.$id))->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->back()->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }

    public function hamos_hotu($id = null)
    {
        $this->profile->delete($id, true);
        return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
        }else {
            return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
        }
    }
}
