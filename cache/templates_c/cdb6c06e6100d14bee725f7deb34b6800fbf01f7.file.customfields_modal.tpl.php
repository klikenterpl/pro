<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:23
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\customfields_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125735c0839d3940056-95690179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb6c06e6100d14bee725f7deb34b6800fbf01f7' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\customfields_modal.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125735c0839d3940056-95690179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d394ef39_10968295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d394ef39_10968295')) {function content_5c0839d394ef39_10968295($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><div id="customFielsdModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.customfields.modal.tpl.addfields"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/customfields/index/"></iframe>
	</div>
</div>	<?php }} ?>
