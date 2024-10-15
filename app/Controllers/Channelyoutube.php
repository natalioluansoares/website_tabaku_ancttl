<?php

namespace App\Controllers;

use App\Models\ModelChannelYoutube;
use CodeIgniter\RESTful\ResourceController;

class Channelyoutube extends ResourceController
{
    protected $link;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->link = new ModelChannelYoutube();
    }
    public function index()
    {
        $mediasosial  = $this->link->orderBy('id_link','DESC')->findAll();
        $data = [
            'title' => 'Media Sosial',
            'show' => 'Media Sosial ANCT-TL',
            'mediasosial' => $mediasosial,
        ];
        return view('diresaun/channelyoutube/channelyoutube',$data);
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
        return view('diresaun/channelyoutube/aumentachannelyoutube',$data);
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
            return redirect()->to(base_url('channelyoutube'))->with('success','Aumenta Tiha Ona Dados Foun');
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
        return view('diresaun/channelyoutube/trokachannelyoutube',$data);
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
         $update = $this->link->update($id, $data);

        if (!$update) {
            return redirect()->back()->withInput()->with('errors', $this->link->errors());
        }else {
            return redirect()->to(base_url('channelyoutube'))->with('success', 'Halo Mudansa Tiha Ona Ba Dados');
        }
    }

    
    public function delete($id = null)
    {
        $this->link->where('id_link', $id)->delete();
        return redirect()->back()->with('success', 'Hamos Tiha Ona Dados');
    }
}
