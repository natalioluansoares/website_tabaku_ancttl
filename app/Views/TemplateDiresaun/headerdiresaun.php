
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?= $this->renderSection('title'); ?>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">

  <link href="<?= base_url(); ?>/template/assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  
  <!-- fontawesome -->
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">


  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/selectric/public/selectric.css">
  <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/chocolat/dist/css/chocolat.css">

  <!-- Template CSS -->
  <link href="<?= base_url()?>template/assets/css/fullcalendar.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url()?>template/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>template/assets/css/video.css">
  <link rel="stylesheet" href="<?= base_url()?>template/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <?php if (session()->regulamento_diresaun == 2) :?>
      <div class="navbar-bg" style="background-color: lightgreen;"></div>
      <?php endif; ?>
      <?php if (session()->regulamento_diresaun == 3) :?>
      <div class="navbar-bg" style="background-color: cornflowerblue;"></div>
      <?php endif; ?>
      <?php if (session()->regulamento_diresaun == 4) :?>
      <div class="navbar-bg" style="background-color: lightskyblue;"></div>
      <?php endif; ?>
      <?php if (session()->regulamento_diresaun == 5) :?>
      <div class="navbar-bg" style="background-color: goldenrod;"></div>
      <?php endif; ?>

      <?php if (session()->regulamento_diresaun == 6) :?>
      <div class="navbar-bg" style="background-color: red;"></div>
      <?php endif; ?>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button> -->
            <?php if (session()->regulamento_diresaun == 2) :?>
              <h6 style="color: white;"><strong>ALIANSA NASIONAL CONTROLO TABAKU(ADMINISTRASAUN)</strong></h6>
            <?php endif; ?>
            <?php if (session()->regulamento_diresaun == 3) :?>
              <h6 style="color: white;"><strong>ALIANSA NASIONAL CONTROLO TABAKU(THE UNION)</strong></h6>
            <?php endif; ?>
            <?php if (session()->regulamento_diresaun == 4) :?>
              <h6 style="color: white;"><strong>ALIANSA NASIONAL CONTROLO TABAKU(ADVOKASIA)</strong></h6>
            <?php endif; ?>
            <?php if (session()->regulamento_diresaun == 5) :?>
              <h6 style="color: white;"><strong>ALIANSA NASIONAL CONTROLO TABAKU(KAMPANHA)</strong></h6>
            <?php endif; ?>
            <?php if (session()->regulamento_diresaun == 6) :?>
              <h6 style="color: white;"><strong>ALIANSA NASIONAL CONTROLO TABAKU(MEDIA)</strong></h6>
            <?php endif; ?>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= base_url()?>template/assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= base_url()?>template/assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="<?= base_url()?>template/assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" title="Relatorio Narativa" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i>
        <small class="text-danger"><strong><?= dataNarativaDiresaun('relatorio_narativa') ?></strong></small></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Relatorio Narativa</div>
              <?php 
                  $this->db = \Config\Database::connect();
                  $data = helperDiresaun()->naran_kompleto_diresaun; 
                  $builder = $this->db->table('relatorio_narativa');
                  $builder->join('regulamento_sistema', 'relatorio_narativa.diresaun_narativa = regulamento_sistema.id_regulamento', 
                  'regulamento', 'left');
                  $builder->join('akundiresaun', 'regulamento_sistema.id_regulamento = akundiresaun.regulamento_diresaun',
                    'regulamento', 'naran_kompleto_diresaun','left');
                  $query   = $builder->where('naran_kompleto_diresaun =', $data)->where('kode_relatorio =', null)->where('aktivo_relatorio =', '0')->get()->getResult();
              ?>
              <div class="dropdown-list-content dropdown-list-message">
                <?php
                    $jumlah_data = count($query);
                    if ($jumlah_data > 0 )
                { ?>
                <?php foreach($query as $narativa):?>
                <div class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('uploads/fotodiresaun/'.$narativa->foto_diresaun)?>" style="width: 50px;" class="rounded-circle">
                    <!-- <div class="is-online"></div> -->
                  </div>
                  <div class="dropdown-item-desc">
                    <b><?= $narativa->regulamento?></b>
                    <p><?= $narativa->naran_kompleto_diresaun?></p>
                    <div class="time"><?= $narativa->data ?><sub class="text-danger">(<?= $narativa->horas ?>)</sub></div>
                    <form action="<?= base_url('relatorionarativa/aktivorelatorio')?>" method="post" autocomplete="off">
                      <!-- <input type="hidden" name="_method" value="DELETE"> -->
                      <?= csrf_field(); ?>
                      <input type="hidden" name="id_narativa" class="form-control" value="<?=$narativa->id_narativa?>">
                      <input type="hidden" name="aktivo_relatorio" class="form-control" value="1">
                      <button type="submit" class="btn btn-primary"  title="Detail Relatorio Narativa"><small>Detail</small></button>
                    </form>
                  </div>
                </div>
                <?php endforeach;?>
                <?php }else{ ?>
                <center>
                    <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Relatorio Narativa Seidauk Tama</span>
                </center>
                <?php } ?> 
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" title="Media ANCTTL" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i>
            <small class="text-danger"><strong><?= dataMedia('media_anct_tl') ?></strong></small></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Media ANCTTL
              </div>
              <?php 
                  $this->db = \Config\Database::connect();
                  $builder = $this->db->table('media_anct_tl');
                  $query   = $builder->where('aktivo_media =', null)->where('kode_media =', '0')->get()->getResult();
              ?>
              <div class="dropdown-list-content dropdown-list-message" style="overflow-y: scroll;">
                <?php
                    $jumlah_data = count($query);
                    if ($jumlah_data > 0 )
                { ?>
                <?php foreach($query as $media):?>
                <a href="<?= base_url('detailmedia/'.$media->id_media)?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('uploads/fotoancttl/'.$media->foto);?>" style="width: 50px;" class="rounded-circle">
                    <!-- <div class="is-online"></div> -->
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Media ANCTTL</b>
                    <p><strong>Topiko</strong></p>
                    <small><?= $media->topiko ?></small>
                    <p><?= $media->naran_intervista?></p>
                    <div class="time"><?= $media->data ?></div>
                  </div>
                </a>
                <?php endforeach;?>
                <?php }else{ ?>
                <center>
                    <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Media ANCTTL Seidauk Tama</span>
                </center>
                <?php } ?> 
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" title="Media Tabaku" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i>
            <small class="text-danger"><strong><?= dataTabaku('media_anct_tl') ?></strong></small></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Media Tabaku
              </div>
              <?php 
                  $this->db = \Config\Database::connect();
                  $builder = $this->db->table('media_tabaku');
                  $query   = $builder->where('aktivo_media =', null)->where('kode_media =', '0')->get()->getResult();
              ?>
              <div class="dropdown-list-content dropdown-list-message" style="overflow-y: scroll;">
                <?php
                    $jumlah_data = count($query);
                    if ($jumlah_data > 0 )
                { ?>
                <?php foreach($query as $media):?>
                <a href="<?= base_url('tabakudiresaun/detail/'.$media->id_tabaku)?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?= base_url('uploads/fototabaku/'.$media->foto);?>" style="width: 50px;" class="rounded-circle">
                    <!-- <div class="is-online"></div> -->
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Media Tabaku</b>
                    <p><strong>Topiko</strong></p>
                    <small><?= $media->topiko ?></small>
                    <p><?= $media->naran_intervista?></p>
                    <div class="time"><?= $media->data ?></div>
                  </div>
                </a>
                <?php endforeach;?>
                <?php }else{ ?>
                <center>
                    <span class="badge bg-danger"><i class="fas fa-info-circle"></i>Media Tabaku Seidauk Tama</span>
                </center>
                <?php } ?> 
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url()?>template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= helperDiresaun()->naran_kompleto_diresaun?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <?php
                    date_default_timezone_set("Asia/Dili");
                ?>
             
              <?php if (session()->regulamento_diresaun == 2) : ?> 
              <div class="dropdown-title">Horas :<span id="jam"></span> TL</div>
              <a href="<?= base_url('profilediresaun') ?>" class="dropdown-item has-icon" title="<?= helperDiresaun()->naran_kompleto_diresaun; ?>">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?= base_url('absensiloronloron')?>" class="dropdown-item has-icon" title="Absensi Dader">
                <i class="fa fa-solid fa-book"></i> Absensi Dader
              </a>
              <a href="<?= base_url('absensilokraik')?>" class="dropdown-item has-icon" title="Absensi Lokraik">
                <i class="fa fa-solid fa-folder"></i> Absensi Lokraik
              </a>
              <a href="<?= base_url('absensilisensa')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Absensi Lisensa
              </a>
              <a href="<?= base_url('mediaancttl')?>" class="dropdown-item has-icon" title="Media ANCT-TL">
                <i class="fa fa-solid fa-file"></i> Media ANCT-TL
              </a>
              <a href="<?= base_url('tabakudiresaun')?>" class="dropdown-item has-icon" title="Media Tabaku">
                <i class="fa fa-solid fa-book-open"></i> Media Tabaku
              </a>
              <div class="dropdown-divider"></div>
                <a href="<?= base_url('logoutadministrasaunanct') ?>" class="dropdown-item has-icon text-danger" title="Logout Diresaun">
                  <i class="fas fa-sign-out-alt"></i> Logout
              <?php endif; ?>

              <?php if (session()->regulamento_diresaun == 3) : ?>
              
              <div class="dropdown-title">Horas :<span id="jam"></span> TL</div>
              <a href="<?= base_url('profilediresaun') ?>" class="dropdown-item has-icon" title="<?= helperDiresaun()->naran_kompleto_diresaun; ?>">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?= base_url('absensiloronloron')?>" class="dropdown-item has-icon" title="Absensi Dader">
                <i class="fa fa-solid fa-book"></i> Absensi Dader
              </a>
              <a href="<?= base_url('absensilokraik')?>" class="dropdown-item has-icon" title="Absensi Lokraik">
                <i class="fa fa-solid fa-folder"></i> Absensi Lokraik
              </a>
               <a href="<?= base_url('absensilisensa')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Absensi Lisensa
              </a>
              <a href="<?= base_url('mediaancttl')?>" class="dropdown-item has-icon" title="Media ANCT-TL">
                <i class="fa fa-solid fa-file"></i> Media ANCT-TL
              </a>
                <a href="<?= base_url('logouttheunionanct') ?>" class="dropdown-item has-icon text-danger" title="Logout Diresaun">
                  <i class="fas fa-sign-out-alt"></i> Logout
              <?php endif; ?>

              <?php if (session()->regulamento_diresaun == 4) : ?>
              <div class="dropdown-title">Horas :<span id="jam"></span> TL</div>
              <a href="<?= base_url('profilediresaun') ?>" class="dropdown-item has-icon" title="<?= helperDiresaun()->naran_kompleto_diresaun; ?>">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?= base_url('absensiloronloron')?>" class="dropdown-item has-icon" title="Absensi Dader">
                <i class="fa fa-solid fa-book"></i> Absensi Dader
              </a>
              <a href="<?= base_url('absensilokraik')?>" class="dropdown-item has-icon" title="Absensi Lokraik">
                <i class="fa fa-solid fa-folder"></i> Absensi Lokraik
              </a>
               <a href="<?= base_url('absensilisensa')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Absensi Lisensa
              </a>
              <a href="<?= base_url('mediaancttl')?>" class="dropdown-item has-icon" title="Media ANCT-TL">
                <i class="fa fa-solid fa-file"></i> Media ANCT-TL
              </a>
                <a href="<?= base_url('logoutadvokasiaanct') ?>" class="dropdown-item has-icon text-danger" title="Logout Diresaun">
                  <i class="fas fa-sign-out-alt"></i> Logout
              <?php endif; ?>

              <?php if (session()->regulamento_diresaun == 5) : ?>
              <div class="dropdown-title">Horas :<span id="jam"></span> TL</div>
              <a href="<?= base_url('profilediresaun') ?>" class="dropdown-item has-icon" title="<?= helperDiresaun()->naran_kompleto_diresaun; ?>">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?= base_url('absensiloronloron')?>" class="dropdown-item has-icon" title="Absensi Dader">
                <i class="fa fa-solid fa-book"></i> Absensi Dader
              </a>
              <a href="<?= base_url('absensilokraik')?>" class="dropdown-item has-icon" title="Absensi Lokraik">
                <i class="fa fa-solid fa-folder"></i> Absensi Lokraik
              </a>
               <a href="<?= base_url('absensilisensa')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Absensi Lisensa
              </a>
              <a href="<?= base_url('mediaancttl')?>" class="dropdown-item has-icon" title="Media ANCT-TL">
                <i class="fa fa-solid fa-file"></i> Media ANCT-TL
              </a>
                <a href="<?= base_url('logoutkampanhaanct') ?>" class="dropdown-item has-icon text-danger" title="Logout Diresaun">
                  <i class="fas fa-sign-out-alt"></i> Logout
              <?php endif; ?>

              <?php if (session()->regulamento_diresaun == 6) : ?>
              <div class="dropdown-title">Horas :<span id="jam"></span> TL</div>
              <a href="<?= base_url('profilediresaun') ?>" class="dropdown-item has-icon" title="<?= helperDiresaun()->naran_kompleto_diresaun; ?>">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="<?= base_url('absensiloronloron')?>" class="dropdown-item has-icon" title="Absensi Dader">
                <i class="fa fa-solid fa-book"></i> Absensi Dader
              </a>
              <a href="<?= base_url('absensilokraik')?>" class="dropdown-item has-icon" title="Absensi Lokraik">
                <i class="fa fa-solid fa-folder"></i> Absensi Lokraik
              </a>
               <a href="<?= base_url('absensilisensa')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Absensi Lisensa
              </a>
               <a href="<?= base_url('channelyoutube')?>" class="dropdown-item has-icon" title="Absensi Lisensa">
                <i class="fa fa-solid fa-folder-open"></i> Link Media
              </a>
                <a href="<?= base_url('logoutmediaanct') ?>" class="dropdown-item has-icon text-danger" title="Logout Diresaun">
                  <i class="fas fa-sign-out-alt"></i> Logout
              <?php endif; ?>

              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <?php if (session()->regulamento_diresaun==2) :?>
          <div class="sidebar-brand">
            <a href="">Administrasaun</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ADM</a>
          </div>
          <?php endif; ?>

          <?php if (session()->regulamento_diresaun==3) :?>
          <div class="sidebar-brand">
            <a href="">The Union</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">UNION</a>
          </div>
          <?php endif; ?>

          <?php if (session()->regulamento_diresaun==4) :?>
          <div class="sidebar-brand">
            <a href="">Advokasia</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ADMO</a>
          </div>
          <?php endif; ?>

          <?php if (session()->regulamento_diresaun==5) :?>
          <div class="sidebar-brand">
            <a href="">Kampanha</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KATRE</a>
          </div>
          <?php endif; ?>
          <?php if (session()->regulamento_diresaun==6) :?>
          <div class="sidebar-brand">
            <a href="">Media ANCTTL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MEDIA</a>
          </div>
          <?php endif; ?>
          <ul class="sidebar-menu">
            <?= $this->include('TemplateDiresaun/sidebardiresaun') ?>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
      <?= $this->renderSection('content');?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyrancttl &copy; <div class="bullet"></div>By <a href="<?=base_url('English/English/homemediaancttl') ?>" target="_blank">Media Aliansa Nasional Controlo Tabaku Timor Leste</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->

  <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>
  <!-- Data Table -->
  <script src="<?= base_url()?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  
  <!-- JS Libraies -->
