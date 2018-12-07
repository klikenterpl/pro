<?php /* Smarty version Smarty-3.1.18, created on 2018-12-07 15:10:04
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273785c0a7f3cd5b4e7-98577658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2685f92f98d9e4ab240fe2b45720bfddd6fa7d7' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\login.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273785c0a7f3cd5b4e7-98577658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0a7f3cd78709_16192629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0a7f3cd78709_16192629')) {function content_5c0a7f3cd78709_16192629($_smarty_tpl) {?>	<div class="loginbox">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/logo-login<?php echo license::get();?>
.png">
		<div class="loginbox-white">
		<?php echo $_smarty_tpl->getSubTemplate ('common/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

		</div>
		<p class="text-shadow">Windu 3.1 rev. <?php echo config::get('revision');?>
</p>
	</div>
<?php }} ?>
