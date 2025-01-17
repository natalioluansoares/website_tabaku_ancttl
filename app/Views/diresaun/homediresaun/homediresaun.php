<?= $this->extend('TemplateDiresaun/headerdiresaun')?>
<?= $this->section('title'); ?>
<title>Home Diresaun&mdash; ANCT-TL</title>
<?= $this->endSection() ?>
<?= $this->section('content');?>
<section class="section">
    <div class="section-header">
    <h1>Dashboard</h1>
    </div>
      <div class="section-body">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                      10
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>News</h4>
                    </div>
                    <div class="card-body">
                      42
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                      1,201
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                      47
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="card m-b-30">
                      <div class="card-body">

                          <div class="row">

                              <div id="calendar" class="col-xl-12 col-lg-12 col-md-12"></div>

                          </div>
                          <!-- end row -->

                      </div>
                  </div>
              </div> <!-- end col -->
          </div> <!-- end row -->
    </section>
<?= $this->endSection();?>