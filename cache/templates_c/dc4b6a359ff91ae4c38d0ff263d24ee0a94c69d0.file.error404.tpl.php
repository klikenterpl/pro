<?php /* Smarty version Smarty-3.1.18, created on 2018-12-07 08:39:27
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_main\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198795c0a23afa3cf03-43075214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4b6a359ff91ae4c38d0ff263d24ee0a94c69d0' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_main\\error404.tpl',
      1 => 1544103900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198795c0a23afa3cf03-43075214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'cssFile' => 0,
    'lessFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'page' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0a23afae5906_05646905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0a23afae5906_05646905')) {function content_5c0a23afae5906_05646905($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\pro/data/functions\\function.W.php';
?><!doctype html>
	<html lang="pl">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="robots" content="INDEX, FOLLOW" />
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->description;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta']->value->keywords;?>
" />
        <meta name="copyright" content="Copyright (c) StronyMonki.pl" />
        <meta name="distribution" content="global" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css' />      
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadFrontCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
' />
		<?php } ?>	
		<?php  $_smarty_tpl->tpl_vars['lessFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lessFile']->_loop = false;
 $_from = resourceManager::loadFrontLESS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lessFile']->key => $_smarty_tpl->tpl_vars['lessFile']->value) {
$_smarty_tpl->tpl_vars['lessFile']->_loop = true;
?>
			<link rel='stylesheet/less' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['lessFile']->value;?>
' />
		<?php } ?>
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
		</script>	
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadFrontJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
"></script>
		<?php } ?>
		<title><?php echo $_smarty_tpl->tpl_vars['meta']->value->title;?>
</title>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		<meta name="google-site-verification" content="Tj02TsLThIz1GV-tN7CvD9vj-1xqkrCVLtyKfR9uxS8" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46637295-2', 'auto');
  ga('send', 'pageview');

</script>
	</head>
<body>
 
<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/01header-podstrona.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
		<div class="wm-mini-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="wm-breadcrumb">
							<?php echo smarty_function_W(array('name'=>'navigation','page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>

<li><?php echo $_smarty_tpl->tpl_vars['pages']->value->name;?>
</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section wm-404-fullbg">
				<div class="container">
					<div class="row">

						<!--// Fancy Title \\-->
						<div class="col-md-12">
							<div class="wm-fancy-title">
								<h2>404 Błąd strony</h2>
								<p>Wygląda na to, że ta strona nie istnieje lub nie jest aktualnie dostępna...</p>
							</div>
						</div>
						<!--// Fancy Title \\-->
						
						<div class="col-md-12">
							<div class="wm-404page">
								<h1>Za utrudnienia przepraszamy...</h1>
								<p>Jeżeli ta strona istniała wcześniej i jest dla Państwa ważna prosimy aby nas o tym poinformować <a href="#">w tym miejscu.</a></p>
								<a class="wm-button wm-bgcolor" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">powrót do strony głównej</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/11content-stopka.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/12login-register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/java.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body> 
</html>


<?php }} ?>
