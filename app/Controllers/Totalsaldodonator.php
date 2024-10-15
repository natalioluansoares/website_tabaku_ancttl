<?php

namespace App\Controllers;

use App\Models\ModelSaldoDonatorAncttl;
use CodeIgniter\RESTful\ResourceController;

class Totalsaldodonator extends ResourceController
{
    protected $saldodonator;
    protected $db;
     protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->saldodonator = new ModelSaldoDonatorAncttl();
        $this->db = \Config\Database::connect();
    }
    
    public function index()
    {
         $donator = $this->saldodonator->saldodonator();
         $data = [
            'title'  => 'Saldo Donator',
            'show'   => 'Saldo Donator ANCTTL',
            'donator'   => $donator
        ];
        return view('diretor/administrasaun/totalsaldodonator/totalsaldodonator', $data);
    }

    
    public function new()
    {
        $donator = $this->saldodonator->onlyDeleted()->findAll();
        $data = [
            'title'  => 'Saldo Donator',
            'show'   => 'Hamos Saldo Donator ANCTTL',
            'donator'   => $donator
        ];
        return view('diretor/administrasaun/totalsaldodonator/hamostotalsaldodonator', $data);
    }


    
    public function edit($id = null)
    {
        if ($id !=null) {
            $this->db->table('total_saldo_donator')
            ->set('deleted_at',null,true)
            ->where('id_saldo_donator',$id)
            ->update();
            $totalosandonator = $this->db->table('total_saldo_donator')->getWhere(['id_saldo_donator'=> $id])->getRow();
            $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $totalosandonator->total_saldo_donator])->getRow();
            $osan = [
                'total_saldo' =>$totalosan->total_saldo + $totalosandonator->saldo_tama_donator
            ];
            $this->db->table('total_saldo')->where(['id_saldo'=>$totalosandonator->total_saldo_donator])->update($osan);
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('totalsaldodonator'))->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->to(site_url('totalsaldodonator/new'))->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }

    public function permanente($id = null)
    {
         if ($id != null) {
            $this->saldodonator->delete($id, true);
            return redirect()->to(site_url('totalsaldodonator/new'))->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->saldodonator->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('totalsaldodonator/new'))->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->to(site_url('totalsaldodonator/new'))->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
}
