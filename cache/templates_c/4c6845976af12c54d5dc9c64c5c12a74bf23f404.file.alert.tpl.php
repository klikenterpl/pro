<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:22
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168475c0839d29ddd33-53128415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6845976af12c54d5dc9c64c5c12a74bf23f404' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168475c0839d29ddd33-53128415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d2a25699_96131107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d2a25699_96131107')) {function content_5c0839d2a25699_96131107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')!=null) {?>
<div class="alert-top alert-popup alert-popup-green">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mp')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')!=null) {?>
<div class="alert-top alert-popup alert-popup-red">
	<strong><i class="fa fa-times-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mn')),$_smarty_tpl);?>
</strong>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')!=null) {?>
<div class="alert-top alert-popup alert-popup-blue">
	<strong><i class="fa fa-info-circle "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['REQUEST']->value->getVariable('mi')),$_smarty_tpl);?>
</strong>
</div>
<?php }?>
<div class="alert-top alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success'),$_smarty_tpl);?>
</strong>
</div>
<div class="alert-top-autosave alert-popup alert-popup-green" style="display:none;">
	<strong><i class="icon-ok "></i>&nbsp;&nbsp;<?php echo smarty_function_L(array('key'=>'admin.message.success.autosave'),$_smarty_tpl);?>
</strong>
</div>


<?php }} ?>
