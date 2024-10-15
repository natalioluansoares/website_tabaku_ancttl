<?php

namespace App\Controllers;

use App\Models\ModelAbsensiDiresaun;
use App\Models\ModelAkunAncttl;
use CodeIgniter\RESTful\ResourceController;

class Absensidiresaun extends ResourceController
{
    protected $absensi;
    protected $akunanct;
    protected $helpers = ['antltl'];
    public function __construct()
    {
      $this->absensi = new ModelAbsensiDiresaun();   
      $this->akunanct = new ModelAkunAncttl();   
    }  
    public function index()
    {
        $diresaun  = $this->akunanct->orderBy('id_diresaun','DESC')->akunancttl();
        $data = [
            'title' => 'Absensi Sistema',
            'show' => 'Absensi Diresaun ANCT-TL',
            'diresaun' => $diresaun,
        ];
        return view('diretor/absensidiresaun/hareabsensidiresaun', $data);
    }

    
    public function show($id = null)
    {
        $absensi  = $this->absensi->where(['diresaun'=>$id])->orderBy('id_absensi','DESC')->absensi_dader_diretor();
        $data = [
            'title' => 'Absensi Sistema',
            'show' => 'Absensi Diresaun ANCT-TL',
            'absensi' => $absensi,
        ];
        return view('diretor/absensidiresaun/absensidiresaun', $data);
    }

   
    public function new()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function edit($id = null)
    {
        //
    }

   
    public function update($id = null)
    {
        //
    }

   
    public function delete($id = null)
    {
        //
    }
}
