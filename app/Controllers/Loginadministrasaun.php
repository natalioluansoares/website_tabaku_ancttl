<?php

namespace App\Controllers;

class Loginadministrasaun extends BaseController
{
    public function index(): string
    {
        return view('auth/loginadministrasaun/loginadministrasaun');
    }
    public function login()
    {
        if (session('id_diresaun')) {
            return redirect()->to(base_url('home'));
        }
        return view('auth/loginadministrasaun/loginadministrasaun');
    }

    public function processologinadministrasaun()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('akundiresaun')->getWhere(['naran_kompleto_diresaun'=> $data['naran_kompleto_diresaun']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->regulamento_diresaun == 2) {
                if ($user->valido == 1) {
                    if (password_verify($data['password'], $user->password)) {
                        $params = [
                            'id_diresaun'  => $user->id_diresaun,
                            'regulamento_diresaun'  => $user->regulamento_diresaun,
                        ];
                        session()->set($params);
                        // return redirect()->to(site_url('home'));
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
            return redirect()->back()->with('error','Ita Nia Naran La los..! Ajuda Hatama Naran Seluk');
        }
    }

    public function logout()
    {
        session()->destroy('id_diresaun');
        return redirect()->to(base_url('administrasaun'));

    }
}
