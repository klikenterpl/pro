<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:21
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225765c0839d1d18672-68035798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1857cd8b0671e42b9a43cbdf0a4f9a596d17a7c6' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\main.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225765c0839d1d18672-68035798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssFile' => 0,
    'HOME' => 0,
    'jsFile' => 0,
    'loggedIn' => 1,
    'configPomName' => 1,
    'bg' => 1,
    'loggedUser' => 1,
    'pins' => 1,
    'page_content' => 1,
    'SITE_PATH' => 1,
    'REQUEST' => 1,
    'icon' => 0,
    'lang' => 0,
    'pagesDB' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d201d175_94869665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d201d175_94869665')) {function content_5c0839d201d175_94869665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_L\')) include \'D:\\\\wamp\\\\www\\\\VIPstronymonki\\\\pro/data/functions\\\\function.L.php\';
?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = resourceManager::loadAdminCSS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
?ver=<?php echo config::get('revision');?>
">
		<?php } ?>						           
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<script type="text/javascript">
			window.HOME = "<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
";
			window.SUBDIR = "<?php echo @constant('SUBDIR');?>
";
			window.TEMPLATE = "<?php echo config::get('template');?>
";
			window.MAX_UPLOAD_FILE_SIZE = "<?php echo generate::returnBytes(@constant('MAX_UPLOAD_FILE_SIZE'));?>
";
		</script>
		<?php  $_smarty_tpl->tpl_vars['jsFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsFile']->_loop = false;
 $_from = resourceManager::loadAdminJS(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->key => $_smarty_tpl->tpl_vars['jsFile']->value) {
$_smarty_tpl->tpl_vars['jsFile']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>
?ver=<?php echo config::get('revision');?>
"></script>
		<?php } ?>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!--[if gte IE 8]><script src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/resources/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
		<title>WinduCMS - Admin</title>
	</head>

    <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'bg\'])) {$_smarty_tpl->tpl_vars[\'bg\'] = clone $_smarty_tpl->tpl_vars[\'bg\'];
