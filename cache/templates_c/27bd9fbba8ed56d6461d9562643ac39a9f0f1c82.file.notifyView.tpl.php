<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:58:45
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\notify\notifyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168335c083c05d415c5-51335165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27bd9fbba8ed56d6461d9562643ac39a9f0f1c82' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\notify\\notifyView.tpl',
      1 => 1487793320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168335c083c05d415c5-51335165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c083c05d69507_86226550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c083c05d69507_86226550')) {function content_5c083c05d69507_86226550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
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
