<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 19:39:34
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\themes\katalog-firm\tpl_common\03content-polecane-firmy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167355c0d6166caf3f6-90979043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbdd8389aa5d67a2e2dcf510d03ae2fb4a3bc92e' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\themes\\katalog-firm\\tpl_common\\03content-polecane-firmy.tpl',
      1 => 1544277539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167355c0d6166caf3f6-90979043',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0d6166cc1569_09540205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d6166cc1569_09540205')) {function content_5c0d6166cc1569_09540205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.W.php';
?><div class="wm-main-content">
    
    			<div class="wm-main-section wm-listing-full">
				<div class="container">
					<div class="row">

						<div class="row">
							<!--// Fancy Title \\-->
							<div class="col-md-12">
								<div class="wm-fancy-title">
									<h2>Polecane firmy</h2>
														<div class="col-md-12 wm-button-style">
							<a href="#" class="wm-btn-style-three wm-bgcolor"><i class="flaticon-search"></i> Wyświetl wszystkie polecane firmy</a>
						</div>
								</div>
							</div>
							<!--// Fancy Title \\-->

							<!--// Recent Listing Grid \\-->
							<div class="col-md-12">
								<div class="awm-listing wm-recent-listing">
									<ul class="row list-unstyled">


<?php echo smarty_function_W(array('name'=>'polecanefirmy','newsGroup'=>1323,'count'=>"6",'lengthTitle'=>'','showTitle'=>true,'showContent'=>true),$_smarty_tpl);?>


		
	
									</ul>
								</div>
							</div>
							<!--// Recent Listing Grid \\-->
						</div>

					</div>
				</div>
			</div><?php }} ?>
