<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAbsensiDiresaun extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'absensi';
    protected $primaryKey       = 'id_absensi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['diresaun', 'data_tama', 'horas_tama', 'kodeabsensi',
    'absensi_diresaun', 'presente', 'alpha', 'lisensa'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    
public function absensi_dader_diretor()
{
    if ((isset($_GET['tinan']) && $_GET['tinan']!='')|| (isset($_GET['fulan']) && $_GET['fulan']!='')){

            $fulan              = $_GET['fulan'];
            $tinan              = $_GET['tinan'];
            $absensidiresaun   = $fulan.$tinan;
        }else{

            $fulan      = date('m');
            $tinan      = date('Y');
            $absensidiresaun   = $fulan.$tinan;
        }
    $this->join('akundiresaun', 'absensi.diresaun = akundiresaun.id_diresaun', 
    'naran_kompleto_diresaun', 'left');
    $this->where('absensi_diresaun =', 'Dader' );
    $this->where('kodeabsensi =', $absensidiresaun );
    $this->orderBy('id_absensi', 'DESC');
    $query = $this->findAll();
    return $query;
}

public function absensi_lokraik_diretor()
{
    $this->join('akundiresaun', 'absensi.diresaun = akundiresaun.id_diresaun', 
    'naran_kompleto_diresaun', 'left');
    $this->where('absensi_diresaun =', 'Dader' );
    $this->orderBy('id_absensi', 'DESC');
    $query = $this->findAll();
    return $query;
}

public function absensi_dader_diresaun()
{
    $data = helperDiresaun()->naran_kompleto_diresaun;
    if ((isset($_GET['tinan']) && $_GET['tinan']!='')|| (isset($_GET['fulan']) && $_GET['fulan']!='')){

            $fulan              = $_GET['fulan'];
            $tinan              = $_GET['tinan'];
            $absensidiresaun   = $fulan.$tinan;
        }else{

            $fulan      = date('m');
            $tinan      = date('Y');
            $absensidiresaun   = $fulan.$tinan;
        }
    $this->join('akundiresaun', 'absensi.diresaun = akundiresaun.id_diresaun', 
    'naran_kompleto_diresaun', 'left');
    $this->where('absensi_diresaun =', 'Dader' );
    $this->where('naran_kompleto_diresaun =', $data );
    $this->where('kodeabsensi =', $absensidiresaun );
    $this->orderBy('id_absensi', 'DESC');
    $query = $this->findAll();
    return $query;
}
public function absensi_lokraik_diresaun()
{
    $data = helperDiresaun()->naran_kompleto_diresaun;
    if ((isset($_GET['tinan']) && $_GET['tinan']!='')|| (isset($_GET['fulan']) && $_GET['fulan']!='')){

            $fulan              = $_GET['fulan'];
            $tinan              = $_GET['tinan'];
            $absensidiresaun   = $fulan.$tinan;
        }else{

            $fulan      = date('m');
            $tinan      = date('Y');
            $absensidiresaun   = $fulan.$tinan;
        }
    $this->join('akundiresaun', 'absensi.diresaun = akundiresaun.id_diresaun', 
    'naran_kompleto_diresaun', 'left');
    $this->where('absensi_diresaun =', 'Lokraik' );
    $this->where('kodeabsensi =', $absensidiresaun );
    $this->where('naran_kompleto_diresaun =', $data );
    $this->orderBy('id_absensi', 'DESC');
    $query = $this->findAll();
    return $query;
}

}
