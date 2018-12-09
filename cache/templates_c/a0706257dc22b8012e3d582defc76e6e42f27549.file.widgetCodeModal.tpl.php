<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:18:16
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\ajax\widgetCodeModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253155c0cebe862ddd8-62333742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0706257dc22b8012e3d582defc76e6e42f27549' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\ajax\\widgetCodeModal.tpl',
      1 => 1544277537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253155c0cebe862ddd8-62333742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetCode' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0cebe8665275_86999154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0cebe8665275_86999154')) {function content_5c0cebe8665275_86999154($_smarty_tpl) {?><div class="pad-big">
	<div class="progress progress-striped">
		 <div class="bar" style="width: 100%;"></div>
	</div>
</div>
<div class="pad-big widgetCode">
	<h4><?php echo $_smarty_tpl->tpl_vars['widgetCode']->value;?>
</h4>
</div>
<div class="bottomForm">
	<div class="form-actions" style="text-align:center;">
		<a href="#" onclick="parent.editorInsertText('<?php echo $_smarty_tpl->tpl_vars['widgetCode']->value;?>
'); parent.$('#widgetsModal').modal('hide');" class="btn btn-primary">Dodaj kod na strone</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseWidget/" class="btn">Anuluj</a>		
	</div>
</div>	

<?php }} ?>
