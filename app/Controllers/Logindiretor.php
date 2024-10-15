<?php

namespace App\Controllers;

class Logindiretor extends BaseController
{
    public function index(): string
    {
        return view('auth/logindiretor/logindiretor');
    }

    public function logindiretor()
    {
        if (session('id_diretor')) {
            return redirect()->to(base_url('home'));
        }
        return view('auth/logindiretor/logindiretor');
    }

    public function processologindiretor()
    {
         $data = $this->request->getPost();
        $query = $this->db->table('akundiretor')->getWhere(['naran_kompleto'=>$data['naran_kompleto']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->regulamento == 1) {
                if ($user->valido == 1) {
                    if (password_verify($data['senha'], $user->password)) {
                        $params = ['id_diretor' => $user->id_diretor,
                                    'regulamento'  =>$user->regulamento
                                ];
                        session()->set($params);
                        return redirect()->to(site_url('home'));
                    }else {
                        return redirect()->back()->with('error','Password Sei Sala');
                    }
                }else {
                    return redirect()->back()->with('error','Akun Seidauk Aktiva..! Ajuda Kontakto Admin'); 
                }
            }else {
                return redirect()->back()->with('error','Ne Laos Ita Nia Akun..!');
            }
        }else{
            return redirect()->back()->with('error','Ita Nia Naran La los..! Hatama Naran Seluk');
        }
    }

    public function logout()
    {
        session()->destroy('id_diretor');
        return redirect()->to(site_url('diretor'));

    }
}
