<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:07
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\common\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78585c09317f0f7689-70398725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018534f55419a8435ccbcc54932f8fd51e5aed51' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\common\\alert.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78585c09317f0f7689-70398725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c09317f1425b4_96935422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c09317f1425b4_96935422')) {function content_5c09317f1425b4_96935422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\pro/data/functions\\function.L.php';
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
