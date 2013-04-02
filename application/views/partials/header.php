<div id="hdrwrap">
	<div class="innerhdr">
	<h1>
		<a href="<?php echo site_url('home');?>" title="CI-EXT" class="logo">CI-EXT</a>
		<div class="auth">
			<?/* if ($logged) : ?>
			<?echo lang('header_welcome'); ?> <strong><? echo $user_name; ?></strong>
			<span>|</span>
			<a href="#" id="logout-lnk"><?echo lang('header_logout'); ?></a>
			<? else : */?>
			<div style="display:inline; float:left;">
			<a href="#" id="signup-lnk"><? echo lang('header_signup'); ?></a>
			<span>|</span>
			<a href="#" id="login-lnk" onclick="javascript:showLoginForm();return false;"><? echo lang('header_signin'); ?></a>
			</div>
			<?/* endif; */?>
			<div id="alternative_languages">
			<a href="<?php echo site_url('en');?>"><img src="/assets/images/icons/us.png" title="English"/></a>
			<a href="<?php echo site_url('vi');?>"><img src="/assets/images/icons/vn.png" title="Tiếng Việt"/></a>
			</div>
		</div>
	</h1>
	</div>
	<div class="invertedshiftdown">
		<div class="invertedshiftdown-inner">
		<ul>
		<li <? echo set_active_menu($active_mnu, "home"); ?>><a href="<?php echo site_url('home');?>" title="<? echo lang('mnu_home'); ?>"><? echo lang('mnu_home'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "forms"); ?>><a href="<?php echo site_url('forms'); ?>" title="<? echo lang('mnu_forms'); ?>"><? echo lang('mnu_forms'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "types"); ?>><a href="<?php echo site_url('types'); ?>" title="<? echo lang('mnu_types'); ?>"><? echo lang('mnu_types'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "accbook"); ?>><a href="<?php echo site_url('accbook'); ?>" title="<? echo lang('mnu_accbook'); ?>"><? echo lang('mnu_accbook'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "reports"); ?>><a href="<?php echo site_url('reports'); ?>" title="<? echo lang('mnu_reports'); ?>"><? echo lang('mnu_reports'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "options"); ?>><a href="<?php echo site_url('options'); ?>" title="<? echo lang('mnu_options'); ?>"><? echo lang('mnu_options'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "help"); ?>><a href="<?php echo site_url('pages/help'); ?>" title="<? echo lang('mnu_help'); ?>"><? echo lang('mnu_help'); ?></a></li>
		<li <? echo set_active_menu($active_mnu, "contact"); ?>><a href="<?php echo site_url('pages/contact'); ?>" title="<? echo lang('mnu_contact'); ?>"><? echo lang('mnu_contact'); ?></a></li>
		</ul>
		
		<?/*
		<form id="myform">
		<input type="text" class="textinput" /> <input class="submit" type="submit" value="Find" />
		</form>*/?>
		</div>
	</div>
	<br style="clear: both;" />
</div>