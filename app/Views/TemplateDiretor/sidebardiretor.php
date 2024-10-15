  <li class="menu-header" style="background-color: gainsboro; color:black">Dashboard</li>
    <li class="nav-item dropdown">
      <li class=""><a class="nav-link" href="<?= base_url('fullcalendar')?>"><i class="fa fa-solid fa-home"></i> <span>Dashboard</span></a></li>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Regulamento Sistema</li>
    <li class=""><a class="nav-link" href="<?= base_url('regulamentosistema')?>"><i class="fa fa-light fa-key"></i> <span>Regulamento Sistema</span></a></li>
    <li class="menu-header"  style="background-color: gainsboro; color:black">Diretor ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" title="Diresaun ANCT-TL" data-toggle="dropdown"><i class="fa fa-sharp fa-solid fa-user"></i> <span>Diretor</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
      </ul>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Administrasaun & Finansas</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" title="Administrasaun Ho Finansas" data-toggle="dropdown"><i class="fa fa-solid fa-money-bill"></i><span>Administrasaun</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('totalsaldoancttl') ?>">Total Saldo ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('totalsaldodonator') ?>">Saldo Tama Donator</a></li>
        <li><a class="nav-link" href="<?= base_url('saldosaiancttl') ?>">Saldo Sai ANCT-TL</a></li>
      </ul>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Relatorio Narativa</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" title="The Union" data-toggle="dropdown">
      <i class="fas fa-columns"></i> <span>Relatorio Narativa</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('diretorelatorionarativa')?>">Relatorio Narativa</a></li>
      </ul>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Project ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" title="Advokasia Ho Monitorin" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Project ANCT-TL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('diretorprojectancttl')?>">Project ANCT-TL</a></li>
      </ul>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Media ANCT-TL</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" title="Kampanha Ho Treinamento"  data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Media ANCT-TL</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= base_url('diretormedia')?>">Media ANCT-TL</a></li>
        <li><a class="nav-link" href="<?= base_url('tabakudiretor')?>">Media Tabaku</a></li>
      </ul>
    </li>
    <li class="menu-header" style="background-color: gainsboro; color:black">Credits</li>
<li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>