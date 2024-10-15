<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelSalarioDiresaunAncttl;
use App\Models\ModelTotalSaldoAncttl;
use CodeIgniter\RESTful\ResourceController;

class Salariodiresaunancttl extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $salario;
    protected $diresaun;
    protected $total;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->salario = new ModelSalarioDiresaunAncttl();
        $this->diresaun = new ModelAkunAncttl();
        $this->total = new ModelTotalSaldoAncttl();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $salario  = $this->salario->salario();
        $data = [
            'title' => 'Salario Diresaun',
            'show' => 'Salario Diresaun ANCT-TL',
            'salario' => $salario,
        ];
        return view('diresaun/saldosai/salariosaldosai/salariosaldosai',$data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $diresaun = $this->diresaun->akunancttl();
        $total = $this->total->findAll();
         $data = [
            'title' => 'Salario ANCT-TL',
            'show' => 'Aumenta Salario ANCT-TL',
            'diresaun' => $diresaun,
            'total' => $total,
        ];
        return view('diresaun/saldosai/salariosaldosai/aumentasalariosaldosai',$data);
    }

    
    public function create()
    {
        $naran_salario          = $this->request->getPost('naran_salario');
        $unit_saldo             = $this->request->getPost('unit_saldo');
        $qty_saldo              = $this->request->getPost('qty_saldo');
        $freq_salario           = $this->request->getPost('freq_salario');
        $kode_aktivo            = $this->request->getPost('kode_aktivo');
        $data_salario           = $this->request->getPost('data_salario');
        $horas_salario          = $this->request->getPost('horas_salario');
        $saldo_ancttl           = $this->request->getPost('saldo_ancttl');
        if ($naran_salario == null) {
            return redirect()->back()->withInput()->with('error','Osan Naran ATu simu Salario Sei Mamuk');
            
        }elseif ($data_salario == null) {
            return redirect()->back()->withInput()->with('error','Osan Data Salario Sei Mamuk');
        }
        else {
            # code...
            $data = [
                'naran_salario'         =>$naran_salario,
                'unit_saldo'            =>$unit_saldo,
                'qty_saldo'             =>$qty_saldo,
                'freq_salario'          =>$freq_salario,
                'kode_aktivo'           =>$kode_aktivo,
                'data_salario'          =>$data_salario,
                'horas_salario'         =>$horas_salario,
                'saldo_ancttl'          =>$saldo_ancttl,
            ];
            $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $data['saldo_ancttl']])->getRow();
            if ($totalosan == null) {
                return redirect()->back()->withInput()->with('error','Osan Salario Diresaun Sei Mamuk');
            }elseif($data['unit_saldo'] == null){
                return redirect()->back()->withInput()->with('error','Osan Salario Diresaun Sei Mamuk');
                
            }elseif ($data['unit_saldo'] > $totalosan->total_saldo) {
                return redirect()->back()->withInput()->with('error','Osan Salario Boot Liu Saldo ANCT-TL');
                # code...
            }else {
                $saldo = [
                'total_saldo' => $totalosan->total_saldo - $data['unit_saldo'],
                ];
                $this->db->table('total_saldo')->where(['id_saldo'=>$data['saldo_ancttl']])->update($saldo);
                $sistema = $this->db->table('salario_anct_tl')->insert($data);
    
                if (!$sistema) {
                    return redirect()->back()->withInput()->with('errors', $this->salario->errors());
                }else{
                    return redirect()->to(base_url('salariodiresaunancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
                }
            }
        }

    }

    
    public function edit($id = null)
    {
        $diresaun = $this->diresaun->akunancttl();
        $salario = $this->salario->where('id_salario', $id)->editsalario();
        $total = $this->total->findAll();
         $data = [
            'title' => 'Salario ANCT-TL',
            'show' => 'Troka Salario ANCT-TL',
            'diresaun' => $diresaun,
            'total' => $total,
            'salari' => $salario,
        ];
        return view('diresaun/saldosai/salariosaldosai/trokasalariosaldosai',$data);
    }

    
    public function update($id = null)
    {
        $naran_salario          = $this->request->getPost('naran_salario');
        $unit_saldo             = $this->request->getPost('unit_saldo');
        $qty_saldo              = $this->request->getPost('qty_saldo');
        $freq_salario           = $this->request->getPost('freq_salario');
        $kode_aktivo            = $this->request->getPost('kode_aktivo');
        $data_salario           = $this->request->getPost('data_salario');
        $horas_salario          = $this->request->getPost('horas_salario');
        $saldo_ancttl           = $this->request->getPost('saldo_ancttl');
        if ($naran_salario == null) {
            return redirect()->back()->withInput()->with('error','Osan Naran ATu simu Salario Sei Mamuk');
            
        }elseif ($data_salario == null) {
            return redirect()->back()->withInput()->with('error','Osan Data Salario Sei Mamuk');
        }
        else {
            # code...
            $data = [
                'id_salario'            =>$id,
                'naran_salario'         =>$naran_salario,
                'qty_saldo'             =>$qty_saldo,
                'freq_salario'          =>$freq_salario,
                'kode_aktivo'           =>$kode_aktivo,
                'data_salario'          =>$data_salario,
                'horas_salario'         =>$horas_salario,
                'saldo_ancttl'          =>$saldo_ancttl,
            ];
            $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $data['saldo_ancttl']])->getRow();
            $salariodiresaun = $this->db->table('salario_anct_tl')->getWhere(['id_salario'=> $id])->getRow();
            if($totalosan == null){
                return redirect()->back()->withInput()->with('error','Osan Naran Atu Simu Salario Sei Mamuk');
                
            }elseif ($unit_saldo > $totalosan->total_saldo) {
                # code...
            }else {
                if ($unit_saldo > $totalosan->total_saldo) {
                    return redirect()->back()->withInput()->with('error','Osan Salario Boot Liu Saldo ANCT-TL');
                }else {
                    $cek_stok=$salariodiresaun->unit_saldo;
                    $cek_new_stok = $cek_stok + $unit_saldo;
                        
                    $this->db->table('salario_anct_tl')->where('id_salario', $id)->set('unit_saldo', $cek_new_stok)->update();
                }

            $saldo = [
                'total_saldo' => $totalosan->total_saldo - $unit_saldo,
                ];
                $this->db->table('total_saldo')->where(['id_saldo'=>$data['saldo_ancttl']])->update($saldo);

            $sistema = $this->db->table('salario_anct_tl')->where(['id_salario'=> $id])->update($data);
                if (!$sistema) {
                    return redirect()->back()->withInput()->with('errors', $this->salario->errors());
                }else{
                    return redirect()->to(base_url('salariodiresaunancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
                }
            }
        }
    }

   
    public function delete($id = null)
    {
        $salariodiresaun = $this->db->table('salario_anct_tl')->getWhere(['id_salario'=> $id])->getRow();
        $totalosan = $this->db->table('total_saldo')->getWhere(['id_saldo'=> $salariodiresaun->saldo_ancttl])->getRow();

        $osan = [
            'total_saldo' =>$totalosan->total_saldo + $salariodiresaun->unit_saldo
        ];
         $this->db->table('total_saldo')->where(['id_saldo'=>$salariodiresaun->saldo_ancttl])->update($osan);


        $this->salario->where('id_salario', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    
}
