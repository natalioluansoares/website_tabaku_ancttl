<?php

namespace App\Controllers;

use App\Models\ModelAkunAncttl;
use App\Models\ModelRegulamentoSistema;
use CodeIgniter\RESTful\ResourceController;

class Akunancttl extends ResourceController
{
    protected $akunancttl;
    protected $regulamento;
    protected $db;
    protected $helpers = ['antltl'];
   public function __construct()
   {
        $this->akunancttl = new ModelAkunAncttl();
        $this->regulamento = new ModelRegulamentoSistema();
        $this->db   = \Config\Database::connect();
   }
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->akunancttl->paginationakundiresaun(4, $keyword);
        $data ['title']= 'Sistema Diresaun';
        $data ['show']= 'Akun Diresaun ANCTTL';
        $data ['keyword']= $keyword;

        if (null !== $this->request->getGet('filter-data')) {
        $data['akunancttl'] = $this->akunancttl->filterdiresaun();
        if ($data['akunancttl'] == null) {
            return redirect()->to(base_url('akunancttl'))->with('error', 'Data Nebe Mak Ita Boot Buka Laiha!.. Favor Bele Buka Fali Data Seluk');
        }
        }else{
        $keyword = $this->request->getGet('keyword');
        // print_r($keyword);
        $data = $this->akunancttl->paginationakundiresaun(4, $keyword);
        $data ['title']= 'Sistema Diresaun';
        $data ['show']= 'Akun Diresaun ANCTTL';
        $data ['keyword']= $keyword;
        }
        return view('diretor/dadosregistrasaun/dadosregistrasaun', $data);
    }

    public function show($id = null)
    {
        //
    }

   
    public function new()
    {
        $regulamento = $this->regulamento->orderBy('id_regulamento', 'DESC')->where('id_regulamento !=', 1)->findAll();
        
        $data = [
            'title' => 'Sistem Diresaun',
            'show' => 'Aumenta Akun Diresaun',
            'regulamento' => $regulamento,
        ];
        return view('diretor/dadosregistrasaun/aumentadadosregistrasaun', $data);
    }

    
    public function create()
    {
        $foto                       = $this->request->getFile('foto_diresaun');
        $datafoto                   = $foto->getRandomName();
        $password                   = $this->request->getVar('password');
        $conf                       = $this->request->getVar('confpassword');
        $naran_kompleto_diresaun    = $this->request->getVar('naran_kompleto_diresaun');
        $email                      = $this->request->getVar('email');
        if ($password == null) {
            return redirect()->back()->with('error','Dados Password Sei Mamuk');
        }elseif ($password !=  $conf) {
            return redirect()->back()->with('error','Dados Confirmasaun Password La hanesa Ho Password');
        }elseif ($datafoto == null) {
            return redirect()->back()->with('error','Foto Diretor Sei Mamuk');
        }elseif ($naran_kompleto_diresaun == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
        }elseif ($this->akunancttl->cek_naran($naran_kompleto_diresaun)->resultID->num_rows > 0) {
            return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
        }elseif ($email == null) {
            return redirect()->back()->with('error','Dados Email Sei Mamuk');
        }elseif ($this->akunancttl->cek_email($email)->resultID->num_rows > 0) {
            return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
        }else {
            $data = [
                'naran_kompleto_diresaun'       => $this->request->getPost('naran_kompleto_diresaun'),
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'password'                      => password_hash($password, PASSWORD_BCRYPT),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $this->request->getPost('email'),
                'regulamento_diresaun'          => $this->request->getPost('regulamento_diresaun'),
                'foto_diresaun'                 =>$datafoto,
                'aktivo_servisu'                => 1,
                'valido'                        => 1
            ];
           
            $insert = $this->akunancttl->insert($data);
            if (!$insert) {
                return redirect()->back()->withInput()->with('errors',$this->akunancttl->errors());
            }else {
                $foto->move('uploads/fotodiresaun/', $datafoto);
                return redirect()->to(base_url('akunancttl'))->with('success','Aumenta Tiha Ona Dados Foun');
            }
        }
    }

    
    public function troka($id = null)
    {
        $model = new ModelAkunAncttl();
        $diresaun = $model->PilihBlogDiretor($id)->getRow();
        $regulamento  = $this->regulamento->orderBy('id_regulamento','DESC')->where('id_regulamento !=', 1)->findAll();
        $data = [
            'title'         => 'Akun Diresaun',
            'show'          => 'Troka Akun Diretor',
            'regulamento'   => $regulamento,
            'diresaun'      => $diresaun,
        ];
        return view('diretor/dadosregistrasaun/trokadadosregistrasaun', $data);

    }

    public function diresaun()
    {
        $model = new ModelAkunAncttl();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('akunancttl');
        }
        $id = $this->request->getPost('id_diresaun');
        $validation = $this->validate([
             'foto_diresaun'      => 'uploaded[foto_diresaun]|mime_in[foto_diresaun,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_diresaun,16384]'
        ]);
 
        if ($validation == FALSE) {
            $naran_kompleto_diresaun = $this->request->getPost('naran_kompleto_diresaun');
            $email = $this->request->getPost('email');
            if ($this->akunancttl->cek_naran($naran_kompleto_diresaun, $id)->resultID->num_rows > 0){
                return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
            }elseif ($naran_kompleto_diresaun == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
            }elseif ($this->akunancttl->cek_email($email, $id)->resultID->num_rows > 0) {
                return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
            }elseif ($email == null) {
                return redirect()->back()->with('error','Dados Email Sei Mamuk');
            }
           $data = [
                'naran_kompleto_diresaun'       => $naran_kompleto_diresaun,
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $email,
                'regulamento_diresaun'          => $this->request->getPost('regulamento_diresaun'),
                'aktivo_servisu'                => 1,
                'valido'                        => 1
            ];
        } else {
        $dt = $model->PilihBlogDiretor($id)->getRow();
        $gambar = $dt->foto_diresaun;
        $path = 'uploads/fotodiresaun/';
        @unlink($path.$gambar);
           $upload = $this->request->getFile('foto_diresaun');
           $datafoto = $upload->getRandomName();
            $upload->move(WRITEPATH . '../public/uploads/fotodiresaun/', $datafoto);
             $naran_kompleto_diresaun = $this->request->getVar('naran_kompleto_diresaun');
             $email = $this->request->getPost('email');
            if ($this->akunancttl->cek_naran($naran_kompleto_diresaun, $id)->resultID->num_rows > 0){
                return redirect()->back()->with('error','Naran Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Naran Seluk');
            }elseif ($naran_kompleto_diresaun == null) {
            return redirect()->back()->with('error','Dados Naran Sei Mamuk');
            }elseif ($this->akunancttl->cek_email($email, $id)->resultID->num_rows > 0) {
                return redirect()->back()->with('error','Email Nebe Ita Hatama Iha Tiha Ona...Favor Hatama Email Seluk');
            
            }elseif ($email == null) {
                return redirect()->back()->with('error','Dados Email Sei Mamuk');
            
            }
        $data = [
                'naran_kompleto_diresaun'       => $naran_kompleto_diresaun,
                'numero_eleitural'              => $this->request->getPost('numero_eleitural'),
                'sexo'                          => $this->request->getPost('sexo'),
                'status_servisu'                => $this->request->getPost('status_servisu'),
                'fatin_moris'                   => $this->request->getPost('fatin_moris'),
                'loron_moris'                   => $this->request->getPost('loron_moris'),
                'numero_whatsapp'               => $this->request->getPost('numero_whatsapp'),
                'email'                         => $email,
                'regulamento_diresaun'          => $this->request->getPost('regulamento_diresaun'),
                'foto_diresaun'                 =>$datafoto,
                'aktivo_servisu'                => 1,
                'valido'                        => 1
            ];
        }
        $narativa = $model->edit_data($id,$data);
        if (!$narativa) {
            return redirect()->back()->withInput()->with('errors', $this->akunancttl->errors());
        }else {
                # code...
                return redirect()->to(base_url('akunancttl'))->with('success', 'Troka Tiha Ona Dados Foun');
        }
        
    }
    public function edit($id = null)
    {
        $diresaun  = $this->akunancttl->orderBy('id_diresaun','DESC')->first();
        $data = [
            'title' => 'Password Diresaun',
            'show' => 'Troka Password Diresaun',
            'diresaun' => $diresaun,
        ];
        return view('diretor/dadosregistrasaun/passworddiresaun', $data);
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
                'id_diresaun'=>$id,
                'password' => password_hash($password, PASSWORD_BCRYPT),
            ];
           
            $update = $this->akunancttl->update($id, $data);
   
           if ($update) {
               return redirect()->to(base_url('akunancttl'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
           } 
        }
    }

    
    public function delete($id = null)
    {
        $data = [
            'valido' =>0,
             'status_servisu' =>'La Aktivo',
        ];
        $this->akunancttl->update($id, $data);
        $this->akunancttl->where('id_diresaun', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }

    public function hamos()
    {
        $data = 
        [
            'title' => 'Akun Diresaun Temporario',
            'show' => 'Hamos Dados Sistema Diresaun Temporario',
            'akunancttl' => $this->akunancttl->onlyDeleted()->akunancttl()
        ];
        return view('diretor/dadosregistrasaun/hamosdadosregistrasaun',$data);
    }
    
    public function temporario()
    {
        $id = $this->request->getPost('id_diresaun');
        $data = [
            'id_diresaun'=>$id,
            'valido' =>1,
            'status_servisu' =>'Aktivo',
            'deleted_at'=>null
        ];
        $this->akunancttl->update($id, $data);
        return redirect()->to(base_url('akunancttl'))->with('success', 'Dados Temporario Transforma Ona Ba Dados Permanente');
    }

    public function hamos_hotu($id = null)
    {
        $this->db->table('akundiresaun')->where('id_diresaun', $id)->delete();
        return redirect()->back()->with('success', 'Dados Temporario Transforma Ona Ba Dados Permanente');
    }

    public function aktivoancttl()
    {
        $akunancttl = $this->akunancttl->orderBy('id_diresaun', 'DESC')->akunancttl();
        
        $data = [
            'title' => 'Sistem Diresaun ',
            'show' => 'Aktivo Sistema Diresaun',
            'akunancttl' => $akunancttl,
        ];
        return view('diretor/dadosregistrasaun/aktivoregistrasaun', $data);
    }
}
