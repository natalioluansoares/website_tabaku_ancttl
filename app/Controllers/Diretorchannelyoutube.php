<?php

namespace App\Controllers;

use App\Models\ModelChannelYoutube;
use CodeIgniter\RESTful\ResourceController;

class Diretorchannelyoutube extends ResourceController
{
    protected $link;
    protected $db;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->link = new ModelChannelYoutube();
        $this->db   = \Config\Database::connect();
    }
    public function index()
    {
        $mediasosial  = $this->link->orderBy('id_link','DESC')->findAll();
        $data = [
            'title' => 'Media Sosial',
            'show' => 'Media Sosial ANCT-TL',
            'mediasosial' => $mediasosial,
        ];
        return view('diretor/channelyoutube/channelyoutube',$data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'title' => 'Media Sosial',
            'show' => 'Aumenta Media Sosial ANCT-TL',
        ];
        return view('diretor/channelyoutube/aumentachannelyoutube',$data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $link = $this->request->getPost();
        $sistema = $this->link->insert($link);
        if (!$sistema) {
            return redirect()->back()->withInput()->with('errors', $this->link->errors());
        }else{
            return redirect()->to(base_url('diretorchannelyoutube'))->with('success','Aumenta Tiha Ona Dados Foun');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $mediasosial  = $this->link->orderBy('id_link','DESC')->where('id_link', $id)->first();
        $data = [
            'title' => 'Media Sosial',
            'show' => 'Media Sosial ANCT-TL',
            'mediasosial' => $mediasosial,
        ];
        return view('diretor/channelyoutube/trokachannelyoutube',$data);
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
         $update = $this->link->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->link->errors());
        }else {
            return redirect()->to(base_url('diretorchannelyoutube'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    public function hamos()
    {
        $mediasosial = $this->link->onlyDeleted()->orderBy('id_link', 'DESC')->findAll();
        $data = [
            'title' => 'Media Sosial',
            'show' => 'Temporario Media Sosial ANCT-TL',
            'mediasosial' => $mediasosial,
        ];
        return view('diretor/channelyoutube/hamoschannelyoutube',$data);
    }
    
    public function temporario($id = null)
    {
        if ($id !=null) {
            $this->db->table('media_sosial')
            ->set('deleted_at',null,true)
            ->where('id_link',$id)
            ->update();
        }else {

        $this->db->table('media_sosial')
            ->set('deleted_at',null,true)
            ->where('deleted_at is NOT NULL', NULL, FALSE)
            ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('diretorchannelyoutube/hamos'))->with('success','Troka Fila Fali Tiha Ona Dados Temporario Sai Hanesan Dados Permanente');
        }else {
            return redirect()->to(site_url('diretorchannelyoutube/hamos'))->with('error','Troka Dados Temporario Ba Dados Permanente Seidauk Iha');
            # code...
        }
    }
    public function hamos_hotu($id = null)
    {
         if ($id != null) {
            $this->link->delete($id, true);
            return redirect()->to(site_url('diretorchannelyoutube/hamos'))->with('success','Hamos Tiha Ona Dados Temporario');
        }else{
            $this->link->purgeDeleted();
            if ($this->db->affectedRows() > 0) {
                return redirect()->to(site_url('diretorchannelyoutube/hamos'))->with('success','Hamos Hotu Tiha Ona Dados Temporario');
            }else {
                return redirect()->to(site_url('diretorchannelyoutube/hamos'))->with('error','Hamos Dados Temporario Seidauk Iha');
            }
        }
    }
    public function delete($id = null)
    {
        $this->link->where('id_link', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
