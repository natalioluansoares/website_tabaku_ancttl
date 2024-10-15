<div class="container-fluid">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li class="has-submenu">
                <a href="<?= base_url(lang('homemediaancttl.homeUrlHome')) ?>"><i class="mdi mdi-airplay"></i><?php echo lang('homemediaancttl.sidebarHome');?></a>
            </li>
            <li class="has-submenu">
                <a href="#"><i class="ion-ios7-world"></i><?php echo lang('homemediaancttl.sidebarAbout');?></a>
                <ul class="submenu">
                    <li><a href="<?= base_url(lang('homemediaancttl.homeUrlMissionVision'))?>"><?= lang('homemediaancttl.sidebarSubAbout')?></a></li>
                    <li><a href="<?= base_url(lang('homemediaancttl.homeUrlHistoria'))?>"><?= lang('homemediaancttl.sidebarSubHistory')?></a></li>
                    <li><a href="<?= base_url(lang('homemediaancttl.homeUrlProfileAncttl'))?>"><?= lang('homemediaancttl.sidebarLider')?></a></li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#"><i class="fas fa fa-folder-open"></i><?php echo lang('homemediaancttl.sidebarWork');?></a>
                <ul class="submenu megamenu">
                    <li>
                        <ul>
                            <li><a><strong><?= lang('homemediaancttl.sidebarIssues') ?></strong></a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlTabaku')) ?>"><?= lang('homemediaancttl.sidebarTabaku') ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><a><strong>Media ANCTTL</strong></a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlTabakuAlbum'))?>">Album ANCT-TL</a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlVideoTabaku'))?>">Video ANCT-TL</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#"><i class="fas fa fa-newspaper-o"></i><?php echo lang('homemediaancttl.sidebarNews');?></a>
                <ul class="submenu megamenu">
                    <li>
                        <ul>
                            <li><a><strong><?= lang('homemediaancttl.sidebarNews')?></strong></a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlMedia'))?>"><?= lang('homemediaancttl.homeMedia')?></a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><a><strong>Media ANCTTL</strong></a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlAlbum'))?>">Album ANCT-TL</a></li>
                            <li><a href="<?= base_url(lang('homemediaancttl.homeUrlVideo'))?>">Video ANCT-TL</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div> 