<?php

namespace App\Controllers;

use App\Models\ModelAbsensiDiresaun;
use CodeIgniter\RESTful\ResourceController;

class Absensilokraik extends ResourceController
{   
    
    protected $absensi;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->absensi = new ModelAbsensiDiresaun();
    }
    public function index()
    {
        $absensi  = $this->absensi->orderBy('id_absensi','DESC')->absensi_lokraik_diresaun();
        $data = [
            'title' => 'Absensi Sistema',
            'show' => 'Absensi Diresaun Lokraik ANCT-TL',
            'absensi' => $absensi,
        ];
        return view('diresaun/absensilokraik/absensilokraik',$data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $data = [
            'title' => 'Absensi Sistema',
            'show' => ' Aumenta Absensi Diresaun Lokraik ANCT-TL',
        ];
        return view('diresaun/absensilokraik/aumentaabsensilokraik',$data);
    }

    
    public function create()
    {
        $data_tama = $this->request->getPost('data_tama');
        $kodeabsensi = $this->request->getPost('kodeabsensi');
        $horas_tama = $this->request->getPost('horas_tama');
        $presente = $this->request->getPost('presente');
        $alpha = $this->request->getPost('alpha');
        // $horas =  horas();
        if ($horas_tama == '16:45' || $horas_tama == '16:46' || $horas_tama == '16:47' || $horas_tama == '16:48'
        || $horas_tama == '16:49' || $horas_tama == '16:50' || $horas_tama == '16:51' || $horas_tama == '16:52'
        || $horas_tama == '16:53' || $horas_tama == '16:54' || $horas_tama == '16:55' || $horas_tama == '16:56'
        || $horas_tama == '16:57' || $horas_tama == '16:58' || $horas_tama == '16:59' || $horas_tama == '17:00') {
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
            'absensi_diresaun'  =>'Lokraik',
            'kodeabsensi'       =>$kodeabsensi
        ];
        

        $this->absensi->insert($data);
        return redirect()->to(base_url('absensilokraik'))->with('success','Aumenta Tiha Ona Dados Foun');
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
