<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:23
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\images_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186945c0839d38abb54-13603630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cc46736a1d6d33512b66cc0628ed55ccbe9a402' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\images_modal.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186945c0839d38abb54-13603630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d38c4339_31466464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d38c4339_31466464')) {function content_5c0839d38c4339_31466464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><div id="imagesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addimages"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/images/modalUploader/<?php echo $_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id');?>
/" style="height: 100%"></iframe>
	</div>
</div>	<?php }} ?>