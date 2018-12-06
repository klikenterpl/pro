<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:23
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\widgets_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71115c0839d38cd323-51171626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eaabeb84aeac373ea29e85e4dc2afa9e451dab1' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\widgets_modal.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71115c0839d38cd323-51171626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d38dcb26_71619452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d38dcb26_71619452')) {function content_5c0839d38dcb26_71619452($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><div id="widgetsModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addwidget"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseWidget/"></iframe>
	</div>
</div>	<?php }} ?>
