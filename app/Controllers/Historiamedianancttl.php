<?php

namespace App\Controllers;

class Historiamedianancttl extends BaseController
{
    protected $helpers = ['antltl'];
    public function en(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'English')->get()->getResult();
        $data =[
            'historia' => $historia,
        ];
        return view('mediaancttl/historiaancttl/historiaancttl', $data);
    }
    public function in(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Indonesia')->get()->getResult();
        $data =[
            'historia' => $historia,
        ];
        return view('mediaancttl/historiaancttl/historiaancttl', $data);
    }
    public function por(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Portuguesa')->get()->getResult();
        $data =[
            'historia' => $historia,
        ];
        return view('mediaancttl/historiaancttl/historiaancttl', $data);
    }
    public function te(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Tetum')->get()->getResult();
        $data =[
            'historia' => $historia,
        ];
        return view('mediaancttl/historiaancttl/historiaancttl', $data);
    }
}
