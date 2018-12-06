<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:22
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\note_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87505c0839d29cb163-97443957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a62876fa7a51ca0ec637548cf78a075378c4b7f' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\note_modal.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87505c0839d29cb163-97443957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d29d50a6_10503401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d29d50a6_10503401')) {function content_5c0839d29d50a6_10503401($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><div id="notesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.modal.common.tpl.notes"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body" id="noteModalIframe">
		
	</div>
</div>	<?php }} ?>
