<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:25
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\ajax\filesModal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211365c0839d5f11974-02820354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6086006f0a72617e3e6d78589efe756feca40e0f' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\ajax\\filesModal.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211365c0839d5f11974-02820354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
    'files' => 0,
    'file' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d60be483_92495442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d60be483_92495442')) {function content_5c0839d60be483_92495442($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/files_multiuploader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('bucket'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id')), 0);?>


<table class="table table-striped tablesort">
	<thead>
	<tr>
		<th><?php echo smarty_function_L(array('key'=>"admin.filesmodal.tpl.name"),$_smarty_tpl);?>
</th>
		<th><?php echo smarty_function_L(array('key'=>"admin.filesmodal.tpl.size"),$_smarty_tpl);?>
</th>
		<th></th>
	</tr>
	</thead>
  <tbody> 
  <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
	<tr <?php if ($_smarty_tpl->tpl_vars['file']->value->id==$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id')) {?>class="active"<?php }?>>
		<td><i class="color-icons icons-box icon-margin">&nbsp;</i><?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
</td>
		<td><?php echo round($_smarty_tpl->tpl_vars['file']->value->size/1024,0);?>
</td>
		<td class="align-right">
			<?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('id')!='main') {?>
				<a href="#" class="label label-inverse" onclick="parent.editorInsertText('<a href=<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
file/original/<?php echo $_smarty_tpl->tpl_vars['file']->value->ekey;?>
/><?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
</a>'); parent.$('#filesModal').modal('hide');">Link Statyczny</a>
				<a href="#" class="label label-info" onclick="parent.editorInsertText('<a href=<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
filetemp/{{fileTempController::getTempKey(<?php echo $_smarty_tpl->tpl_vars['file']->value->ekey;?>
)}}/><?php echo $_smarty_tpl->tpl_vars['file']->value->name;?>
</a>'); parent.$('#filesModal').modal('hide');">Link Dynamiczny</a>
			<?php }?>	
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/tools/deleteFile/<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
/"><i class="fa fa-times-circle icon-red">&nbsp;</i></a>
			
		</td>
	</tr>
  <?php } ?>   
  </tbody>
</table>
 
<?php }} ?>
