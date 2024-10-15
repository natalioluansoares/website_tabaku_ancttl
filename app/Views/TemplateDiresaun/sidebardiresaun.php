<?php if (session()->regulamento_diresaun == 2) :?>
<li class="menu-header">Dashboard</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun') ?>"><i class="fa fa-solid fa-home"></i><span>Dashboard</span></a></li>
  <li class="menu-header">Absensi Dader</li>
  <li><a class="nav-link" href="<?= base_url('absensiloronloron/new') ?>"><i class="fa fa-solid fa-book"></i><span>Absensi Dader</span></a></li>
  <li class="menu-header">Absensi Lokraik</li>
  <li><a class="nav-link" href="<?= base_url('absensilokraik/new') ?>"><i class="fa fa-solid fa-folder"></i><span>Absensi Lokraik</span></a></li>
  <li class="menu-header">Total Saldo ANCT-TL</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun/totalsaldoancttl')?>""><i class="fa fa-solid fa-money-check"></i><span>Total Saldo ANCT-TL</span></a></li>
  <li class="menu-header">Total Saldo Diresaun</li>
  <li><a class="nav-link" href="<?= base_url()?>"><i class="fa fa-solid fa-money-bill"></i><span>Total Saldo Diresaun</span></a></li>
    <li class="menu-header">Saldo Tama Diresaun</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill-wave"></i><span>Saldo Tama Diresaun</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url("saldodonatorancttl") ?>">Saldo Donator ANCTTL</a></li>
        <li><a class="nav-link" href="<?= base_url("transactionpayment") ?>">Transaction Payment</a></li>
      </ul>
    </li>
    <li class="menu-header">Saldo Sai Diresaun</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill"></i><span>Saldo Sai Diresaun</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url("salariodiresaunancttl") ?>">Salario Diresaun ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url("")?>">Total Saldo ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url("") ?>">Saldo Tama Diresaun</a></li>
        <li><a class="nav-link" href="<?= base_url("") ?>">Saldo Sai Diresaun</a></li>
      </ul>
    </li>
    <li class="menu-header">Project ANCTTL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill"></i><span>Project ANCTTL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('projectancttl') ?>">Projeito ANCT-TL</a></li>
      </ul>
    </li>
    <li class="menu-header">Relatorio Narativa</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill"></i><span>Relatorio Narativa</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header">Print Administrasaun</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-download"></i><span>Print Administrasaun</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('printtotalsaldo') ?>">Print Total Saldo</a></li>
        <li><a class="nav-link" href="<?= base_url('printsalarioancttl') ?>">Print Salario ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('printsaldodonator') ?>">Print Saldo Donator</a></li>
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header">Carta Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Carta Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('cartadiretor') ?>">Carta Diretor</a></li>
      </ul>
    </li>
    <li class="menu-header">Credits</li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  <?php endif; ?>

<?php if (session()->regulamento_diresaun == 3) :?>
<li class="menu-header">Dashboard</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun') ?>"><i class="fa fa-solid fa-home"></i><span>Dashboard</span></a></li>
  <li class="menu-header">Absensi Dader</li>
  <li><a class="nav-link" href="<?= base_url('absensiloronloron/new') ?>"><i class="fa fa-solid fa-book"></i><span>Absensi Dader</span></a></li>
  <li class="menu-header">Absensi Lokraik</li>
  <li><a class="nav-link" href="<?= base_url('absensilokraik/new') ?>"><i class="fa fa-solid fa-folder"></i><span>Absensi Lokraik</span></a></li>
    <li class="menu-header">Project ANCTTL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Project ANCTTL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('projectancttl') ?>">Projeito ANCT-TL</a></li>
      </ul>
    </li>
    <li class="menu-header">Relatorio Narativa</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill"></i><span>Relatorio Narativa</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
     <li class="menu-header">Media ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Media ANCT-TL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('mediaancttl') ?>">Media ANCT-TL</a></li>
         <li><a class="nav-link" href="<?= base_url('tabakudiresaun') ?>">Media Tabaku</a></li>
      </ul>
    </li>
    <li class="menu-header">Carta Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Carta Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('cartadiretor') ?>">Carta Diretor</a></li>
      </ul>
    </li>
    <li class="menu-header">Credits</li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  <?php endif; ?>

