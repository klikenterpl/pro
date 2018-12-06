<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:07
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\common\note_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104295c09317f0d84d7-79873981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4b9e150566b2e3de3c25baf2b120a9068600d78' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\common\\note_modal.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104295c09317f0d84d7-79873981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c09317f0e1cf1_19444155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c09317f0e1cf1_19444155')) {function content_5c09317f0e1cf1_19444155($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\pro/data/functions\\function.L.php';
?><div id="notesModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_L(array('key'=>"admin.modal.common.tpl.notes"),$_smarty_tpl);?>
</h3>
	</div>
	<div class="modal-body" id="noteModalIframe">
		
	</div>
</div>	<?php }} ?>
