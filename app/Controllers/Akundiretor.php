<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelDiretor;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;
use PhpParser\Node\Expr\FuncCall;

class Akundiretor extends ResourceController
{
    protected $helpers = ['antltl'];
    protected $akundiretor;
    protected $akundiresaun;
    protected $regulamento;
    protected $db;

    public function __construct()
    {
        $this->akundiretor = new ModelDiretor();
        $this->akundiresaun = new ModelAkunAncttl();
        $this->regulamento = new ModelRegulamentoSistema();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        $akun  = $this->akundiretor->orderBy('id_diretor','DESC')->akundiretor();
        $akundiresaun = $this->akundiresaun->akunancttl();
        $data = [
            'title' => 'Akun Diretor',
            'show' => 'Akun Diretor',
            'akundiresaun' => $akundiresaun,
            'akun' => $akun,
        ];
        return view('diretor/akundiretor/akundiretor', $data);
    }

    
    public function show($id = null)
    {
        //
    }

    
    public function new()
    {
        $regulamento  = $this->regulamento->orderBy('id_regulamento','DESC')->where('id_regulamento =', 1)->findAll();
        $data = [
            'title' => 'Akun Diretor',
            'show' => 'Aumenta Akun Diretor',
            'regulamento' => $regulamento,
        ];
        return view('diretor/akundiretor/aumentaakundiretor', $data);
    }

    
    public function create()
    {
        $foto                   = $this->request->getFile('foto_diretor');
        $datafoto               = $foto->getRandomName();
        $password               = $this->request->getVar('password');
        $conf                   = $this->request->getVar('confpassword');
        $naran_kompleto         = $this->request->getVar('naran_kompleto');
        $email                  = $this->request->getVar('email');
        if ($password == null) {
            return redirect()->back()->with('error','Dados Password Sei Mamuk');
        }elseif ($password !=  $conf) {
            return redirect()->back()->with('error','Dados Confirmasaun Password La hanesa Ho Password');
        }elseif ($datafoto == null) {
            return redirect()->back()->with('error','Foto Diretor Sei Mamuk');
        }elseif ($naran_kompleto == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
        }elseif ($this->akundiretor->cek_naran($naran_kompleto)->resultID->num_rows > 0) {
            return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
        }elseif ($email == null) {
            return redirect()->back()->with('error','Dados Email Sei Mamuk');
        }elseif ($this->akundiretor->cek_email($email)->resultID->num_rows > 0) {
            return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
        }
        else {
            # code...
            $data = [
                'naran_kompleto'                => $this->request->getPost('email'),
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'password'                      => password_hash($password, PASSWORD_BCRYPT),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $this->request->getPost('email'),
                'foto_diretor'                  =>$datafoto,
                'regulamento'                   => $this->request->getPost('regulamento'),
                'valido'                        => 1
            ];
           
            $akundiretor = $this->akundiretor->insert($data);
            if (!$akundiretor) {
                return redirect()->back()->withInput()->with('errors',$this->akundiretor->errors());
            }else {
                $foto->move('uploads/fotodiretor/', $datafoto);
                return redirect()->to(base_url('akundiretor'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
        
    }

    
    public function troka($id)
    {
        $model = new ModelDiretor();
        $akun = $model->PilihBlogDiretor($id)->getRow();
        $regulamento  = $this->regulamento->orderBy('id_regulamento','DESC')->where('id_regulamento =', 1)->findAll();
        $data = [
            'title'         => 'Akun Diretor',
            'show'          => 'Aumenta Akun Diretor',
            'regulamento'   => $regulamento,
            'akun'          => $akun,
        ];
        return view('diretor/akundiretor/trokaakundiretor', $data);
    }
    public function troka_password($id)
    {
        $model = new ModelDiretor();
        $akun = $model->PilihBlogDiretor($id)->getRow();
        $regulamento  = $this->regulamento->orderBy('id_regulamento','DESC')->where('id_regulamento =', 1)->findAll();
        $data = [
            'title'         => 'Akun Diretor',
            'show'          => 'Aumenta Akun Diretor',
            'regulamento'   => $regulamento,
            'akun'          => $akun,
        ];
        return view('diretor/akundiretor/passworddiretor', $data);
    }

   
    public function diretor()
    {
        $model = new ModelDiretor();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('relatorionarativa');
        }
        $id = $this->request->getPost('id_diretor');
        $validation = $this->validate([
             'foto_diretor'      => 'uploaded[foto_diretor]|mime_in[foto_diretor,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_diretor,16384]'
        ]);
 
        if ($validation == FALSE) {
            $naran_kompleto = $this->request->getPost('naran_kompleto');
            $email = $this->request->getPost('email');
            if ($this->akundiretor->cek_naran($naran_kompleto, $id)->resultID->num_rows > 0){
                return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
            }elseif ($naran_kompleto == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
            }elseif ($this->akundiretor->cek_email($email, $id)->resultID->num_rows > 0) {
                return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
            }elseif ($email == null) {
                return redirect()->back()->with('error','Dados Email Sei Mamuk');
            
            }
           $data = [
                'naran_kompleto'                =>$this->request->getPost('naran_kompleto'),
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $this->request->getPost('email'),
                'regulamento'                   => $this->request->getPost('regulamento'),
                'valido'                        => 1
            ];
        } else {
        $dt = $model->PilihBlogDiretor($id)->getRow();
        $gambar = $dt->foto_diretor;
        $path = 'uploads/fotodiretor/';
        @unlink($path.$gambar);
           $upload = $this->request->getFile('foto_diretor');
           $datafoto = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public/uploads/fotodiretor/', $datafoto);
             $naran_kompleto = $this->request->getVar('naran_kompleto');
             $email = $this->request->getPost('email');
            if ($this->akundiretor->cek_naran($naran_kompleto, $id)->resultID->num_rows > 0){
                return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
            }elseif ($naran_kompleto == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
            }elseif ($this->akundiretor->cek_email($email, $id)->resultID->num_rows > 0) {
                return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
            
            }elseif ($email == null) {
                return redirect()->back()->with('error','Dados Email Sei Mamuk');
            
            }
        $data = [
                'naran_kompleto'                => $naran_kompleto,
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $this->request->getPost('email'),
                'foto_diretor'                  =>$datafoto,
                'regulamento'                   => $this->request->getPost('regulamento'),
                'valido'                        => 1
            ];
        }
        $narativa = $model->edit_data($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->akundiretor->errors());
        }else {
                # code...
                return redirect()->to(base_url('akundiretor'))->with('success', 'Troka Tiha Ona Dados Foun');
        }
        
    }
    public function edit($id = null)
    {
        $diretor  = $this->akundiretor->orderBy('id_diretor','DESC')->first();
        $data = [
            'title' => 'Password Diretor',
            'show' => 'Troka Password Diretor',
            'diretor' => $diretor,
        ];
        return view('diretor/akundiretor/passworddiretor', $data);
    }

    
    public function update($id = null)
    {
        $password = $this->request->getVar('password');
        $conf = $this->request->getVar('confpassword');
        if ($password == null) {
            return redirect()->back()->with('error', 'Dados Password Sei Mamuk');
        }elseif ($password != $conf) {
            # code...
            return redirect()->back()->with('error', 'Dados Password La Hanesan Ho Konfirmasaun Password');
        }else {
            $data = [
                'id_diretor'=>$id,
                'password' => password_hash($password, PASSWORD_BCRYPT),
            ];
           
            $update = $this->akundiretor->update($id, $data);
   
           if ($update) {
               return redirect()->to(base_url('akundiretor'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
           } 
        }
    }
    
    public function delete($id = null)
    {

        $data = [
            'valido' =>0,
             'status_servisu' =>'La Aktivo',
        ];
        $this->akundiretor->update($id, $data);
        $this->akundiretor->where('id_diretor', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos()
    {
        $akun  = $this->akundiretor->orderBy('id_diretor','DESC')->onlyDeleted()->akundiretor();
        $data = [
            'title' => 'Akun Diretor Temporario ',
            'show' => 'Akun Diretor',
            'akun' => $akun,
        ];
        return view('diretor/akundiretor/hamosakundiretor', $data);
    }

    public function temporario()
    {
        $id = $this->request->getPost('id_diretor');
        $data = [
            'id_diretor'=>$id,
            'valido' =>1,
            'status_servisu' =>'Aktivo',
            'deleted_at'=>null
        ];
        $this->akundiretor->update($id, $data);
        return redirect()->to(base_url('akundiretor'))->with('success', 'Dados Temporario Transforma Ona Ba Dados Permanente');
    }
    public function hamos_dados($id)
    {
        $this->db->table('akundiretor')->where('id_diretor', $id)->delete();
        return redirect()->back()->with('success', 'Dados Temporario Transforma Ona Ba Dados Permanente');
    }
}
