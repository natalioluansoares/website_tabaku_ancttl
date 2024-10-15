<?php

namespace Config;

use App\Filters\FilterAdministrasaun;
use App\Filters\FilterAdvokasia;
use App\Filters\FilterDiretor;
use App\Filters\FilterKampanha;
use App\Filters\FilterMediaAncttl;
use App\Filters\FilterTheunion;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, string>
     * @phpstan-var array<string, class-string>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filterDiretor' => FilterDiretor::class,
        'filteradministrasaun'  => FilterAdministrasaun::class,
        'filtertheunion'        => FilterTheunion::class,
        'filteradvokasia'       => FilterAdvokasia::class,
        'filterkampanha'        => FilterKampanha::class, 
        'filtermediaancttl'     => FilterMediaAncttl::class, 
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, array<string>>
     * @phpstan-var array<string, list<string>>|array<string, array<string, array<string, string>>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'filterDiretor' => ['except' =>[ 'fullcalendar','fullcalendar/*', 'regulamentosistema', 'regulamentosistema/*',
            'regulamentosistemahamos', 'regulamentosistemahamos/*', 
            'regulamentosistematemporario', 'regulamentosistematemporario/*',
            'regulamentosistemahamoshotu','regulamentosistemahamoshotu/*',
            'akunancttl', 'akunancttl/*', 'akunancttlhamos', 'akunancttlhamos/*',
            'akunancttlhamoshotu', 'akunancttlhamoshotu/*',
            'akunancttltemporario', 'akunancttltemporario/*', 
            'akunancttlaktivo', 'akunancttlaktivo/*', 'absensidiresaun', 'absensidiresaun/*',
            'totalsaldoancttl', 'totalsaldoancttl/*','totalsaldodonator', 'totalsaldodonator/*',
            'totalsaldodonatorpermanente', 'totalsaldodonatorpermanente/*', 'totalsaldoancttl',
            'totalsaldoancttl/*', 'kodenarativatheunion', 'kodenarativatheunion/*', 'diretormedia', 'diretormedia/*',
            'diretormedia/Indonesia', 'diretormedia/Portuguesa', 'diretormedia/Tetum', 'diretormedia/English',  
            'diretorelatorionarativa', 'diretorelatorionarativa/*',  'hamosdiretormedia/Tetum', 'hamosdiretormedia/Indonesia', 
            'hamosdiretormedia/English', 'hamosdiretormedia/Portuguesa', 'diretorprojectancttl', 'diretorprojectancttl/*',
            'diretorchannelyoutube', 'diretorchannelyoutube/*', 'cartadiretorancttl', 'cartadiretorancttl/*',
            'misaunvisaunancttl', 'misaunvisaunancttl/*', 'historiaancttl', 'historiaancttl/*', 'akundiretor', 'akundiretor/*',
            'homemediaancttl', '*/homemediaancttl', '*/homemediaancttl/*', 'misaunvisaunmediaancttl', '*/misaunvisaunmediaancttl',
            'historiamedianancttl' , '*/historiamedianancttl' , 'albumancttl', '*/albumancttl', 'videoancttl', '*/videoancttl',
            'profilediretor', 'profilediretor/*', 'profilediresaundiretor', 'profilediresaundiretor/*',
            'tabakudiretor', 'tabakudiretor/*', 'hamostabakudiretor/*', 'diretorelatorionarativa/relatorionarativaadministrasaun/60/*',
            'diretorelatorionarativa/relatorionarativaadministrasaun/40/*', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],

            'filteradministrasaun' => ['except' =>[ 'homediresaun','homediresaun/*', 
            'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
            'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
            'mediaancttl/English',  'detailmedia/*', 'saldodonatorancttl', 'saldodonatorancttl/*',
            'projectancttl', 'projectancttl/*', 'relatorionarativa', 'relatorionarativa/*',
            'printsaldodonator', 'printsaldodonator/*', 'printtotalsaldo', 'printtotalsaldo/*',
            'salariodiresaunancttl', 'salariodiresaunancttl/*', 'printsalarioancttl', 'printsalarioancttl/*',
            'cartadiretor', 'cartadiretor/*', 'profilediresaun', 'profilediresaun/*', 'homemediaancttl', 
            '*/homemediaancttl', '*/homemediaancttl/*', 'misaunvisaunmediaancttl', '*/misaunvisaunmediaancttl',
            'historiamedianancttl' , '*/historiamedianancttl' , 'albumancttl', '*/albumancttl', 'videoancttl', '*/videoancttl', 
            'theunionrelatorionarativa', 'theunionrelatorionarativa/*', 'profilediresaunancttl', 'profilediresaunancttl/*',
            'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 
            'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaadministrasaun/40/*',
            'relatorionarativa/relatorionarativaadministrasaun/60/*', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],

            'filtertheunion' => ['except' =>[ 'homediresaun',
            'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
            'mediaancttl', 'detailmedia/*','projectancttl', 'projectancttl/*',
            'relatorionarativa', 'relatorionarativa/*', 'mediaancttl/Indonesia', 
            'mediaancttl/Portuguesa', 'mediaancttl/Tetum', 'mediaancttl/English',
            'profilediresaun', 'profilediresaun/*','homemediaancttl', '*/homemediaancttl', 
            '*/homemediaancttl/*', 'misaunvisaunmediaancttl', '*/misaunvisaunmediaancttl', 
            'historiamedianancttl' , '*/historiamedianancttl' , 'albumancttl', '*/albumancttl',
            'videoancttl', '*/videoancttl', 'theunionrelatorionarativa', 'theunionrelatorionarativa/*',
            'cartadiretor', 'cartadiretor/*', 'profilediresaunancttl', 'profilediresaunancttl/*',
            'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 
            'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaancttl/40',
            'relatorionarativa/relatorionarativaancttl/60', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],

            'filteradvokasia' => ['except' =>[ 'homediresaun',
            'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
            'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
            'mediaancttl/English',  'detailmedia/*','projectancttl', 'projectancttl/*',
            'relatorionarativa', 'relatorionarativa/*', 'cartadiretor', 'cartadiretor/*',
            'profilediresaun', 'profilediresaun/*', 'homemediaancttl', '*/homemediaancttl', 
            '*/homemediaancttl/*', 'misaunvisaunmediaancttl', '*/misaunvisaunmediaancttl', 
            'historiamedianancttl' , '*/historiamedianancttl' , 'albumancttl', '*/albumancttl', 
            'videoancttl', '*/videoancttl', 'profilediresaunancttl', 'profilediresaunancttl/*',
            'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 
            'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaancttl/40',
            'relatorionarativa/relatorionarativaancttl/60', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],

            'filterkampanha' => ['except' =>[ 'homediresaun', 
            'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
            'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
            'mediaancttl/English',  'detailmedia/*','projectancttl', 'projectancttl/*',
            'relatorionarativa', 'relatorionarativa/*', 'cartadiretor', 'cartadiretor/*',
            'profilediresaun', 'profilediresaun/*', 'homemediaancttl', '*/homemediaancttl', 
            '*/homemediaancttl/*', 'misaunvisaunmediaancttl', '*/misaunvisaunmediaancttl',
            'historiamedianancttl' , '*/historiamedianancttl' , 'albumancttl', '*/albumancttl', 
            'videoancttl', '*/videoancttl', 'profilediresaunancttl', 'profilediresaunancttl/*',
            'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 
            'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaancttl/40',
            'relatorionarativa/relatorionarativaancttl/60', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],

            'filtermediaancttl' => ['except' =>[ 'homediresaun', 
            'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
            'mediaancttl', 'mediaancttl/*', 'projectancttl', 'projectancttl/*',
            'relatorionarativa', 'relatorionarativa/*', 'channelyoutube', 'channelyoutube/*',
            'cartadiretor', 'cartadiretor/*', 'profilediresaun', 'profilediresaun/*',
            'homemediaancttl', '*/homemediaancttl', '*/homemediaancttl/*', 'misaunvisaunmediaancttl',
            '*/misaunvisaunmediaancttl','historiamedianancttl' ,  '*/historiamedianancttl', 'albumancttl', 
            '*/albumancttl', 'videoancttl', '*/videoancttl', 'profilediresaunancttl', 'profilediresaunancttl/*',
            'tabakudiresaun', 'tabakudiresaun/*', 'relatorionarativa/relatorionarativaancttl/40',
            'relatorionarativa/relatorionarativaancttl/60', '*/profile', '*/profilemedia','*/profilediretor/*', 
            '*/profilemediadiresaun', '*/profilediresaun/*' ,'*/tabakumedia', '*/detailtabaku/*', '*/albumtabaku', '*/videotabaku',
            '*/albumancttl', '*/videoancttl']],
            
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [
        'filterDiretor' => ['before' =>[ 'fullcalendar','fullcalendar/*', 'regulamentosistema', 'regulamentosistema/*',
        'regulamentosistemahamos', 'regulamentosistemahamos/*', 
        'regulamentosistematemporario', 'regulamentosistematemporario/*',
        'regulamentosistemahamoshotu','regulamentosistemahamoshotu/*',
        'akunancttl', 'akunancttl/*', 'akunancttlhamos', 'akunancttlhamos/*',
        'akunancttlhamoshotu', 'akunancttlhamoshotu/*', 
        'akunancttltemporario', 'akunancttltemporario/*',
        'akunancttlaktivo', 'akunancttlaktivo/*', 'absensidiresaun', 'absensidiresaun/*',
        'totalsaldodonator', 'totalsaldodonator/*', 'totalsaldodonatorpermanente', 'totalsaldodonatorpermanente/*',
        'totalsaldoancttl', 'totalsaldoancttl/*', 'kodenarativatheunion', 'kodenarativatheunion/*', 
        'diretorelatorionarativa', 'diretorelatorionarativa/*', 'diretormedia', 'diretormedia/*',
        'diretormedia/Indonesia', 'diretormedia/Portuguesa', 'diretormedia/Tetum', 'diretormedia/English',
        'hamosdiretormedia/Tetum', 'hamosdiretormedia/Indonesia', 'hamosdiretormedia/English', 
        'hamosdiretormedia/Portuguesa', 'diretorprojectancttl', 'diretorprojectancttl/*',
        'diretorchannelyoutube', 'diretorchannelyoutube/*', 'cartadiretorancttl', 'cartadiretorancttl/*',
        'misaunvisaunancttl', 'misaunvisaunancttl/*', 'historiaancttl', 'historiaancttl/*', 'akundiretor', 'akundiretor/*',
        'profilediretor', 'profilediretor/*', 'profilediresaundiretor', 'profilediresaundiretor/*', 
        'tabakudiretor', 'tabakudiretor/*', 'hamostabakudiretor/*', 'diretorelatorionarativa/relatorionarativaadministrasaun/60/*',
        'diretorelatorionarativa/relatorionarativaadministrasaun/40/*']],

        'filteradministrasaun' => ['before' =>[ 'homediresaun','homediresaun/*',
        'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
        'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
         'mediaancttl/English', 'detailmedia/*', 'saldodonatorancttl', 'saldodonatorancttl/*',
        'projectancttl', 'projectancttl/*', 'relatorionarativa', 'relatorionarativa/*',
        'printsaldodonator', 'printsaldodonator/*', 'printtotalsaldo', 'printtotalsaldo/*',
        'printsalarioancttl', 'printsalarioancttl/*', 'salariodiresaunancttl',
        'salariodiresaunancttl/*','cartadiretor', 'cartadiretor/*',
        'profilediresaun', 'profilediresaun/*', 'theunionrelatorionarativa', 'theunionrelatorionarativa/*',
        'profilediresaunancttl', 'profilediresaunancttl/*', 'tabakudiresaun', 'tabakudiresaun/detail/*',
        'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 'tabakudiresan/English',
        'relatorionarativa/relatorionarativaadministrasaun/40/*','relatorionarativa/relatorionarativaadministrasaun/60/*']],

        'filtertheunion' => ['before' =>[ 'homediresaun',
        'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
         'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
         'mediaancttl/English', 'detailmedia/*', 'projectancttl', 'projectancttl/*',
        'relatorionarativa', 'relatorionarativa/*','cartadiretor', 'cartadiretor/*',
        'profilediresaun', 'profilediresaun/*', 'profilediresaunancttl', 'profilediresaunancttl/*',
        'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa', 
        'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaancttl/40',
        'relatorionarativa/relatorionarativaancttl/60']],

        'filteradvokasia' => ['before' =>[ 'homediresaun',
        'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
        'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
        'mediaancttl/English',  'detailmedia/*', 'projectancttl', 'projectancttl/*',
        'relatorionarativa', 'relatorionarativa/*', 'cartadiretor', 'cartadiretor/*',
        'profilediresaun', 'profilediresaun/*', 'theunionrelatorionarativa', 'theunionrelatorionarativa/*', 'profilediresaunancttl',
        'profilediresaunancttl/*', 'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 
        'tabakudiresaun/Portuguesa', 'tabakudiresan/English', 'tabakudiresaun/detail/*', 
        'relatorionarativa/relatorionarativaancttl/40', 'relatorionarativa/relatorionarativaancttl/60']],

        'filterkampanha' => ['before' =>[ 'homediresaun',
        'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
        'mediaancttl', 'mediaancttl/Indonesia', 'mediaancttl/Portuguesa', 'mediaancttl/Tetum',
        'mediaancttl/English',  'detailmedia/*', 'projectancttl', 'projectancttl/*',
        'relatorionarativa', 'relatorionarativa/*', 'profilediresaun', 'profilediresaun/*',
        'cartadiretor', 'cartadiretor/*', 'profilediresaunancttl', 'profilediresaunancttl/*', 
        'tabakudiresaun', 'tabakudiresaun/Indonesia', 'tabakudiresaun/Tetum', 'tabakudiresaun/Portuguesa',
        'tabakudiresan/English', 'tabakudiresaun/detail/*', 'relatorionarativa/relatorionarativaancttl/40',
        'relatorionarativa/relatorionarativaancttl/60' ]],

        'filtermediaancttl' => ['before' =>[ 'homediresaun',
        'absensiloronloron', 'absensiloronloron/*', 'absensilokraik', 'absensilokraik/*',
        'mediaancttl', 'mediaancttl/*', 'projectancttl', 'projectancttl/*',
        'relatorionarativa', 'relatorionarativa/*', 'channelyoutube', 'channelyoutube/*',
        'cartadiretor', 'cartadiretor/*', 'profilediresaun', 'profilediresaun/*',
        'cartadiretor', 'cartadiretor/*','profilediresaunancttl', 'profilediresaunancttl/*',
        'tabakudiresaun', 'tabakudiresaun/*', 'relatorionarativa/relatorionarativaancttl/40',
        'relatorionarativa/relatorionarativaancttl/60']],
    ];
}
