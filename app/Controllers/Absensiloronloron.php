<?php

namespace App\Controllers;

use App\Models\ModelAbsensiDiresaun;
use CodeIgniter\RESTful\ResourceController;

class Absensiloronloron extends ResourceController
{
    
    protected $helpers = ['antltl'];
    protected $absensi;
    public function __construct()
    {
        $this->absensi = new ModelAbsensiDiresaun(); 
    }
    public function index(): string
    {
        $absensi  = $this->absensi->orderBy('id_absensi','DESC')->absensi_dader_diresaun();
        $data = [
            'title' => 'Absensi Sistema',
            'show' => 'Absensi Diresaun Dader ANCT-TL',
            'absensi' => $absensi,
        ];
        return view('diresaun/absensidader/absensidader',$data);
    }
   
    public function show($id = null)
    {
        
    }

    
    public function new()
    {
        $data = [
            'title' => 'Absensi Sistema',
            'show' => ' Aumenta Absensi Diresaun Dader ANCT-TL',
        ];
        return view('diresaun/absensidader/aumentaabsensidader',$data);
    }
    
    public function create()
    {
        $data_tama = $this->request->getPost('data_tama');
        $kodeabsensi = $this->request->getPost('kodeabsensi');
        $horas_tama = $this->request->getPost('horas_tama');
        $presente = $this->request->getPost('presente');
        $alpha = $this->request->getPost('alpha');
        // $horas =  horas();
        if ($horas_tama == '08:00' || $horas_tama == '08:01' || $horas_tama == '08:02' || $horas_tama == '08:03'
        || $horas_tama == '08:04' || $horas_tama == '08:05' || $horas_tama == '08:06' || $horas_tama == '08:07'
        || $horas_tama == '08:08' || $horas_tama == '08:09' || $horas_tama == '08:10' || $horas_tama == '08:11'
        || $horas_tama == '08:12' || $horas_tama == '08:13' || $horas_tama == '08:14' || $horas_tama == '08:15'
        || $horas_tama == '08:16' || $horas_tama == '08:17' || $horas_tama == '08:18' || $horas_tama == '08:19'
        || $horas_tama == '08:20' || $horas_tama == '08:21' || $horas_tama == '08:22' || $horas_tama == '08:23'
        || $horas_tama == '08:24' || $horas_tama == '08:25' || $horas_tama == '08:26' || $horas_tama == '08:27'
        || $horas_tama == '08:28' || $horas_tama == '08:29' || $horas_tama == '08:30') {
            echo $presente = 1;
        }else {
            echo $alpha = 1;
        }
        
        $data = [
            'diresaun'          =>helperDiresaun()->id_diresaun,
            'data_tama'         =>$data_tama,
            'horas_tama'        =>$horas_tama,
            'presente'          =>$presente,
            'alpha'             =>$alpha,
            'absensi_diresaun'  =>'Dader',
            'kodeabsensi'       =>$kodeabsensi
        ];
        

        $this->absensi->insert($data);
        return redirect()->to(base_url('absensiloronloron'))->with('success','Aumenta Tiha Ona Dados Foun');
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

