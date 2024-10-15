
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url('assets')?>/images/favicon.ico">

        <link href="<?= base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets')?>/css/letra.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets')?>/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets')?>/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets')?>/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets')?>/plugins/morris/morris.css" rel="stylesheet">
         

    </head>


    <body style="background-color: azure">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Annex-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="<?= base_url('assets')?>/images/logo-sm.png" alt="" height="22" class="logo-small">
                            <img src="<?= base_url('assets')?>/images/logo.png" alt="" height="22" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">
                            
                            <!-- language-->
                            <li class="list-inline-item dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <?php echo lang('homemediaancttl.homeLingua');?><img src="<?= base_url('assets')?>/images/flags/logo.jpg" class="ml-2" height="16" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right language-switch">
                                    <a class="dropdown-item" href="<?= base_url('Tetum/Tetum/homemediaancttl') ?>">
                                    <img src="<?= base_url('assets')?>/images/flags/timor_leste_flag.jpg" alt="" height="16"/>
                                    <span>Tetum</span></a>
                                    <a class="dropdown-item" href="<?= base_url('English/English/homemediaancttl') ?>">
                                    <img src="<?= base_url('assets')?>/images/flags/us_flag.jpg" alt="" height="16"/>
                                    <span>English</span></a>
                                    <a class="dropdown-item" href="<?= base_url('Portuguesa/Portuguesa/homemediaancttl') ?>">
                                    <img src="<?= base_url('assets')?>/images/flags/portugal_flag.jpg" alt="" height="16"/>
                                    <span>Portuguesa</span></a>
                                    <a class="dropdown-item" href="<?= base_url('Indonesia/Indonesia/homemediaancttl') ?>">
                                    <img src="<?= base_url('assets')?>/images/flags/indonesia_flag.jpg" alt="" height="16"/>
                                    <span>Indonesia</span></a>
                                </div>
                            </li>
                            <!-- notification-->
                            <?php 
                                $this->db = \Config\Database::connect();
                                $builder = $this->db->table('akundiretor');
                                $builder->join('regulamento_sistema', 'akundiretor.regulamento = regulamento_sistema.id_regulamento', 
                                'regulamento', 'left');
                                $query   = $builder->where('deleted_at =', null)->get()->getResult();
                                // return $query;
                            ?>
                            <li class="list-inline-item dropdown notification-list">
                                <?php foreach($query as $whatsapp): ?>
                                <a class="nav-link dropdown-toggle arrow-none waves-effect"
                                href="https://web.whatsapp.com/send?phone='
                                .<?= $whatsapp->numero_whatsapp; ?>.'
                                &text= %0a
                                Assalamaualaikum..Kami dari admin sudah perbaiki kata sandi anda,*Semoga dapat beruntung* dengan data berikut,%0a
                                Jika ada malasah bisa%0a 
                                hubungi kami..%0a
                                Tolong anda dapat membantu%0a
                                kami untuk membagi%0a
                                transaksi barang Ini %0a
                                untuk sesama,%0a
                                terimakasih" title="Kirim Ke Whatsapp" target="_blank">
                                    <h4 title="Whatsapp" style="color: limegreen;"><i class="fas fa fa-whatsapp"></i></h4>
                                    <!-- <span class="badge badge-success noti-icon-badge">21</span> -->
                                </a>
                                <?php endforeach; ?>
                            </li>
                            <!-- User-->
                            <!-- <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url('assets')?>/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li> -->
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
             <?= $this->include('templatenotisia/sidebar') ?>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <?= $this->renderSection('content') ?>
        </div>

        <div class="wrapper">
            <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="row">
                                    <?php 
                                        $this->db = \Config\Database::connect();
                                        $builder = $this->db->table('media_sosial');
                                        $query   = $builder->where('deleted_at =', null)->get()->getResult();
                                    ?>
                                    <div class="col-lg-3">
                                        <!-- <img src="<?= base_url('assets')?>/images/flags/logo.jpg" class="ml-2" height="40" alt=""/> -->
                                        <h5 class="mb-2 mb-md-4">Media ANCTTL</h5>
                                        <ul class="list-inline" style="color: aliceblue;">
                                            <?php foreach($query as $media): ?>
                                            <li class="list-inline-item"><a class="btn mb-2" style="<?=$media->link_style ?>;color: aliceblue;" 
                                            title="<?=$media->link_title ?>(<?= $media->link_media ?>)"
                                            target="_blank" href="<?= $media->link_media ?>"><i class="<?=$media->link_coding ?>"></i></a> </li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mb-2 mb-md-4">Media ANCTTL</h5>
                                        <form class="form-horizontal" role="form">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                            </div>

                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">With textarea</span>
                                                </div>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </form>                                    
                                    </div>
                                    <div class="col-lg-5">
                                        <h5 class="mb-2 mb-md-4">Media ANCTTL</h5>
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ion-email"></i></span>
                                                </div>
                                                <input type="email" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Email">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa fa-clock-o"></i></span>
                                                </div>
                                                <?php use CodeIgniter\I18n\Time;
                                                    $time = Time::now('Asia/Dili', 'en_US')
                                                ?>
                                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" value="<?= $time?>" readonly>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa fa-paper-plane"></i></span>
                                                </div>
                                                <textarea class="form-control" aria-label="With textarea" placeholder="Messagem"></textarea>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    <i class="fas fa fa-plus"></i>
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    <i class="fas fa fa-undo"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
        <!-- end wrapper -->
        
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2018 Annex by Mannatthemes.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?= base_url('assets')?>/js/jquery.min.js"></script>
        <script src="<?= base_url('assets')?>/js/popper.min.js"></script>
        <script src="<?= base_url('assets')?>/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets')?>/js/modernizr.min.js"></script>
        <script src="<?= base_url('assets')?>/js/waves.js"></script>
        <!-- <script src="<?= base_url('assets')?>/js/script.js"></script> -->
        <script src="<?= base_url('assets')?>/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url('assets')?>/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url('assets')?>/js/jquery.scrollTo.min.js"></script>

        <script src="<?= base_url('assets')?>/plugins/skycons/skycons.min.js"></script>
        <script src="<?= base_url('assets')?>/plugins/raphael/raphael-min.js"></script>

        
         <!-- Magnific popup -->
        <script src="<?= base_url('assets')?>/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url('assets')?>/pages/lightbox.js"></script>

        <!-- App js -->
        <script src="<?= base_url('assets')?>/js/app.js"></script>

    </body>
</html>