<?php 
function helperDiretor()
{
    $db   = \Config\Database::connect();

    $builder = $db->table('akundiretor');
    $builder->select('*');
    $builder->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento','regulamento', 'left');
    $builder->where('id_diretor', session('id_diretor'));
    $query = $builder->get()->getRow(); 
    return $query; 
}

function helperDiresaun()
{
    $db = \Config\Database::connect();
    $builder = $db->table('akundiresaun');
    $builder->select('*');
    $builder->join('regulamento_sistema', 'akundiresaun.regulamento_diresaun = regulamento_sistema.id_regulamento', 'regulamento', 'left');
    $builder->where('id_diresaun', session('id_diresaun'));
    $query = $builder->get()->getRow();
    return $query;
}

function Tetum()
{
    $session = \Config\Services::session();
    $tetum = $session->get('homemediaancttl/Tetum');

    return $tetum;
}
function Portuguesa()
{
    $session = \Config\Services::session();
    $tetum = $session->get('homemediaancttl/Portuguesa');

    return $tetum;
}
function dataNarativa()
{
    $db = \Config\Database::connect();
    $builder = $db->table('relatorio_narativa');
    $builder->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
    'regulamento', 'left');
    $builder->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
    'regulamento', 'left');
    $builder->where('deleted_at =', null);
    $builder->where('aktivo_relatorio =', '0');
    $query = $builder->countAllResults();
    return $query; 
}
function dataNarativaDiresaun()
{
    $db = \Config\Database::connect();
    $data = helperDiresaun()->naran_kompleto_diresaun; 
    $builder = $db->table('relatorio_narativa');
    $builder->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
    'regulamento', 'left');
    $builder->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
    'regulamento', 'naran_kompleto_diresaun', 'left');
    $builder->where('kode_relatorio =', null);
    $builder->where('aktivo_relatorio =', '0');
    $builder->where('naran_kompleto_diresaun =', $data);
    $query = $builder->countAllResults();
    return $query; 
}
function dataMedia()
{
    $db = \Config\Database::connect();
    $builder = $db->table('media_anct_tl');
    $builder->where('aktivo_media =', null);
    $builder->where('kode_media =', '0');
    $query = $builder->countAllResults();
    return $query; 
}
function dataTabaku()
{
    $db = \Config\Database::connect();
    $builder = $db->table('media_tabaku');
    $builder->where('aktivo_media =', null);
    $builder->where('kode_media =', '0');
    $query = $builder->countAllResults();
    return $query; 
}
?>