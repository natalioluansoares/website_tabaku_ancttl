<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('create-db', function(){
// $forge = \Config\Database::forge();

// if ($forge->createDatabase('anct_tl')) {
//     echo 'Database created!';
// }
// });
$routes->get('/', 'Navbar::index');
// $routes->get('home', 'Home::index');
$routes->get('homediresaun', 'Homediresaun::index');

$routes->get("fullcalendar", "FullcalendarController::index");
$routes->get("event", "FullcalendarController::loadData");
$routes->post("eventAjax", "FullcalendarController::ajax");

$routes->get('diretor', 'Logindiretor::index');
$routes->get('logindiretoranct', 'Logindiretor::login');
$routes->get('logoutdiretoranct', 'Logindiretor::logout');
$routes->post('processologindiretoracnt', 'Logindiretor::processologindiretor');

// Regulamento Sistema
$routes->get('regulamentosistematemporario/(:any)', 'Regulamentosistema::temporario/$1');
$routes->get('regulamentosistematemporario', 'Regulamentosistema::temporario');
$routes->get('regulamentosistemahamos', 'Regulamentosistema::hamos');
$routes->delete('regulamentosistemahamoshotu/(:any)', 'Regulamentosistema::hamos_hotu/$1');
// $routes->delete('regulamentosistemahamoshotu', 'Regulamentosistema::hamos_hotu');
// $routes->get('totalsaldoancttl', 'Totalsaldoancttl::index');

// Total Saldo Donator
$routes->delete('totalsaldodonatorpermanente/(:any)', 'Totalsaldodonator::hamos_hotu/$1');
$routes->delete('totalsaldodonatorpermanente', 'Totalsaldodonator::permanente');


// PRINT SALDO DONATOR
$routes->get('printsaldodonator', 'Printdonator::index');
$routes->get('printsaldodonator/cetakexcel', 'Printdonator::cetakexcel');
$routes->get('printsaldodonator/filterexcel', 'Printdonator::filterexcel');
$routes->get('printsaldodonator/excel', 'Printdonator::excel');
$routes->get('printsaldodonator/pdf', 'Printdonator::pdf');
$routes->get('printsaldodonator/excel', 'Printdonator::excel');
$routes->get('printsaldodonator/cetakpdf', 'Printdonator::cetakpdf');
$routes->get('printsaldodonator/filterpdf', 'Printdonator::filterpdf');
$routes->get('printtotalsaldo', 'Printtotalsaldo::index');

// PRINT SALDO ANCT-TL
$routes->get('printtotalsaldo/downloadpdf', 'Printtotalsaldo::saldoancttlpdf');
$routes->get('printtotalsaldo/downloadexcel', 'Printtotalsaldo::saldoancttlexcel');

// Print Salario ANCT-TL
$routes->get('printsalarioancttl', 'Printsalarioancttl::index');
$routes->get('printsalarioancttl/pdf', 'Printsalarioancttl::salariopdf');
$routes->get('printsalarioancttl/excel', 'Printsalarioancttl::salarioexcel');
$routes->get('printsalarioancttl/cetakpdf', 'Printsalarioancttl::cetakpdf');
$routes->get('printsalarioancttl/filterpdf', 'Printsalarioancttl::filterpdf');
$routes->get('printsalarioancttl/cetakexcel', 'Printsalarioancttl::cetakexcel');
$routes->get('printsalarioancttl/filterexcel', 'Printsalarioancttl::filterexcel');


// DIRESAUN
$routes->get('akunancttlhamos', 'Akunancttl::hamos');
$routes->get('akunancttlaktivo', 'Akunancttl::aktivoancttl');
$routes->post('akunancttltemporario', 'Akunancttl::temporario');
$routes->delete('akunancttlhamoshotu/(:any)', 'Akunancttl::hamos_hotu/$1');
$routes->post('akundiretor/diretor', 'Akundiretor::diretor');
$routes->get('akundiretor/troka/(:any)', 'Akundiretor::troka/$1');
$routes->get('akunancttl/troka/(:any)', 'Akunancttl::troka/$1');
$routes->get('akundiretor/hamos', 'Akundiretor::hamos');
$routes->post('akundiretor/temporario', 'Akundiretor::temporario');
$routes->delete('akundiretor/hamos_dados/(:any)', 'Akundiretor::hamos_dados/$1');
$routes->post('akunancttl/diresaun', 'Akunancttl::diresaun');

$routes->get('administrasaun', 'Loginadministrasaun::index');
$routes->get('loginadministrasaunanct', 'Loginadministrasaun::login');
$routes->get('logoutadministrasaunanct', 'Loginadministrasaun::logout');
$routes->get('homediresaun/totalsaldoancttl', 'Homediresaun::totalsaldoancttl');
$routes->post('processologinadministrasaunacnt', 'Loginadministrasaun::processologinadministrasaun');

// Saldo Donator
$routes->get('saldodonatorancttl/ancttl/(:any)', 'Saldodonatorancttl::ancttl/$1');
$routes->get('saldodonatorancttl/newancttl', 'Saldodonatorancttl::newancttl');
$routes->post('saldodonatorancttl/ancttl', 'Saldodonatorancttl::aumentaancttl');


$routes->get('theunion', 'Logintheunion::index');
$routes->get('logintheunionanct', 'Logintheunion::login');
$routes->get('logouttheunionanct', 'Logintheunion::logout');
$routes->post('processologintheunionacnt', 'Logintheunion::processologintheunion');

$routes->get('kodenarativatheunion/hamostemporario/(:any)', 'Kodenarativatheunion::temporario/$1');
$routes->get('kodenarativatheunion/hamostemporario', 'Kodenarativatheunion::temporario');
$routes->get('kodenarativatheunion/hamos', 'Kodenarativatheunion::hamos');
$routes->delete('kodenarativatheunion/hamosdatatemporario/(:any)', 'Kodenarativatheunion::hamos_hotu/$1');
$routes->delete('kodenarativatheunion/hamosdatatemporario', 'Kodenarativatheunion::hamos_hotu');


$routes->get('advokasia', 'Loginadvokasia::index');
$routes->get('loginadvokasiaanct', 'Loginadvokasia::login');
$routes->get('logoutadvokasiaanct', 'Logintheunion::logout');
$routes->post('processologinadvokasiaacnt', 'Loginadvokasia::processologinadvokasia');


$routes->get('kampanha', 'Loginkampanha::index');
$routes->get('loginkampanhaanct', 'Loginkampanha::login');
$routes->get('logoutkampanhaanct', 'Loginkampanha::logout');
$routes->post('processologinkampanhaacnt', 'Loginkampanha::processologinkampanha');

$routes->get('media', 'Loginmedia::index');
$routes->get('loginmediaanct', 'Loginmedia::login');
$routes->get('logoutmediaanct', 'Loginmedia::logout');
$routes->get('logoutmediaanct', 'Loginmedia::logout');
$routes->post('processologinmediaacnt', 'Loginmedia::processologinmedia');
$routes->post('processologinmediaacnt', 'Loginmedia::processologinmedia');
$routes->get('detailmedia/(:any)', 'Detailmedia::index/$1');
$routes->get('mediaancttl/Tetum', 'Mediaancttl::tetum');
$routes->get('mediaancttl/Portuguesa', 'Mediaancttl::portuguesa');
$routes->get('mediaancttl/English', 'Mediaancttl::english');
$routes->get('mediaancttl/Indonesia', 'Mediaancttl::indonesia');

$routes->get('mediaancttl/troka/(:any)', 'Mediaancttl::troka/$1');
$routes->post('mediaancttl/troka_media', 'Mediaancttl::troka_media');

$routes->get('projectancttl/mypdfproject/(:any)', 'Projectancttl::mypdfproject/$1');
$routes->get('projectancttl/detail/(:any)', 'Projectancttl::detail/$1');
$routes->post('projectancttl/trokaproject(:any)', 'Projectancttl::trokaproject/$1');
$routes->post('projectancttl/troka_projeito', 'Projectancttl::troka_projeito');
$routes->get('projectancttl/download/(:any)', 'Projectancttl::download/$1');

$routes->get('relatorionarativa/troka/(:any)', 'Relatorionarativa::troka/$1');
$routes->get('relatorionarativa/detail/(:any)', 'Relatorionarativa::detail/$1');
$routes->post('relatorionarativa/troka_narativa', 'Relatorionarativa::troka_narativa');
$routes->post('relatorionarativa/trokarelatorio', 'Relatorionarativa::trokarelatorio');
$routes->post('relatorionarativa/aktivorelatorio', 'Relatorionarativa::aktivorelatorio');
$routes->get('relatorionarativa/download/(:any)', 'Relatorionarativa::download/$1');

$routes->get('relatorionarativa/relatorionarativaadministrasaun/60/(:any)', 
'Relatorionarativa::relatorionarativaprimeiroadministrasaun/$1');

$routes->get('relatorionarativa/relatorionarativaadministrasaun/40/(:any)', 
'Relatorionarativa::relatorionarativasegundoadministrasun/$1');

$routes->get('relatorionarativa/relatorionarativaancttl/60',
 'Relatorionarativa::relatorionarativaprimeiro');

$routes->get('relatorionarativa/relatorionarativaancttl/40',
 'Relatorionarativa::relatorionarativasegundo');

$routes->get('theunionrelatorionarativa/troka/(:any)', 'Theunionrelatorionarativa::troka/$1');
$routes->get('theunionrelatorionarativa/detail/(:any)', 'Theunionrelatorionarativa::detail/$1');
$routes->post('theunionrelatorionarativa/troka_narativa', 'Theunionrelatorionarativa::troka_narativa');
$routes->post('theunionrelatorionarativa/trokarelatorio(:any)', 'Theunionrelatorionarativa::trokarelatorio');
$routes->get('theunionrelatorionarativa/download/(:any)', 'Theunionrelatorionarativa::download/$1');
$routes->get('theunionrelatorionarativa//(:any)', 'Theunionrelatorionarativa::detail/$1');

// Diretor Narativa
$routes->get('diretorelatorionarativa/troka/(:any)', 'Diretorelatorionarativa::troka/$1');
// $routes->get('diretorelatorionarativa/troka/(:any)', 'Diretorelatorionarativa::troka/$1');
$routes->get('diretorelatorionarativa/detail/(:any)', 'Diretorelatorionarativa::detail/$1');
$routes->get('diretorelatorionarativa/download/(:any)', 'Diretorelatorionarativa::download/$1');
$routes->post('diretorelatorionarativa/troka_narativa', 'Diretorelatorionarativa::troka_narativa');
$routes->post('diretorelatorionarativa/trokarelatorio', 'Diretorelatorionarativa::trokarelatorio');
$routes->post('diretorelatorionarativa/aktivorelatorio', 'Diretorelatorionarativa::aktivorelatorio');
$routes->get('diretorelatorionarativa/hamos/40/(:any)', 'Diretorelatorionarativa::hamosrelatorionarativaprimeiro/$1');
$routes->get('diretorelatorionarativa/hamos/60/(:any)', 'Diretorelatorionarativa::hamosrelatorionarativaprimeiro/$1');
$routes->get('diretorelatorionarativa/temporario/(:any)', 'Diretorelatorionarativa::temporario/$1');
$routes->get('diretorelatorionarativa/temporario', 'Diretorelatorionarativa::temporario');
$routes->delete('diretorelatorionarativa/hamos_hotu/(:any)', 'Diretorelatorionarativa::hamos_hotu/$1');
$routes->delete('diretorelatorionarativa/hamos_hotu', 'Diretorelatorionarativa::hamos_hotu');

$routes->get('diretorelatorionarativa/relatorionarativaadministrasaun/60/(:any)', 
'Diretorelatorionarativa::relatorionarativaprimeiroadministrasaun/$1');

$routes->get('diretorelatorionarativa/relatorionarativaadministrasaun/40/(:any)', 
'Diretorelatorionarativa::relatorionarativasegundoadministrasun/$1');

// Diretor Media
$routes->post('diretormedia/troka_media', 'Diretormedia::troka_media');
$routes->post('diretormedia/trokarelatorio(:any)', 'Diretormedia::trokarelatorio');
$routes->get('detailmedia/(:any)', 'Detaildiretormedia::index/$1');
$routes->get('diretormedia/Tetum', 'Diretormedia::tetum');
$routes->get('diretormedia/Portuguesa', 'Diretormedia::portuguesa');
$routes->get('diretormedia/English', 'Diretormedia::english');
$routes->get('diretormedia/Indonesia', 'Diretormedia::indonesia');
$routes->get('diretormedia/troka/(:any)', 'Diretormedia::troka/$1');
$routes->post('diretormedia/aktivorelatorio', 'Diretormedia::aktivorelatorio');
$routes->get('hamosdiretormedia/Tetum', 'Diretormedia::hamostetum');
$routes->get('hamosdiretormedia/Portuguesa', 'Diretormedia::hamosportuguesa');
$routes->get('hamosdiretormedia/English', 'Diretormedia::hamosenglish');
$routes->get('hamosdiretormedia/Indonesia', 'Diretormedia::hamosindonesia'); 
$routes->get('diretormedia/temporario/(:any)', 'Diretormedia::temporario/$1');
$routes->get('diretormedia/temporario', 'Diretormedia::temporario');
$routes->delete('diretormedia/hamos_hotu/(:any)', 'Diretormedia::hamos_hotu/$1');

// Diretor Media Tabaku
$routes->post('tabakudiretor/troka_media', 'Tabakudiretor::troka_media');
$routes->post('tabakudiretor/trokarelatorio', 'Tabakudiretor::trokarelatorio');
$routes->post('tabakudiretor/aktivorelatorio', 'Tabakudiretor::aktivorelatorio');
$routes->get('tabakudiretor/Tetum', 'Tabakudiretor::tetum');
$routes->get('tabakudiretor/Portuguesa', 'Tabakudiretor::portuguesa');
$routes->get('tabakudiretor/English', 'Tabakudiretor::english');
$routes->get('tabakudiretor/Indonesia', 'Tabakudiretor::indonesia');
$routes->get('tabakudiretor/troka/(:any)', 'Tabakudiretor::troka/$1');
$routes->get('hamostabakudiretor/Tetum', 'Tabakudiretor::hamostetum');
$routes->get('hamostabakudiretor/Portuguesa', 'Tabakudiretor::hamosportuguesa');
$routes->get('hamostabakudiretor/English', 'Tabakudiretor::hamosenglish');
$routes->get('hamostabakudiretor/Indonesia', 'Tabakudiretor::hamosindonesia'); 
$routes->get('tabakudiretor/temporario/(:any)', 'Tabakudiretor::temporario/$1');
$routes->get('tabakudiretor/temporario', 'Tabakudiretor::temporario');
$routes->delete('tabakudiretor/hamos_hotu/(:any)', 'Tabakudiretor::hamos_hotu/$1');


// Diresaun Media Tabaku
$routes->post('tabakudiresaun/troka_media', 'Tabakudiresaun::troka_media');
$routes->post('tabakudiresaun/trokarelatorio(:any)', 'Tabakudiresaun::trokarelatorio');
$routes->get('tabakudiresaun/Tetum', 'Tabakudiresaun::tetum');
$routes->get('tabakudiresaun/Portuguesa', 'Tabakudiresaun::portuguesa');
$routes->get('tabakudiresaun/English', 'Tabakudiresaun::english');
$routes->get('tabakudiresaun/Indonesia', 'Tabakudiresaun::indonesia');
$routes->get('tabakudiresaun/troka/(:any)', 'Tabakudiresaun::troka/$1');
$routes->get('tabakudiresaun/detail/(:any)', 'Tabakudiresaun::detail/$1');
$routes->get('hamostabakudiresaun/Tetum', 'Tabakudiresaun::hamostetum');


$routes->get('diretorprojectancttl/detail/(:any)', 'Diretorprojectancttl::detail/$1');
$routes->post('diretorprojectancttl/trokarelatorio/(:any)', 'Diretorprojectancttl::trokarelatorio');
$routes->get('diretorprojectancttl/hamos/(:any)', 'Diretorprojectancttl::hamos/$1');
$routes->get('diretorprojectancttl/temporario/(:any)', 'Diretorprojectancttl::temporario/$1');
$routes->get('diretorprojectancttl/temporario', 'Diretorprojectancttl::temporario');
$routes->delete('diretorprojectancttl/hamos_hotu/(:any)', 'Diretorprojectancttl::hamos_hotu/$1');
$routes->get('diretorprojectancttl/download/(:any)', 'Diretorprojectancttl::download/$1');
$routes->post('diretorprojectancttl/troka_projeito', 'Diretorprojectancttl::troka_projeito');
$routes->get('diretorprojectancttl/troka/(:any)', 'Diretorprojectancttl::troka/$1');

$routes->get('diretorchannelyoutube/hamos', 'Diretorchannelyoutube::hamos');
$routes->get('diretorchannelyoutube/temporario', 'Diretorchannelyoutube::temporario');
$routes->get('diretorchannelyoutube/temporario/(:any)', 'Diretorchannelyoutube::temporario/$1');
$routes->delete('diretorchannelyoutube/hamos_hotu/(:any)', 'Diretorchannelyoutube::hamos_hotu/$1');
$routes->delete('diretorchannelyoutube/hamos_hotu', 'Diretorchannelyoutube::hamos_hotu');

$routes->get('cartadiretor/detail/(:any)', 'Cartadiretor::detail/$1');
$routes->get('cartadiretor/lingua/Tetum', 'Cartadiretor::tetum');  
$routes->get('cartadiretor/lingua/Portuguesa', 'Cartadiretor::portuguesa');  
$routes->get('cartadiretor/lingua/English', 'Cartadiretor::english');  
$routes->get('cartadiretor/lingua/Indonesia', 'Cartadiretor::indonesia');  


$routes->get('cartadiretorancttl/detail/(:any)', 'Cartadiretorancttl::detail/$1'); 
$routes->get('cartadiretorancttl/hamos', 'Cartadiretorancttl::hamos'); 
$routes->get('cartadiretorancttl/temporario/(:any)', 'Cartadiretorancttl::temporario/$1'); 
$routes->get('cartadiretorancttl/temporario', 'Cartadiretorancttl::temporario'); 
$routes->delete('cartadiretorancttl/hamos_hotu/(:any)', 'Cartadiretorancttl::hamos_hotu/$1'); 
$routes->delete('cartadiretorancttl/hamos_hotu', 'Cartadiretorancttl::hamos_hotu');
$routes->get('cartadiretorancttl/lingua/Tetum', 'Cartadiretorancttl::tetum');  
$routes->get('cartadiretorancttl/lingua/Portuguesa', 'Cartadiretorancttl::portuguesa');  
$routes->get('cartadiretorancttl/lingua/English', 'Cartadiretorancttl::english');  
$routes->get('cartadiretorancttl/lingua/Indonesia', 'Cartadiretorancttl::indonesia');  

$routes->get('misaunvisaunancttl/hamos', 'Misaunvisaunancttl::hamos'); 
$routes->get('misaunvisaunancttl/temporario/(:any)', 'Misaunvisaunancttl::temporario/$1'); 
$routes->get('misaunvisaunancttl/temporario', 'Misaunvisaunancttl::temporario'); 
$routes->get('misaunvisaunancttl/lingua/Tetum', 'Misaunvisaunancttl::tetum'); 
$routes->get('misaunvisaunancttl/lingua/Portuguesa', 'Misaunvisaunancttl::portuguesa'); 
$routes->get('misaunvisaunancttl/lingua/English', 'Misaunvisaunancttl::english'); 
$routes->get('misaunvisaunancttl/lingua/Indonesia', 'Misaunvisaunancttl::indonesia'); 
$routes->delete('misaunvisaunancttl/hamos_hotu/(:any)', 'Misaunvisaunancttl::hamos_hotu/$1'); 
$routes->delete('misaunvisaunancttl/hamos_hotu', 'Misaunvisaunancttl::hamos_hotu'); 

$routes->get('historiaancttl/hamos', 'historiaancttl::hamos');
$routes->get('historiaancttl/temporario/(:any)', 'Historiaancttl::temporario/$1'); 
$routes->get('historiaancttl/temporario', 'Historiaancttl::temporario'); 
$routes->delete('historiaancttl/hamos_hotu/(:any)', 'Historiaancttl::hamos_hotu/$1'); 
$routes->delete('historiaancttl/hamos_hotu', 'Historiaancttl::hamos_hotu');
$routes->get('historiaancttl/lingua/Tetum', 'Historiaancttl::tetum'); 
$routes->get('historiaancttl/lingua/Portuguesa', 'Historiaancttl::portuguesa'); 
$routes->get('historiaancttl/lingua/English', 'Historiaancttl::english'); 
$routes->get('historiaancttl/lingua/Indonesia', 'Historiaancttl::indonesia'); 


$routes->get('profilediresaun', 'Profilediresaun::index');
$routes->get('profilediresaun/password', 'Profilediresaun::password');
$routes->get('profilediresaun/password', 'Profilediresaun::password');
$routes->post('profilediresaun/trokapassword', 'Profilediresaun::trokapassword');


$routes->get('profilediretor/Tetum', 'Profilediretor::tetum');
$routes->get('profilediretor/Portuguesa', 'Profilediretor::portuguesa');
$routes->get('profilediretor/English', 'Profilediretor::english');
$routes->get('profilediretor/Indonesia', 'Profilediretor::indonesia');
$routes->get('profilediretor/detail/(:any)', 'Profilediretor::detail/$1');
$routes->get('profilediretor/hamos/(:any)', 'Profilediretor::hamos/$1'); 
$routes->get('profilediretor/temporario/(:any)', 'Profilediretor::temporario/$1'); 
$routes->get('profilediretor/temporario', 'Profilediretor::temporario'); 
$routes->delete('profilediretor/hamos_hotu/(:any)', 'Profilediretor::hamos_hotu/$1'); 
$routes->delete('profilediretor/hamos_hotu', 'Profilediretor::hamos_hotu');

$routes->get('profilediresaundiretor/hamos', 'Profilediresaundiretor::hamos'); 
$routes->get('profilediresaundiretor/detail/(:any)', 'Profilediresaundiretor::detail/$1');
$routes->get('profilediresaundiretor/temporario/(:any)', 'Profilediresaundiretor::temporario/$1'); 
$routes->get('profilediresaundiretor/temporario', 'Profilediresaundiretor::temporario'); 
$routes->delete('profilediresaundiretor/hamos_hotu/(:any)', 'Profilediresaundiretor::hamos_hotu/$1'); 
$routes->delete('profilediresaundiretor/hamos_hotu', 'Profilediresaundiretor::hamos_hotu');
// $routes->get('profilediresaundiretor/(:any)', 'Profilediresaundiretor::profile/$1');

$routes->get('profilediresaunancttl/detail/(:any)', 'Profilediresaunancttl::detail/$1');

$routes->get('English/English/homemediaancttl', 'Homemediaancttl::en');
$routes->get('{locale}/Indonesia/homemediaancttl', 'Homemediaancttl::in');
$routes->get('{locale}/Portuguesa/homemediaancttl', 'Homemediaancttl::por');
$routes->get('{locale}/Tetum/homemediaancttl', 'Homemediaancttl::te');
$routes->get('{locale}/homemediaancttl/detail/(:any)', 'Homemediaancttl::detail/$1');
$routes->get('{locale}/homemediaancttl/detailmedia/English/(:any)', 'Homemediaancttl::detailmediaenglish/$1');
$routes->get('{locale}/homemediaancttl/detailmedia/Portuguesa/(:any)', 'Homemediaancttl::detailmediaportuguesa/$1');
$routes->get('{locale}/homemediaancttl/detailmedia/Tetum/(:any)', 'Homemediaancttl::detailmediatetum/$1');
$routes->get('{locale}/homemediaancttl/detailmedia/Indonesia/(:any)', 'Homemediaancttl::detailmediaindonesia/$1');

$routes->get('{locale}/English/tabaku/tabakumedia', 'tabakumedia::english');
$routes->get('{locale}/Indonesia/tabaku/tabakumedia', 'tabakumedia::indonesia');
$routes->get('{locale}/Portuguesa/tabaku/tabakumedia', 'tabakumedia::portuguesa');
$routes->get('{locale}/Tetum/tabaku/tabakumedia', 'tabakumedia::tetum');
$routes->get('{locale}/tabakumedia/detail/(:any)', 'tabakumedia::detail/$1');
$routes->get('{locale}/tabakumedia/detailtabaku/English/(:any)', 'tabakumedia::detailtabakuenglish/$1');
$routes->get('{locale}/tabakumedia/detailtabaku/Indonesia/(:any)', 'tabakumedia::detailtabakuindonesia/$1');
$routes->get('{locale}/tabakumedia/detailtabaku/Portuguesa/(:any)', 'tabakumedia::detailtabakuportuguesa/$1');
$routes->get('{locale}/tabakumedia/detailtabaku/Tetum/(:any)', 'tabakumedia::detailtabakutetum/$1');

$routes->get('{locale}/Tetum/te/homemediaancttl', 'Homemediaancttl::tetum');
$routes->get('{locale}/Portuguesa/por/homemediaancttl', 'Homemediaancttl::portuguesa');
$routes->get('{locale}/English/en/homemediaancttl', 'Homemediaancttl::english');
$routes->get('{locale}/Indonesia/in/homemediaancttl', 'Homemediaancttl::indonesia');

$routes->get('{locale}/English/misaunvisaunmediaancttl', 'Misaunvisaunmediaancttl::en');
$routes->get('{locale}/Indonesia/misaunvisaunmediaancttl', 'Misaunvisaunmediaancttl::in');
$routes->get('{locale}/Portuguesa/misaunvisaunmediaancttl', 'Misaunvisaunmediaancttl::por');
$routes->get('{locale}/Tetum/misaunvisaunmediaancttl', 'Misaunvisaunmediaancttl::te');

$routes->get('{locale}/English/historiamedianancttl', 'Historiamedianancttl::en');
$routes->get('{locale}/Indonesia/historiamedianancttl', 'Historiamedianancttl::in');
$routes->get('{locale}/Portuguesa/historiamedianancttl', 'Historiamedianancttl::por');
$routes->get('{locale}/Tetum/historiamedianancttl', 'Historiamedianancttl::te');

$routes->get('{locale}/English/en/profilemedia', 'Profilemedia::englishdiretor');
$routes->get('{locale}/Indonesia/in/profilemedia', 'Profilemedia::indonesiadiretor');
$routes->get('{locale}/Portuguesa/por/profilemedia', 'Profilemedia::portuguesadiretor');
$routes->get('{locale}/Tetum/te/profilemedia', 'Profilemedia::tetumdiretor');

$routes->get('{locale}/English/en/profilemediadiresaun', 'Profilemedia::englishdiresaun');
$routes->get('{locale}/Indonesia/in/profilemediadiresaun', 'Profilemedia::indonesiadiresaun');
$routes->get('{locale}/Portuguesa/por/profilemediadiresaun', 'Profilemedia::portuguesadiresaun');
$routes->get('{locale}/Tetum/te/profilemediadiresaun', 'Profilemedia::tetumdiresaun');
$routes->get('{locale}/Tetum/te/profilemediadiresaun', 'Profilemedia::tetumdiresaun');

$routes->get('{locale}/English/en/profile', 'Profilemedia::profile');
$routes->get('{locale}/Indonesia/in/profile', 'Profilemedia::profile');
$routes->get('{locale}/Portuguesa/por/profile', 'Profilemedia::profile');
$routes->get('{locale}/Tetum/te/profile', 'Profilemedia::profile');

$routes->get('{locale}/Tetum/te/profilediretor/(:any)', 'Profilemedia::profilediretor/$1');
$routes->get('{locale}/Portuguesa/por/profilediretor/(:any)', 'Profilemedia::profilediretor/$1');
$routes->get('{locale}/English/en/profilediretor/(:any)', 'Profilemedia::profilediretor/$1');
$routes->get('{locale}/Indonesia/in/profilediretor/(:any)', 'Profilemedia::profilediretor/$1');

$routes->get('{locale}/Tetum/te/profilediresaun/(:any)', 'Profilemedia::profilediresaun/$1');
$routes->get('{locale}/Portuguesa/por/profilediresaun/(:any)', 'Profilemedia::profilediresaun/$1');
$routes->get('{locale}/English/en/profilediresaun/(:any)', 'Profilemedia::profilediresaun/$1');
$routes->get('{locale}/Indonesia/in/profilediresaun/(:any)', 'Profilemedia::profilediresaun/$1');

$routes->get('{locale}/English/en/albumancttl', 'Albumancttl::english');
$routes->get('{locale}/Portuguesa/por/albumancttl', 'Albumancttl::portuguesa');
$routes->get('{locale}/Tetum/te/albumancttl', 'Albumancttl::tetum');
$routes->get('{locale}/Indonesia/in/albumancttl', 'Albumancttl::indonesia');

$routes->get('{locale}/English/en/albumtabaku', 'Albumtabaku::english');
$routes->get('{locale}/Portuguesa/por/albumtabaku', 'Albumtabaku::portuguesa');
$routes->get('{locale}/Tetum/te/albumtabaku', 'Albumtabaku::tetum');
$routes->get('{locale}/Indonesia/in/albumtabaku', 'Albumtabaku::indonesia');

$routes->get('{locale}/in/videoancttl', 'Videoancttl::indonesia');
$routes->get('{locale}/en/videoancttl', 'Videoancttl::english');
$routes->get('{locale}/por/videoancttl', 'Videoancttl::portuguesa');
$routes->get('{locale}/te/videoancttl', 'Videoancttl::tetum');

$routes->get('{locale}/in/tabaku/videotabaku', 'Videotabaku::indonesia');
$routes->get('{locale}/en/tabaku/videotabaku', 'Videotabaku::english');
$routes->get('{locale}/por/tabaku/videotabaku', 'Videotabaku::portuguesa');
$routes->get('{locale}/te/tabaku/videotabaku', 'Videotabaku::tetum');



$routes->resource('regulamentosistema');
$routes->resource('akunancttl');
$routes->resource('absensidiresaun');
$routes->resource('absensiloronloron');
$routes->resource('absensilokraik');
$routes->resource('mediaancttl');
$routes->resource('projectancttl');
$routes->resource('saldotamaancttl');
$routes->resource('saldodonatorancttl');
$routes->resource('totalsaldodonator');
$routes->resource('relatorionarativa');
$routes->resource('diretorelatorionarativa');
$routes->resource('salariodiresaunancttl');
$routes->resource('totalsaldoancttl');
$routes->resource('kodenarativatheunion');
$routes->resource('diretormedia');
$routes->resource('diretorprojectancttl');
$routes->resource('channelyoutube');
$routes->resource('diretorchannelyoutube');
$routes->resource('cartadiretor');
$routes->resource('cartadiretorancttl');
$routes->resource('misaunvisaunancttl');
$routes->resource('historiaancttl');
// $routes->resource('home');
$routes->resource('akundiretor');
$routes->resource('theunionrelatorionarativa');
$routes->resource('profilediretor');
$routes->resource('profilediresaundiretor');
$routes->resource('profilediresaunancttl');
$routes->resource('tabakudiretor');
$routes->resource('tabakudiresaun');

// $routes->resource('home', ['only' => ['index', 'heta', 'create', 'update', 'delete']]);