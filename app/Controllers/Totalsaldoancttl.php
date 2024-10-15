<?php

namespace App\Controllers;

use App\Models\ModelTotalSaldoAncttl;
use CodeIgniter\RESTful\ResourceController;

class Totalsaldoancttl extends ResourceController
{
    protected $totalsaldo;
    protected $helpers = ['antltl'];
    public function __construct()
    {
       $this->totalsaldo = new ModelTotalSaldoAncttl(); 
    }
    public function index()
    {
        $saldo = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Total Saldo ANCT-TL',
            'saldo' => $saldo
        ];

        return view('diretor/administrasaun/saldotamaancttl/totalsaldoancttl', $data);
    }

   
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Aumenta Saldo ANCT-TL',
        ];

        return view('diretor/administrasaun/saldotamaancttl/aumentatotalsaldoancttl', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $saldo = $this->request->getPost();
        $sistema = $this->totalsaldo->insert($saldo);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->totalsaldo->errors());
        }else{
            return redirect()->to(base_url('totalsaldoancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $totalsaldo  = $this->totalsaldo->where('id_saldo', $id)->first();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Troka Saldo ANCT-TL',
            'totalsaldo' => $totalsaldo,
        ];
        return view('diretor/administrasaun/saldotamaancttl/trokatotalsaldoancttl', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
         $data = $this->request->getPost();
         $update = $this->totalsaldo->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->totalsaldo->errors());
        }else {
            return redirect()->to(base_url('totalsaldoancttl'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
