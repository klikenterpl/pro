<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:54
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_views\przekierowanie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251975c0931ae93f376-75627826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393f32e35c80b0aad0fd0299b12cb2638b3116f6' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_views\\przekierowanie.tpl',
      1 => 1544105910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251975c0931ae93f376-75627826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0931ae997b96_21603701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0931ae997b96_21603701')) {function content_5c0931ae997b96_21603701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\pro/data/functions\\function.W.php';
?><?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/01header-strona.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_W(array('name'=>'notify'),$_smarty_tpl);?>

		
		<style type="text/css">
			body{overflow: hidden;}
		</style>
		<div class="wm-main-content">

	
			<div class="wm-main-section">
					<iframe frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Stronawww_string;?>
">
						Twoja przeglądarka nie obsługuje ramek pływających.
					</iframe>
			</div>
		</div>






<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/10content-newsletter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/11content-stopka.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/12login-register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/java.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
