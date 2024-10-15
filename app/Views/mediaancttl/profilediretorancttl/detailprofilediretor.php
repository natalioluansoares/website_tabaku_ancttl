<?= $this->extend('templatenotisia/header') ?>
<?= $this->section('content') ?>
 <div class="row">
    <div class="col-lg-12">
        <div class="card" style="width: 100%;">
            <div class="carousel-item active">
                        <img class="d-block img-fluid" src="<?= base_url('assets')?>/ancttl/lider.jpg" alt="First slide"style="width: 100%; height:510px ;">
                        <div class="banner-text" aling="center">
                            <h4>ALian Nasional Controlo Tabaku</h4>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                            <p>Ita Tenki KOntrolu Ita Nia Saude Tamba Saude Importante Tebes Iha Ita Nia Moris</p>
                        </div>
                    </div>
        </div>
    </div>
</div><br>
<div class="container">
    <h4 class="page-title"><strong><i class="fas fa fa-book mr-2"></i><?php echo lang('homemediaancttl.profileDiretor');?></strong></h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30" style="background-color: lightblue;">
                <div class="card-body">
                    <div class="media m-b-30">
                        <div class="media-body">
                            <a class="image-popup-no-margins rounded" href="<?=base_url('uploads/fotodiretor/'.$profile->foto_diretor)?>">
                                <img class="img-responsive mr-3 rounded mb-2" src="<?= base_url('uploads/fotodiretor/'.$profile->foto_diretor); ?>" style="width:340px;" >
                            </a>
                            <?php if ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Mane') { ?>
                                <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                <p><strong>Sexo<b class="mr-5"></b></strong>:Masculino</p>
                                <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                <strong><hr></strong>
                                <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                    <p><strong>Sexo<b class="mr-5"></b></strong>:Masculino</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Indonesia' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Nama<b class="mr-4"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profesi<b class="mr-2"></b></strong>   :Direktur ANCTTL</p>
                                    <p><strong>Jenis K<b class="mr-3"></b></strong>:Laki-Laki</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>:Masih Aktif</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Name<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profession<b class="mr-2"></b></strong>:ANCTTL Director</p>
                                    <p><strong>Gender<b class="mr-4"></b></strong> :Male</p>
                                    <p><strong>Status<b class="mr-4"></b></strong> :<b style="color: white;">Active</b></p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                            <?php }?>
                            <?php if ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Feto') { ?>
                                <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                <p><strong>Sexo<b class="mr-5"></b></strong>:Femenino</p>
                                <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                <strong><hr></strong>
                                <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                    <p><strong>Sexo<b class="mr-5"></b></strong>:Mane</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>  :Sei Servisu</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Indonesia' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Nama<b class="mr-4"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profesi<b class="mr-2"></b></strong>   :Direktur ANCTTL</p>
                                    <p><strong>Jenis K<b class="mr-3"></b></strong>:Perempuan</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>:Masih Aktif</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Name<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profession<b class="mr-2"></b></strong>:ANCTTL Director</p>
                                    <p><strong>Gender<b class="mr-4"></b></strong> :Female</p>
                                    <p><strong>Status<b class="mr-4"></b></strong> :<b style="color: white;">Active</b></p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                            <?php }?>
                            <?php if ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Mane') { ?>
                                <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                <p><strong>Sexo<b class="mr-5"></b></strong>:Masculino</p>
                                <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                <strong><hr></strong>
                                <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                    <p><strong>Sexo<b class="mr-5"></b></strong>:Masculino</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Indonesia' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Nama<b class="mr-4"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profesi<b class="mr-2"></b></strong>   :Direktur ANCTTL</p>
                                    <p><strong>Jenis K<b class="mr-3"></b></strong>:Laki-Laki</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>:Masih Aktif</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Mane') {  ?>
                                    <p><strong>Name<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profession<b class="mr-2"></b></strong>:ANCTTL Director</p>
                                    <p><strong>Gender<b class="mr-4"></b></strong> :Male</p>
                                    <p><strong>Status<b class="mr-4"></b></strong> :<b style="color: red;">No Active</b></p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                            <?php }?>
                            <?php if ($profile->lingua_profile == 'Portuguesa' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Feto') { ?>
                                <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                <p><strong>Sexo<b class="mr-5"></b></strong>:Femenino</p>
                                <p><strong>Status<b class="mr-4"></b></strong>  :Ainda Ativo</p>
                                <strong><hr></strong>
                                <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Tetum' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Nome<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profissão<b class="mr-2"></b></strong>  :Diretor Da ANCTTL</p>
                                    <p><strong>Sexo<b class="mr-5"></b></strong>:Mane</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>  :Sei Servisu</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'Indonesia' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Nama<b class="mr-4"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profesi<b class="mr-2"></b></strong>   :Direktur ANCTTL</p>
                                    <p><strong>Jenis K<b class="mr-3"></b></strong>:Perempuan</p>
                                    <p><strong>Status<b class="mr-4"></b></strong>:Tidak Masih Aktif</p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                                <?php }elseif ($profile->lingua_profile == 'English' && $profile->status_servisu == 'La Aktivo' && $profile->sexo == 'Feto') {  ?>
                                    <p><strong>Name<b class="mr-5"></b></strong>:<?=$profile->naran_kompleto ?></p>
                                    <p><strong>Profession<b class="mr-2"></b></strong>:ANCTTL Director</p>
                                    <p><strong>Gender<b class="mr-4"></b></strong> :Female</p>
                                    <p><strong>Status<b class="mr-4"></b></strong> :<b style="color: red;">No Active</b></p>
                                    <strong><hr></strong>
                                    <?= $profile->profile ?> <a href="<?= base_url(lang('homemediaancttl.homeUrlProfileDiretor')) ?>">Fila Fali Home</a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
<?= $this->endSection() ?>