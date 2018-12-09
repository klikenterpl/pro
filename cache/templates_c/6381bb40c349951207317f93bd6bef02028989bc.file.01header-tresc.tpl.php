<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:16:58
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\themes\katalog-firm\tpl_common\01header-tresc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88685c0ceb9a485115-30896697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6381bb40c349951207317f93bd6bef02028989bc' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\themes\\katalog-firm\\tpl_common\\01header-tresc.tpl',
      1 => 1544277539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88685c0ceb9a485115-30896697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'TEMPLATE_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0ceb9a4963e7_02941873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0ceb9a4963e7_02941873')) {function content_5c0ceb9a4963e7_02941873($_smarty_tpl) {?>
					<div class="wm-topstrip">
						<div class="row">
							<div class="col-md-6">
								<ul class="wm-stripinfo">
									<li><i class="fa wm-color fa-pencil"></i><a href="formularz">formularz kontaktowy</a></li>
									<li><i class="fa wm-color fa-paper-plane-o"></i> <a href="mailto:name@email.com">biuro@stronymonki.pl</a></li>
									<!---<li><i class="fa wm-color fa-usd"></i> <a href="#">usd <i class="fa fa-caret-down"></i></a>
										<div class="wm-usd">
											<a href="#"><i class="fa fa-dollar"></i> Usd</a>
											<a href="#"><i class="fa fa-diamond"></i> Rupy</a>
										</div>
									</li>--->
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="wm-login-link">
									<li><a href="#" data-toggle="modal" data-target="#myModalsix">Zaloguj się</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModalseven">Zarejestruj się</a></li>
									<li><a href="add-listing-step-1.html" class="wm-strip-btn wm-bgcolor">Dodaj firmę do katalogu</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="wm-mainheader">
						<div class="row">
							<div class="col-md-3"><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" class="wm-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_HOME']->value;?>
/images/logo.svg" alt=""></a></div>
							<div class="col-md-9">
								<nav class="navbar navbar-default">
								    <div class="navbar-header">
								      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
								        <span class="sr-only">Nawigacja monki.pl</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								      </button>
								    </div>
								    <div class="collapse navbar-collapse" id="navbar-collapse-1">
								      <ul class="nav navbar-nav">
								        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Katalog firm</a>
								        	<ul class="wm-dropdown-menu">
								        		<li><a href="index.html">Katalog Urzędów i Instytucji</a></li>
								        		<li><a href="index-two.html">Katalog firm</a></li>
								        		<li><a href="index-two.html">Dodaj wpis do katalogu</a></li>
								        	</ul>
								        </li>
								        <li><a href="#">Powiat moniecki</a>
								        	<ul class="wm-dropdown-menu">
								        		<li><a href="all-style-list.html">Agroturystyka w powiecie monieckim</a></li>
								        		<li><a href="all-style-list.html">Zabytki</a></li>
								        		<li><a href="all-styles-grid.html">Komunikacja PKS / PKP w powiecie</a></li>
								        		<li><a href="add-listing-step-1.html">Msze święte i nabożeństwa</a></li>
								        		<li><a href="add-listing-step-2.html">Wydarzenia i imprezy</a></li>
								        		<li><a href="add-listing-step-3.html">Służba zdrowia</a></li>
								        		<li><a href="listing-by-location.html">Forum</a></li>
								        	</ul>
								        </li>
								        
								        <li><a href="#">Twoja strona</a>
								        	<ul class="wm-dropdown-menu">
								        		<li><a href="pricing-plans.html">Utwórz stronę internetową</a></li>
								        		<li><a href="partner.html">Utwórz Sklep internetowy</a></li>
								        		<li><a href="faqs.html">Zareklamuj firmę</a></li>
								        		<li><a href="our-team.html">Cennik</a></li>
								        	</ul>
								        </li>
								        <li><a href="#">Ogłoszenia</a>
								        	<ul class="wm-dropdown-menu">
								        		<li><a href="blog-with-sidebar.html">Przeglądaj</a></li>
								        		<li><a href="blog.html">Dodaj bezpłatne ogłoszenie</a></li>
								        	</ul>
								        </li>
								        
								        <li><a href="contact-us.html">Kontakt</a>
										<ul class="wm-dropdown-menu">
											<li><a href="#">Napisz do nas</a></li>
											<li><a href="#">Zareklamuj się</a></li>
										</ul>
										</li>
										<li><a href="#">Przetargi</a></li>
								      </ul>
								    </div>
								</nav>
								<form class="wm-search">
									<input type="text" value="Wyszukaj" onblur="if(this.value == '') { this.value ='Search'; }" onfocus="if(this.value =='Search') { this.value = ''; }">
									<input type="submit" value=""> <i class="fa fa-long-arrow-right"></i>
								</form>
							</div>
						</div>
					</div><?php }} ?>
