<?php

namespace App\Controllers;

class Profilediresaun extends BaseController
{
    protected $helpers = ['antltl'];
    protected $db;
    public function __construct()
    {
         $this->db   = \Config\Database::connect();
    }
    public function index(): string
    {
        $data['show'] = 'Profile Diresaun ANCT-TL';
        $data['title'] = 'Profile Diresaun';
        return view('diresaun/profilediresaun/profilediresaun', $data);
    }
    public function password(): string
    {
        $data['show'] = 'Passwordmi Diresaun ANCT-TL';
        $data['title'] = 'Password Diresaun';
        return view('diresaun/profilediresaun/trokaprofilediresaun', $data);
    }

    public function trokapassword()
    {
        $password = $this->request->getVar('password');
        $conf = $this->request->getVar('confpassword');
        $id = $this->request->getPost('id_diresaun');
        if ($password == null) {
            return redirect()->back()->with('error', 'Dados Password Sei Mamuk');
        }elseif ($password != $conf) {
            # code...
            return redirect()->back()->with('error', 'Dados Password La Hanesan Ho Konfirmasaun Password');
        }elseif ($id == null) {
            return redirect()->back()->with('error', 'Dados Id Sei Mamuk');
        }
        else {
            $data = [
                'id_diresaun'=>$id,
                'password' => password_hash($password, PASSWORD_BCRYPT),
            ];
           
            $update = $this->db->table('akundiresaun')->where('id_diresaun', $id)->update($data);
   
           if ($update) {
               return redirect()->to(base_url('profilediresaun'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
           } 
        }
    }
}
