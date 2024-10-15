<?php

namespace App\Controllers;

use App\Models\ModelCartaDiretor;
use App\Models\ModelDiretor;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;

class Cartadiretorancttl extends ResourceController
{
    protected $carta;
    protected $diretor;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->carta    = new ModelCartaDiretor();
        $this->diretor  = new ModelDiretor();
        $this->db       = \Config\Database::connect();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Hili Lian Carta Diretor ANCTTL',
        ];
        return view('diretor/cartadiretor/linguacarta', $data);
    }
    public function tetum()
    {
        $carta  = $this->carta->orderBy('id_carta','DESC')->where('lingua =', 'Tetum')->cartadiretor();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Carta Diretor ANCTTL',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/cartadiretor', $data);
    }
    public function portuguesa()
    {
        $carta  = $this->carta->orderBy('id_carta','DESC')->where('lingua =', 'Portuguesa')->cartadiretor();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Carta Diretor ANCTTL',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/cartadiretor', $data);
    }
    public function english()
    {
        $carta  = $this->carta->orderBy('id_carta','DESC')->where('lingua =', 'English')->cartadiretor();
        $data = [
            'title' => 'Director Letter',
            'show' => 'ANCTTL Director Letter',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/cartadiretor', $data);
    }
    public function indonesia()
    {
        $carta  = $this->carta->orderBy('id_carta','DESC')->where('lingua =', 'Indonesia')->cartadiretor();
        $data = [
            'title' => 'Surat Direktur',
            'show' => 'Surat Direktur ANCTTL',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/cartadiretor', $data);
    }

    
    public function detail($id)
    {
        $carta  = $this->carta->where('id_carta', $id)->cartadiretorfirst();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Carta Diretor ANCTTL',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/detailcartadiretor', $data);
    }

   
    public function new()
    {
        $diretor  = $this->diretor->orderBy('id_diretor','DESC')->findAll();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Carta Diretor ANCTTL',
            'diretor' => $diretor,
        ];
        return view('diretor/cartadiretor/aumentacartadiretor', $data);
    }

   public function hamos()
   {
        $carta  = $this->carta->orderBy('id_carta','DESC')->onlyDeleted()->cartadiretor();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Carta Diretor ANCTTL Temporario',
            'carta' => $carta,
        ];
        return view('diretor/cartadiretor/hamoscartadiretor', $data);
   }
    public function create()
    {
        $datacarta  = $this->request->getPost('data_carta');
        $carta      = $this->request->getPost('carta');
        $periode    = $this->request->getPost('periode_carta');
        $profisaun  = $this->request->getPost('profisaun');
        $lingua     = $this->request->getPost('lingua');

        $data = [
            'data_carta' =>$datacarta,
            'carta' =>$carta,
            'periode_carta' =>$periode,
            'profisaun' =>$profisaun,
            'lingua' =>$lingua,
        ];
        $sistema    = $this->carta->insert($data);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->carta->errors());
        }else{
            return redirect()->to(base_url('cartadiretorancttl/lingua/'.$lingua))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    
    public function edit($id = null)
    {
        $diretor  = $this->diretor->orderBy('id_diretor','DESC')->findAll();
        $carta  = $this->carta->where('id_carta', $id)->cartadiretorfirst();
        $data = [
            'title' => 'Carta Diretor',
            'show' => 'Troka Carta Diretor',
            'carta' => $carta,
            'diretor' => $diretor,
        ];
        return view('diretor/cartadiretor/trokacartadiretor', $data);
    }

    
    public function update($id = null)
    {
        $datacarta  = $this->request->getPost('data_carta');
        $carta      = $this->request->getPost('carta');
        $periode    = $this->request->getPost('periode_carta');
        $profisaun  = $this->request->getPost('profisaun');
        $lingua     = $this->request->getPost('lingua');

        $data = [
            'id_carta'      =>$id,
            'data_carta'    =>$datacarta,
            'carta'         =>$carta,
            'periode_carta' =>$periode,
            'profisaun'     =>$profisaun,
            'lingua'        =>$lingua,
        ];
         $update = $this->carta->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->carta->errors());
        }else {
            return redirect()->to(base_url('cartadiretorancttl/lingua/'.$lingua))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('carta_diretor')
            ->set('deleted_at',null,true)
            ->where('id_carta',$id)
            ->update();
        }else {

        $this->db->table('carta_diretor')
            ->set('deleted_at',null,true)
            ->where('deleted_at is NOT NULL', NULL, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->back()->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->back()->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }
    public function hamos_hotu($id = null)
    {
         if ($id != null) {
            $this->carta->delete($id, true);
            return redirect()->back()->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->carta->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->back()->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->back()->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
    public function delete($id = null)
    {
        $this->carta->where('id_carta', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
