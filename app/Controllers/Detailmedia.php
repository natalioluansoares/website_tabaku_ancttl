<?php

namespace App\Controllers;

use App\Models\ModelMediaAncttl;

class Detailmedia extends BaseController
{
   protected $media;
    protected $helpers = ['antltl'];
   public function __construct()
   {
    $this->media = new ModelMediaAncttl();
   }
    public function index($id=null): string
    {
        $media  = $this->media->where('id_media', $id)->first();
        $galeria  = $this->media->galeria($id);
        $multigaleria  = $this->media->multigaleria($id);
        $data = [
            'title'     => 'Sistema Media',
            'show'      => 'Detail Media Diresaun ANCT-TL',
            'media'     => $media,
            'galeria'   => $galeria,
            'multigaleria'   =>$multigaleria,
        ];
        return view('diresaun/mediaancttl/detailmediaancttl', $data);
    }

}
