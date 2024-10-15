<?php
namespace App\Controllers;
class Misaunvisaunmediaancttl extends BaseController
{
    protected $helpers = ['antltl'];
    public function en(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'English')->get()->getResult();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'English')->get()->getResult();
        $data =[
            'misaunvisaun'  => $misaunvisaun,
            'historia'      => $historia,
        ];
        return view('mediaancttl/misaunvisaun/misaunvisaun' , $data);
    }
    public function in(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Indonesia')->get()->getResult();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Indonesia')->get()->getResult();
        $data =[
            'misaunvisaun'  => $misaunvisaun,
            'historia'      => $historia,
        ];
        return view('mediaancttl/misaunvisaun/misaunvisaun' , $data);
    }
    public function por(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Portuguesa')->get()->getResult();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Portuguesa')->get()->getResult();
        $data =[
            'misaunvisaun'  => $misaunvisaun,
            'historia'      => $historia,
        ];
        return view('mediaancttl/misaunvisaun/misaunvisaun' , $data);
    }
    public function te(): string
    {
        $historia = $this->db->table('historia_anct_tl')->where('lingua_historia =', 'Tetum')->get()->getResult();
        $misaunvisaun = $this->db->table('misaun_visaun')->where('lingua_misaun_visaun =', 'Tetum')->get()->getResult();
        $data =[
            'misaunvisaun'  => $misaunvisaun,
            'historia'      => $historia,
        ];
        return view('mediaancttl/misaunvisaun/misaunvisaun' , $data);
    }
}
