<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:09
         compiled from "G:\wamp\www\pro\app\plugins\admin\templates\common\widget_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136445c093181ae1142-02933798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bb5df5cbc09efcaa4e964ff703a64f48508f1d' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\app\\plugins\\admin\\templates\\common\\widget_icons.tpl',
      1 => 1544103897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136445c093181ae1142-02933798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c093181b2b5d3_07211692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c093181b2b5d3_07211692')) {function content_5c093181b2b5d3_07211692($_smarty_tpl) {?>	<?php if (preg_match('/menuu*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>
    	<i class="color-icons icons-property icon-margin"> </i>
    <?php } elseif (preg_match('/sliderr*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-projection-screen icon-margin"> </i>	
    <?php } elseif (preg_match('/search*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-magnifier-medium icon-margin"> </i>	
    <?php } elseif (preg_match('/user*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-user-gray icon-margin"> </i>	
    <?php } elseif (preg_match('/tags*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-price-tag icon-margin"> </i>	
    <?php } elseif (preg_match('/content*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>	
    	<i class="color-icons icons-clipboard-text icon-margin"> </i>			    			    			    			    	
    <?php } else { ?>
    	<i class="color-icons icons-rocket icon-margin"> </i>	
	<?php }?>      	
<?php }} ?>