<script src="<?= base_url() ?>template/assets/datatables/dataTables.buttons.min.js"></script>
<!-- <script src="<?= base_url() ?>template/assets/datatables/buttons.bootstrap4.min.js"></script> -->
<script src="<?= base_url() ?>template/assets/datatables/jszip.min.js"></script>
<!-- <script src="<?= base_url() ?>template/assets/datatables/pdfmake.min.js"></script> -->

<!-- Responsive examples -->
  <!-- Template JS File -->
  <script src="<?= base_url()?>template/assets/js/scripts.js"></script>
  <script src="<?= base_url()?>template/assets/js/custom.js"></script>

  
  <!-- ckeditor -->
  <!-- <script src="<?= base_url(); ?>template/assets/ckeditor5/ckeditor.js"></script> -->
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script> -->

  <script src="<?= base_url()?>/template/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="<?= base_url()?>/template/node_modules/codemirror/lib/codemirror.js"></script>
  <script src="<?= base_url()?>/template/node_modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?= base_url()?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
  <script src="<?= base_url()?>template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  
  <!-- Page Specific JS File -->
  <script src="<?= base_url()?>template/assets/js/moment.min.js"></script>
  <script src='<?= base_url()?>template/assets/js/fullcalendar.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <script src="<?= base_url()?>template/assets/js/jquery-ui.min.js"></script>
  <!-- <script src="<?= base_url()?>template/node_modules/jquery-ui-dist/jquery-ui.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> -->
    <!-- <script>
      let theEditor;
      ClassicEditor
    .create( document.querySelector( '#topiko' )) 
    .catch( error => {
        console.log( error )
    } );
    function getDataFromTheEditor(){
      return theEditor.getData();
    } -->
    </script>
   <!-- <script type='text/javascript'>
  $(document).ready(function() {

    $("#saldo").autocomplete({
        source: function(request, response) {
            // Fetch data
            $.ajax({
                url: "<?= base_url('homediresaun/select') ?>",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        select: function(event, ui) {
            // Set selection
            $('#saldo').val(ui.item.label); // display the selected text
            $('#total').val(ui.item.value); // save selected id to input
            
            return false;
        },
        focus: function(event, ui) {
            $("#saldo").val(ui.item.label);
            $("#total").val(ui.item.value);
            return false;
        },
    });

});
</script>  -->
  <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>

    <script>
      $(document).ready(function() {
      var site_url = '<?= base_url()?>'
      var calendar = $('#calendar').fullCalendar({
      header: {
            left : 'prev, next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
          },
          height:580,
          editable:true,
          events:site_url + "/event",
          displayEventTime:false,
          selectable:true,
          selectHelper:true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {

            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                $.ajax({
                    url: site_url + "eventAjax",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    type: "POST",
                    success: function(data) {
                        displayMessage("Event Created Successfully");

                        calendar.fullCalendar('renderEvent', {
                            id: data.id,
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        }, true);

                        calendar.fullCalendar('unselect');
                    }
                });
            }
        },

        eventDrop: function(event, delta) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

            $.ajax({
                url: site_url + '/eventAjax',
                data: {
                    title: event.title,
                    start: start,
                    end: end,
                    id: event.id,
                    type: 'update'
                },
                type: "POST",
                success: function(response) {

                    displayMessage("Event Updated Successfully");
                }
            });
        },
        eventClick: function(event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: site_url + '/eventAjax',
                    data: {
                        id: event.id,
                        type: 'delete'
                    },
                    success: function(response) {

                        calendar.fullCalendar('removeEvents', event.id);
                        displayMessage("Event Deleted Successfully");
                    }
                });
            }
        }

    });

});

function displayMessage(message) {
    toastr.success(message, 'Event');
}
    </script>
</body>
</html>
