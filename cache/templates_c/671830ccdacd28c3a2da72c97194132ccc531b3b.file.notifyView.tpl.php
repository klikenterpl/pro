<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:33
         compiled from "G:\wamp\www\pro\data\widgets\notify\notifyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252895c093199c245d3-01134188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671830ccdacd28c3a2da72c97194132ccc531b3b' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\widgets\\notify\\notifyView.tpl',
      1 => 1544103902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252895c093199c245d3-01134188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c093199c4b6b2_20471783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c093199c4b6b2_20471783')) {function content_5c093199c4b6b2_20471783($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'G:\\wamp\\www\\pro/data/functions\\function.L.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']!='') {?>
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessageNegative']),$_smarty_tpl);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']!='') {?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<?php echo smarty_function_L(array('key'=>$_smarty_tpl->tpl_vars['data']->value['notifyMessagePositive']),$_smarty_tpl);?>

	</div>
<?php }?>
<?php }} ?>
