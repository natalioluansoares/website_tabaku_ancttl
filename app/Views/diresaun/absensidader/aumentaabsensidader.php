<?= $this->extend('TemplateDiresaun/headerdiresaun') ?>

<?= $this->section('title'); ?>
<title>Aumenta Absensi&mdash; Dader</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
    <h1><?= $title; ?></h1>
    </div>
    <div class="section-body">
        <?php 

            $fulan      = date('m');
            $tinan      = date('Y');
            $absensidiresaun   = $fulan.$tinan;

        ?>
        <div class="row">
            <div class="col-12 col-md-12">
                <?php $errors = session()->getFlashdata('errors'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4><?= $show;?></h4>
                    </div>
                    <?php if (helperDiresaun()->aktivo_servisu == 1) { ?>
                    <div class="card-body">
                    <form action="<?= base_url('absensiloronloron')?>" method="post" autocomplete="off">
                     <?= csrf_field(); ?>
                        <div class="form-group">
                        <label for="diresaun">Naran Kompleto *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="diresaun" id="diresaun" value="<?= helperDiresaun()->naran_kompleto_diresaun?>" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="data_tama">Data Absensi *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="date" name="data_tama" id="data_tama" value="<?= date('Y-m-d')?>" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="horas_tama">Horas Absensi *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <?php
                                date_default_timezone_set("Asia/Dili");
                            ?>
                            <input type="text" name="horas_tama" id="horas_tama" value="<?= date('H:i'); ?>" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="kodeabsensi">Kode Absensi *</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            </div>
                            <input type="text" name="kodeabsensi" id="kodeabsensi" value="<?=  $absensidiresaun; ?>" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                        </div>
                        <div class="input-group">
                            <input type="hidden" name="presente" id="kodeabsensi" value="" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="hidden" name="alpha" id="kodeabsensi" value="" 
                            class="form-control phone-number <?=isset($errors['diresaun']) ? 'is-invalid' : null ?>" 
                            placeholder="" readonly>
                            <div class="invalid-feedback">
                                <?=isset($errors['diresaun']) ?  $errors['diresaun'] : null ?>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-solid fa-user-plus"></i></button>
                        <a href="<?= base_url('absensiloronloron');?>" class="btn btn-info mb-3"><i class="fas fa-sharp fa-regular fa-backward"></i></a>
                        </div>
                    </div>
                    </form>
                    <?php }else{?>
                        <center class="mb-4"><br><br>
                        <span class="badge bg-danger"><i class="fas fa-info-circle"></i> Data Masih Kosong,
                        Silahkan input data kehadiran Pada  bulan dan tahun yang anda pilih</span>
                        </center>
                    <?php }?>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>