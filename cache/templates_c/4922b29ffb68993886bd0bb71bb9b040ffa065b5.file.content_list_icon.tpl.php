<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:23
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\content_list_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306895c0839d36ca212-28693949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4922b29ffb68993886bd0bb71bb9b040ffa065b5' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\content_list_icon.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306895c0839d36ca212-28693949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'name' => 0,
    'HOME' => 0,
    'id' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d37728b6_99996811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d37728b6_99996811')) {function content_5c0839d37728b6_99996811($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_LANG_CATALOG) {?>
    <?php ob_start();?><?php echo strtolower($_smarty_tpl->tpl_vars['name']->value);?>
<?php $_tmp2=ob_get_clean();?><?php if (file_exists("./app/plugins/admin/resources/img/flags/".$_tmp2.".png")) {?>
        <img src='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
app/plugins/admin/resources/img/flags/<?php echo strtolower($_smarty_tpl->tpl_vars['name']->value);?>
.png' class="flag-icon">
    <?php } else { ?>
        <img src='<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['id']->value,'icon');?>
/16/11/original/' class="flag-icon">
    <?php }?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_CATALOG) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "folder-horizontal"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("folder-horizontal", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_GALLERY) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "photo-album-blue"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("photo-album-blue", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_NEWS_GROUP) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "calendar-list"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("calendar-list", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_PAGE) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "notebook"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("notebook", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_NEWS) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "document-stamp"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("document-stamp", null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==pagesDB::TYPE_URL) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "document-globe"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("document-globe", null, 0);?>
    <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars["icon"])) {$_smarty_tpl->tpl_vars["icon"] = clone $_smarty_tpl->tpl_vars["icon"];
$_smarty_tpl->tpl_vars["icon"]->value = "document-medium"; $_smarty_tpl->tpl_vars["icon"]->nocache = null; $_smarty_tpl->tpl_vars["icon"]->scope = 0;
} else $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable("document-medium", null, 0);?>
    <?php }?>
    <i class="color-icons icons-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 icon-margin"> </i>
<?php }?>

<?php }} ?>
