<?= $this->extend('TemplateDiretor/headerdiretor')?>
<?= $this->section('title'); ?>
<title><?= $show ?>&mdash; Sistema</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">Filter <?= $show; ?></div>
            <div class="card-body">
                <div class="row">
                        <div class="col-lg-6">
                        <form class="form-inline" method="get">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group ml-0">
                                                <input type="date" class="form-control" name="start">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ml-0">
                                                    <input type="date" class="form-control" name="end">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ml-1">
                                                    <button type="submit" class="btn btn-primary" name="filter-data">
                                                        <i class="fas fa-eye"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <table>
                             <thead>
                                 <tr>
                                     <th>
                                         <form action="" method="get" autocomplete="off">
                                             <table>
                                                 <tbody>
                                                     <tr>
                                                         <td>
                                                             <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search" data-width="250">
                                                         </td>
                                                         <td>
                                                             <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                                                         </td>
                                                         <td>
                                                             <a href="<?= base_url('akundiretor/new') ?>" class="btn btn-primary" title="Aumenta Media"><i class="fas fa-plus"></i></a>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </form>
     
                                     </th>
                                 </tr>
                             </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
  <div class="card mb-3" style="background-color: cornflowerblue;">          
    <div class="card-body" >
    <div class="section-body">
        <?php
            $jumlah_data = count($akunancttl);
            if ($jumlah_data > 0 )
            { ?>
        <div class="row">
          <?php
          $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 +(4 * ($page - 1));
          foreach($akunancttl as $k): ?>
            <div class="col-lg-6">
                <div class="card profile-widget">
                  <div class="profile-widget-header gallery">
                    <div class="gallery-item profile-widget-picture" style="width: 130px; height:80px ;" 
                    data-image="<?= base_url('uploads/fotodiresaun/'.$k->foto_diresaun); ?>" data-title="Imagem "></div>
                </div>
                  <div class="profile-widget-description pb-0">
                    <p><strong>Naran <b class="mr-4"></b></strong>:<?= $k->naran_kompleto_diresaun; ?></p>
                    <p><strong>Sexo  <b class="mr-4"></b></strong>  :<?= $k->sexo; ?></p>
                    <p><strong>Status <b class="mr-3"></b></strong> :<?= $k->status_servisu; ?></p>
                    <p><strong>Fatin <b class="mr-4"></b></strong> :<?= $k->fatin_moris; ?></p>
                    <p><strong>Data <b class="mr-4"></b></strong> :<?= $k->loron_moris; ?></p>
                    <p><strong>Diresaun</strong> :<?= $k->regulamento; ?></p>

                  </div>
                  <div class="card-footer text-center pt-0">
                    <a href="<?= base_url('akunancttl/troka/'.$k->id_diresaun)?>" class="btn btn-success">
                      <i class="fas fa-user-plus"></i>
                    </a>
                    <form action="<?= site_url('akunancttl/'.$k->id_diresaun)?>" method="post" autocomplete="off" class="d-inline"
                        onsubmit="return confirm('Ita Boot Hakarak Hamos Dados ?')">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" title="Hamos Akun Diretor"><i class="fas fa-solid fa-trash"></i></button>
                    </form>
                    <a href="<?= base_url('akunancttlhamos');?>" 
                    class="btn btn-dark" title="Troka Dados Temporario"><i class="fa fa-solid fa-eraser"></i></a>
                    <a href="<?= base_url('akunancttl/'.$k->id_diresaun.'/edit')?>" class="btn" style="background-color: darkgrey;">
                      <i class="fas fa-key"></i>
                    </a>
            </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
  <div class="float-left">
      <span>Showing <?=  $no = 1 +(4 * ($page - 1)); ?> to <?= $no-1 ?> of <?= $pager->getTotal()?> Entries </span>
  </div>
  <div class="float-right">
      <?= $pager->links('default','pagination') ?>
  </div>
      <?php }else{ ?>
          <center>
              <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Relatorio Narativa Tinan No Fulan Ida Ne'e Seidauk Hatama,
                No Bele Buka Ralatorio Narativa Iha Tinan No Fulan Seluk....Obrigado !</span>
          </center>
      <?php } ?> 
</section>
<?= $this->endSection();?>