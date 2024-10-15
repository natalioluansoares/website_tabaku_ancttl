<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSaldoTamaAncttl;

class Saldotamaancttl extends BaseController
{
    protected $helpers = ['antltl'];
    protected $saldotama;

    public function __construct()
    {
        $this->saldotama = new ModelSaldoTamaAncttl();
    }
    public function index()
    {
        
    }
}
