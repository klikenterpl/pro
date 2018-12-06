<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:09
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\ajax\widgetsChoseWidgetModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290555c093181a82725-08474982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86351e700841f1cc0103b281f84dcd2b80f04f56' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\ajax\\widgetsChoseWidgetModal.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290555c093181a82725-08474982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetsList' => 0,
    'HOME' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c093181ac45a4_40655853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c093181ac45a4_40655853')) {function content_5c093181ac45a4_40655853($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\pro/data/functions\\function.L.php';
?><div class="pad-big">
	<div class="progress progress-striped">
		 <div class="bar" style="width: 10%;"></div>
	</div>
</div>
<div class="bottomForm">			
	<table class="table table-striped tablesort">
	  <tbody>
	  <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgetsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['widget']->key;
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseOptions/<?php echo $_smarty_tpl->tpl_vars['widget']->value;?>
/"><?php echo $_smarty_tpl->getSubTemplate ('common/widget_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('themename'=>$_smarty_tpl->tpl_vars['widget']->value), 0);?>
 <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>
</a></td>
			<td><?php echo smarty_function_L(array('key'=>"widgets.".((string)$_smarty_tpl->tpl_vars['widget']->value).".smallhelp"),$_smarty_tpl);?>
</td>
			<td>
				<div class="buttons">
					<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/ajax/widgets/choseOptions/<?php echo $_smarty_tpl->tpl_vars['widget']->value;?>
/"><i class="fa fa-check-circle icon-blue">&nbsp;</i></a>
				</div>
			</td>
		</tr>
	  <?php } ?>   
	  </tbody>
	</table>	
</div>
	<?php }} ?>
