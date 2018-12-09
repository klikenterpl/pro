<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:15:52
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\widget_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239675c0ceb58f23ca4-69481516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eff4978126fe8681cfcc5a05d878810104e6a61' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\widget_icons.tpl',
      1 => 1544277537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239675c0ceb58f23ca4-69481516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0ceb59050fb0_83353097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0ceb59050fb0_83353097')) {function content_5c0ceb59050fb0_83353097($_smarty_tpl) {?>	<?php if (preg_match('/menuu*/',$_smarty_tpl->tpl_vars['themename']->value)) {?>
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
