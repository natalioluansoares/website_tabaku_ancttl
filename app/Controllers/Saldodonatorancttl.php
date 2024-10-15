<?php

namespace App\Controllers;

use App\Models\ModelSaldoDonatorAncttl;
use App\Models\ModelTotalSaldoAncttl;
use CodeIgniter\RESTful\ResourceController;

class Saldodonatorancttl extends ResourceController
{
    protected $helpers = ['antltl'];
    protected $saldodonator;
    protected $totalsaldo;
    protected $db;
    public function __construct()
    {
        $this->saldodonator = new ModelSaldoDonatorAncttl();
        $this->totalsaldo = new ModelTotalSaldoAncttl();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $saldo = $this->totalsaldo->where('id_saldo !=', 1)->orderBy('id_saldo', 'DESC')->findAll();
        $aliansa = $this->totalsaldo->where('id_saldo =', 1)->orderBy('id_saldo', 'DESC')->first();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Hili Donator',
            'saldo' => $saldo,
            'aliansa' => $aliansa
        ];

        return view('diresaun/administrasaun/saldodonator/detailsaldodonator', $data);     
    }

    public function show($id = null)
    {
        $donator = $this->saldodonator->where('total_saldo_donator', $id)->saldodonator();
             $data = [
                'title'  => 'Saldo Donator',
                'show'   => 'Saldo Instituisaun ANCTTL',
                'donator'   => $donator,
            ];
        if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->where('total_saldo_donator', $id)->filterdonator();
            if (!$filterdonator) {
                return redirect()->to(base_url('saldodonatorancttl/'.$id))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
            $donator = $this->saldodonator->saldodonator();
             $data = [
                'title'  => 'Saldo Donator',
                'show'   => 'Saldo Donator ANCTTL',
                'donator'   => $donator,
                'donator'   => $filterdonator,
            ];
        }
        return view('diresaun/administrasaun/saldodonator/saldodonator', $data);
    }
    public function ancttl($id = null)
    {
        $donator = $this->saldodonator->where('total_saldo_donator', $id)->saldodonator();
             $data = [
                'title'  => 'Saldo Donator',
                'show'   => 'Saldo Donator ANCTTL',
                'donator'   => $donator,
            ];
        if (null !== $this->request->getGet('filter-data')) {
            $filterdonator = $this->saldodonator->where('total_saldo_donator', $id)->filterdonator();
            if (!$filterdonator) {
                return redirect()->to(base_url('saldodonatorancttl/ancttl/'.$id))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
            }
            $donator = $this->saldodonator->saldodonator();
             $data = [
                'title'  => 'Saldo Donator',
                'show'   => 'Saldo Donator ANCTTL',
                'donator'   => $donator,
                'donator'   => $filterdonator,
            ];
        }
        return view('diresaun/administrasaun/saldodonator/saldodonatorancttl', $data);
    }

    public function newancttl()
    {
        $saldo = $this->totalsaldo->where('id_saldo =', 1)->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title'  => 'Saldo Donator',
            'show'   => 'Aumenta Saldo Donator ANCTTL',
            'saldo'   => $saldo
        ];
        return view('diresaun/administrasaun/saldodonator/aumentasaldodonatorancttl', $data);

    }

    public function aumentaancttl()
    {
        $saldo_tama_donator         = $this->request->getPost('saldo_tama_donator');
        $naran_apoia                = $this->request->getPost('naran_apoia');
        $descripsaun_apoia          = $this->request->getPost('descripsaun_apoia');
        $diresaun_donator           = $this->request->getPost('diresaun_donator');
        $total_saldo_donator        = $this->request->getPost('total_saldo_donator');
        $data_osan_tama_donator     = $this->request->getPost('data_osan_tama_donator');
        $horas_osan_tama_donator    = $this->request->getPost('horas_osan_tama_donator');

        $data = [
            'saldo_tama_donator'        =>$saldo_tama_donator,
            'naran_apoia'               =>$naran_apoia,
            'descripsaun_apoia'         =>$descripsaun_apoia,
            'diresaun_donator'          =>$diresaun_donator,
            'total_saldo_donator'       =>$total_saldo_donator,
            'data_osan_tama_donator'    =>$data_osan_tama_donator,
            'horas_osan_tama_donator'   =>$horas_osan_tama_donator,
            'diresaun_donator'          =>helperDiresaun()->id_diresaun,
        ];
        $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $data['total_saldo_donator']])->getRow();
        if ($totalosan == null) {
            return redirect()->back()->withInput()->with('error','Osan Tama Sei Mamuk');
        }else {
            $saldo = [
            'total_saldo' => $totalosan->total_saldo + $data['saldo_tama_donator'],
            ];
            $this->db->table('total_saldo')->where(['id_saldo'=>$data['total_saldo_donator']])->update($saldo);
            $sistema = $this->db->table('total_saldo_donator')->insert($data);

            if (!$sistema) {
                return redirect()->back()->withInput()->with('errors', $this->saldodonator->errors());
            }else{
                return redirect()->to(base_url('saldodonatorancttl/ancttl/'.$total_saldo_donator))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }
    public function new()
    {
        $saldo = $this->totalsaldo->where('id_saldo !=', 1)->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title'  => 'Saldo Donator',
            'show'   => 'Aumenta Saldo Donator',
            'saldo'   => $saldo
        ];
        return view('diresaun/administrasaun/saldodonator/aumentasaldodonator', $data);

    }

    public function create()
    {
        $saldo_tama_donator         = $this->request->getPost('saldo_tama_donator');
        $diresaun_donator           = $this->request->getPost('diresaun_donator');
        $total_saldo_donator        = $this->request->getPost('total_saldo_donator');
        $data_osan_tama_donator     = $this->request->getPost('data_osan_tama_donator');
        $horas_osan_tama_donator    = $this->request->getPost('horas_osan_tama_donator');

        $data = [
            'saldo_tama_donator'        =>$saldo_tama_donator,
            'diresaun_donator'          =>$diresaun_donator,
            'total_saldo_donator'       =>$total_saldo_donator,
            'data_osan_tama_donator'    =>$data_osan_tama_donator,
            'horas_osan_tama_donator'   =>$horas_osan_tama_donator,
            'diresaun_donator'          =>helperDiresaun()->id_diresaun,
        ];
        $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $data['total_saldo_donator']])->getRow();
        if ($totalosan == null) {
            return redirect()->back()->withInput()->with('error','Osan Tama Sei Mamuk');
        }else {
            $saldo = [
            'total_saldo' => $totalosan->total_saldo + $data['saldo_tama_donator'],
            ];
            $this->db->table('total_saldo')->where(['id_saldo'=>$data['total_saldo_donator']])->update($saldo);
            $sistema = $this->db->table('total_saldo_donator')->insert($data);

            if (!$sistema) {
                return redirect()->back()->withInput()->with('errors', $this->saldodonator->errors());
            }else{
                return redirect()->to(base_url('saldodonatorancttl/'.$total_saldo_donator))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
        
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
        $totalosandonator = $this->db->table('total_saldo_donator')->getWhere(['id_saldo_donator'=> $id])->getRow();
        $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $totalosandonator->total_saldo_donator])->getRow();

        $osan = [
            'total_saldo' =>$totalosan->total_saldo - $totalosandonator->saldo_tama_donator
        ];
         $this->db->table('total_saldo')->where(['id_saldo'=>$totalosandonator->total_saldo_donator])->update($osan);


        $this->saldodonator->where('id_saldo_donator', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