<?php if (session()->regulamento_diresaun == 4) :?>
<li class="menu-header">Dashboard</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun') ?>"><i class="fa fa-solid fa-home"></i><span>Dashboard</span></a></li>
  <li class="menu-header">Absensi Dader</li>
  <li><a class="nav-link" href="<?= base_url('absensiloronloron/new') ?>"><i class="fa fa-solid fa-book"></i><span>Absensi Dader</span></a></li>
  <li class="menu-header">Absensi Lokraik</li>
  <li><a class="nav-link" href="<?= base_url('absensilokraik/new') ?>"><i class="fa fa-solid fa-folder"></i><span>Absensi Lokraik</span></a></li>
    <li class="menu-header">Advokasia Ho Monitorin</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Advokasia</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('projectancttl') ?>">Projeito ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header">Media ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Media ANCT-TL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('mediaancttl') ?>">Media ANCT-TL</a></li>
         <li><a class="nav-link" href="<?= base_url('tabakudiresaun') ?>">Media Tabaku</a></li>
      </ul>
    </li>
    <li class="menu-header">Carta Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Carta Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('cartadiretor') ?>">Carta Diretor</a></li>
      </ul>
    </li>
    <li class="menu-header">Credits</li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  <?php endif; ?>

<?php if (session()->regulamento_diresaun == 5) :?>
<li class="menu-header">Dashboard</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun') ?>"><i class="fa fa-solid fa-home"></i><span>Dashboard</span></a></li>
  <li class="menu-header">Absensi Dader</li>
  <li><a class="nav-link" href="<?= base_url('absensiloronloron/new') ?>"><i class="fa fa-solid fa-book"></i><span>Absensi Dader</span></a></li>
  <li class="menu-header">Absensi Lokraik</li>
  <li><a class="nav-link" href="<?= base_url('absensilokraik/new') ?>"><i class="fa fa-solid fa-folder"></i><span>Absensi Lokraik</span></a></li>
    <li class="menu-header">Project & Relatorio</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Project & Relatorio</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('projectancttl') ?>">Projeito ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header">Media ANCTTL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Media ANCTTL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('mediaancttl') ?>">Media ANCT-TL</a></li>
         <li><a class="nav-link" href="<?= base_url('tabakudiresaun') ?>">Media Tabaku</a></li>
      </ul>
    </li>
    <li class="menu-header">Carta Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Carta Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('cartadiretor') ?>">Carta Diretor</a></li>
      </ul>
    </li>
    <li class="menu-header">Credits</li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  <?php endif; ?>

<?php if (session()->regulamento_diresaun == 6) :?>
<li class="menu-header">Dashboard</li>
  <li><a class="nav-link" href="<?= base_url('homediresaun') ?>"><i class="fa fa-solid fa-home"></i><span>Dashboard</span></a></li>
  <li class="menu-header">Absensi Dader</li>
  <li><a class="nav-link" href="<?= base_url('absensiloronloron/new') ?>"><i class="fa fa-solid fa-book"></i><span>Absensi Dader</span></a></li>
  <li class="menu-header">Absensi Lokraik</li>
  <li><a class="nav-link" href="<?= base_url('absensilokraik/new') ?>"><i class="fa fa-solid fa-folder"></i><span>Absensi Lokraik</span></a></li>
    <li class="menu-header">Narativa ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Relatorio Narativa</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('relatorionarativa') ?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header">Project ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Project</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('projectancttl') ?>">Projeito ANCT-TL</a></li>
      </ul>
    </li>
    <li class="menu-header">Media ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Media</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('mediaancttl') ?>">Media ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('tabakudiresaun') ?>">Media Tabaku</a></li>
      </ul>
    </li>
    <li class="menu-header">Carta Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-solid fa-book-open"></i><span>Carta Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('cartadiretor') ?>">Carta Diretor</a></li>
      </ul>
    </li>
    <li class="menu-header">Credits</li>
    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
  <?php endif; ?>