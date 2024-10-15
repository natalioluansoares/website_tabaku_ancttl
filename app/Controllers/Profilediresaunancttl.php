<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelProfileDiresaunAncttl;
use CodeIgniter\RESTful\ResourceController;

class Profilediresaunancttl extends ResourceController
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
        $profile = $this->profile->profileDiresaunHelper();
        $data = [
            'title' => 'Profile diresaun',
            'fila'  => 'Click Hodi Fila Ba Akun diresaun',
            'aumenta'  => 'Click Hodi Aumenta Profile diresaun',
            'temporario'  => 'Click Hodi Hare File Temporario Profile diresaun',
            'troka'  => 'Click Hodi Troka Profile diresaun',
            'hamos'  => 'Click Hodi Hamos Profile diresaun',
            'detail'  => 'Click Hodi Hare Detail Profile diresaun',
            'show' => 'Profile diresaun Tetum',
            'profile' => $profile,
        ];
        return view('diresaun/profilediresaunancttl/profilediresaun', $data);
    }

    public function show($id = null)
    {

        $profile  = $this->profile->where('id_profile_diresaun', $id)->profileDiresaunHelperRow();
        if ($profile == null) {
            return redirect()->back()->withInput()->with('errors', 'Dados Nebe Ita Buka Laiha');
        }else {
            $data = [
                'title' => 'Detail Profile Diresaun',
                'show' => 'Carta Diresaun ANCT-TL',
                'profile' => $profile,
            ];
            return view('diresaun/profilediresaunancttl/detailprofilediresaun', $data);
        }
    }

    
    public function new()
    {
        $diresaun = $this->akundiresaun->findAll();

        $data = [
            'title' => 'Profile diresaun',
            'fila'  => 'Click Hodi Fila Ba Akun diresaun',
            'aumenta'  => 'Click Hodi Aumenta Profile diresaun',
            'temporario'  => 'Click Hodi Hare File Temporario Profile diresaun',
            'troka'  => 'Click Hodi Troka Profile diresaun',
            'hamos'  => 'Click Hodi Hamos Profile diresaun',
            'detail'  => 'Click Hodi Hare Detail Profile diresaun',
            'show' => 'Aumenta Profile diresaun Tetum',
            'diresaun' => $diresaun
        ];
        return view('diresaun/profilediresaunancttl/aumentaprofilediresaun', $data);
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
            return redirect()->to(base_url('profilediresaunancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $profile  = $this->profile->where('id_profile_diresaun', $id)->profileDiresaunRow();
        $diresaun = $this->akundiresaun->findAll();
        $data = [
            'title' => 'Detail Profile diresaun',
            'show' => 'Carta diresaun ANCT-TL',
            'profile' => $profile,
            'diresaun' => $diresaun
        ];
        return view('diresaun/profilediresaunancttl/trokaprofilediresaun', $data);
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
            return redirect()->to(base_url('profilediresaunancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

   
    public function delete($id = null)
    {
        $this->profile->where('id_profile_diresaun_ancttl', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
