<?php

namespace App\Controllers;

use App\Models\ModelSalarioDiresaunAncttl;
use App\Models\ModelTotalSaldoAncttl;

class Homediresaun extends BaseController
{
    protected $helpers = ['antltl'];
    protected $totalsaldo;
    protected $salario;
    public function __construct()
    {
        $this->totalsaldo = new ModelTotalSaldoAncttl();
        $this->salario = new ModelSalarioDiresaunAncttl();
    }
    public function index(): string
    {
        return view('diresaun/homediresaun/homediresaun');
    }

    public function totalsaldoancttl()
    {
        $saldo = $this->totalsaldo->orderBy('id_saldo', 'DESC')->findAll();
        $data = [
            'title' => 'Administrasaun No Finansas ANCT-TL',
            'show' => 'Total Saldo ANCT-TL',
            'saldo' => $saldo
        ];

        return view('diresaun/administrasaun/totalsaldoancttl/totalsaldoancttl', $data);
    }
    public function selectsalario()
    {
        $postData = $this->request->getPost();
        $data = $this->salario->selectsaldo($postData);
        echo json_encode($data);
    }
}
