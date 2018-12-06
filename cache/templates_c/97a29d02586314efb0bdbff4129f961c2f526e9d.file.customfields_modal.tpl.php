<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:08
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\common\customfields_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165365c0931800bca96-60514568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a29d02586314efb0bdbff4129f961c2f526e9d' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\common\\customfields_modal.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165365c0931800bca96-60514568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0931800cab47_39959812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0931800cab47_39959812')) {function content_5c0931800cab47_39959812($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\pro/data/functions\\function.L.php';
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