$_smarty_tpl->tpl_vars[\'bg\']->value = config::get("backgroundAdmin".((string)$_smarty_tpl->tpl_vars[\'loggedIn\']->value->id)); $_smarty_tpl->tpl_vars[\'bg\']->nocache = true; $_smarty_tpl->tpl_vars[\'bg\']->scope = 0;
} else $_smarty_tpl->tpl_vars[\'bg\'] = new Smarty_variable(config::get("backgroundAdmin".((string)$_smarty_tpl->tpl_vars[\'loggedIn\']->value->id)), true, 0);?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

    <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'configPomName\'])) {$_smarty_tpl->tpl_vars[\'configPomName\'] = clone $_smarty_tpl->tpl_vars[\'configPomName\'];
$_smarty_tpl->tpl_vars[\'configPomName\']->value = "pins-".((string)$_smarty_tpl->tpl_vars[\'loggedIn\']->value->id); $_smarty_tpl->tpl_vars[\'configPomName\']->nocache = true; $_smarty_tpl->tpl_vars[\'configPomName\']->scope = 0;
} else $_smarty_tpl->tpl_vars[\'configPomName\'] = new Smarty_variable("pins-".((string)$_smarty_tpl->tpl_vars[\'loggedIn\']->value->id), true, 0);?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

    <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'pins\'])) {$_smarty_tpl->tpl_vars[\'pins\'] = clone $_smarty_tpl->tpl_vars[\'pins\'];
$_smarty_tpl->tpl_vars[\'pins\']->value = unserialize(config::get($_smarty_tpl->tpl_vars[\'configPomName\']->value)); $_smarty_tpl->tpl_vars[\'pins\']->nocache = true; $_smarty_tpl->tpl_vars[\'pins\']->scope = 0;
} else $_smarty_tpl->tpl_vars[\'pins\'] = new Smarty_variable(unserialize(config::get($_smarty_tpl->tpl_vars[\'configPomName\']->value)), true, 0);?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>


    <body <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if ($_smarty_tpl->tpl_vars[\'bg\']->value!=null) {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
style="background-color: #<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'bg\']->value;?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
"<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
>
        <noscript><div class="alert">Your browser does not support JavaScript!</div></noscript>
        <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->getSubTemplate (\'common/note_modal.tpl\', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

        <div class="alert-waiting alert-popup alert-popup-blue"><img src="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'HOME\']->value;?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
app/plugins/admin/resources/img/ajax-loader.gif" style="margin-top:2px;"></div>
        <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->getSubTemplate (\'common/alert.tpl\', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

        <div id="container" <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (config::get("smallSidebar".((string)$_smarty_tpl->tpl_vars[\'loggedUser\']->value->id))==1) {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
class="sidebar-small"<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
>
            <div id="sidebar">

                <?php echo $_smarty_tpl->getSubTemplate ('common/page_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


            </div>
            <div id="content" <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'pins\']->value)) {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
class="content-margin-right"<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
>
                <div class="top-right-menu">
                    <div class="user-dropdown">
                        <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->getSubTemplate (\'common/top_right_buttons.tpl\', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

                        <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->getSubTemplate (\'common/tabs.tpl\', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

                    </div>
                </div>
                <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars[\'page_content\']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

                <div id="footer">
                    <div class="bottom-panel">
                        <div class="row-fluid">
                            <div class="span5 mobileHidden">
                                <a href="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'HOME\']->value;?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
admin/mainDo/toggleConfig/smallSidebar<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'loggedUser\']->value->id;?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
/" class="toggleSidebar" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo smarty_function_L(array(\'key\'=>\'admin.sidebar\'),$_smarty_tpl);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
"><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (config::get("smallSidebar".((string)$_smarty_tpl->tpl_vars[\'loggedUser\']->value->id))==1) {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<i class="fa fa-chevron-right icon-dark"></i><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php } else { ?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<i class="fa fa-chevron-left icon-dark"></i><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
</a>
                                <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if (!cache::isCached($_smarty_tpl->tpl_vars[\'SITE_PATH\']->value,3600)) {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'SITE_PATH\']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo cache::write($_smarty_tpl->tpl_vars[\'SITE_PATH\']->value,round(baseFile::getSize($_tmp1)/1048576,2),\'disSize\');?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

                                <i class="color-icons icons-network-ip-local">&nbsp;</i>&nbsp;<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo generate::ip();?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
 &nbsp;&nbsp;
                                <i class="color-icons icons-database icon-margin">&nbsp;</i><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo cache::read($_smarty_tpl->tpl_vars[\'SITE_PATH\']->value);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
 MB &nbsp;&nbsp;
                                <span class="smallWidthHidden">
                                    <i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo round(baseFile::getSize(@constant(\'FILE_DB_PATH\'))/1048576,2);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
 MB &nbsp;&nbsp;
                                </span>
                            </div>
                            <div class="span2 mobileHidden" style="text-align:center;">
                                <div class="bottom-center-menu">
                                    <a class="top" href="#top" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo smarty_function_L(array(\'key\'=>"admin.main.tpl.up"),$_smarty_tpl);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
"><i class="fa fa-arrow-circle-up icon-dark"></i></a>
                                    <?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php if ($_smarty_tpl->tpl_vars[\'REQUEST\']->value->getVariable(\'subpage\')!=\'\') {?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'HOME\']->value;?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
admin/mainDo/pinIt/<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo $_smarty_tpl->tpl_vars[\'REQUEST\']->value->getVariable(\'subpage\');?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
/" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php echo smarty_function_L(array(\'key\'=>\'admin.pinit\'),$_smarty_tpl);?>
/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>
"><i class="fa fa-tag icon-dark" ></i></a><?php echo '/*%%SmartyNocache:225765c0839d1d18672-68035798%%*/<?php }?>/*/%%SmartyNocache:225765c0839d1d18672-68035798%%*/';?>

                                </div>
                            </div>

                            <div class="span5">
                                <div class="btn-group dropup">
                                    <?php if (isset($_smarty_tpl->tpl_vars['icon'])) {$_smarty_tpl->tpl_vars['icon'] = clone $_smarty_tpl->tpl_vars['icon'];
$_smarty_tpl->tpl_vars['icon']->value = pagesDB::getMainImageEkey(@constant('LANG'),'icon'); $_smarty_tpl->tpl_vars['icon']->nocache = null; $_smarty_tpl->tpl_vars['icon']->scope = 0;
} else $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(pagesDB::getMainImageEkey(@constant('LANG'),'icon'), null, 0);?>
                                    <span class="btn dropdown-toggle" data-toggle="dropdown"><?php if (!empty($_smarty_tpl->tpl_vars['icon']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
/100/100/original/"> <?php }?><?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>
</span>
                                    <ul class="dropdown-menu">
                                      <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagesDB']->value->getPagesByParent('0',null,'position ASC','*',null,null,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setLanguage/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
/">
                                                <img src='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/flags/<?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value->name);?>
.png' class="flag-icon"> <?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>

                                            </a>
                                        </li>
                                      <?php } ?>
                                    </ul>
                                </div>
                                <div class="admin-themplates">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/999/" style="background-color:#999;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/292929/" style="background-color:#292929;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/362c59/" style="background-color:#362c59;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/209a54/" style="background-color:#209a54;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/246bad/" style="background-color:#246bad;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/9b8e87/" style="background-color:#9b8e87;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/b36f45/" style="background-color:#b36f45;"></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/setBackground/932727/" style="background-color:#932727;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-desc">
                    <?php echo smarty_function_L(array('key'=>"admin.main.tpl.design"),$_smarty_tpl);?>
 <strong>Adam Czajkowski</strong><br>Windu <span class="badge badge-white">3.1</span> rev: <strong><?php echo config::get('revision');?>
</strong>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>
