<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 19:39:37
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\templates\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272165c0d61690e3806-66080551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae873195f1320c1c8ee2b2d826ed815d37e2b019' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\templates\\error404.tpl',
      1 => 1544277537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272165c0d61690e3806-66080551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0d6169128861_83214052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d6169128861_83214052')) {function content_5c0d6169128861_83214052($_smarty_tpl) {?><?php echo header('HTTP/1.x 404 Not Found');?>

<?php echo header("Status: 404 Not Found");?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/reset.css'>
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/css/404.css'>
		<title>Error 404</title>
	</head>
<body>
	<div class="errorMessage">
		<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/resources/img/icon404.png"><br>
		Windu <strong>Error 404</strong>
		<p class="small">Page not exists! <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Home page</a></p>
	</div>
</body> 
</html><?php }} ?>
