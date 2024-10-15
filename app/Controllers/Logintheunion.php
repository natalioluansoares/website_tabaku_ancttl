<?php

namespace App\Controllers;

class Logintheunion extends BaseController
{
    public function index(): string
    {
        return view('auth/logintheunion/logintheunion');
    }

    public function login()
    {
        if (session('id_diresaun')) {
            return redirect()->to(base_url('homediresaun'));
        }
        return view('auth/logintheunion/logintheunion');
    }
    public function processologintheunion()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akundiresaun')->getWhere(['naran_kompleto_diresaun' => $data['naran_kompleto_diresaun']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->regulamento_diresaun == 3) {
                if ($user->valido == 1) {
                    if (password_verify($data['password'], $user->password)) {
                        $params = [
                            'id_diresaun'           => $user->id_diresaun,
                            'regulamento_diresaun'  => $user->regulamento_diresaun
                        ];
                        session()->set($params);
                        return redirect()->to(base_url('homediresaun'));
                    }else {
                         return redirect()->back()->with('error','Password Sei Sala');
                    }
                }else {
                    return redirect()->back()->with('error','Akun Seidauk Aktiva..! Ajuda Kontakto Admin'); 
                }
            }else {
                return redirect()->back()->with('error','Ne Laos Ita Nia Akun..!');
            }
        }else {
             return redirect()->back()->with('error','Ita Nia Naran La los..! Hatama Naran Seluk');
        }
    }

    public function logout()
    {
        session()->destroy('id_diresaun');
        return redirect()->to(site_url('theunion'));
    }
}
