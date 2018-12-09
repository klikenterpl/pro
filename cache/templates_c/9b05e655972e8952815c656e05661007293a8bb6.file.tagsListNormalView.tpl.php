<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:19:07
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\tagsListNormal\tagsListNormalView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237365c0cec1b319d15-30363234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b05e655972e8952815c656e05661007293a8bb6' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\tagsListNormal\\tagsListNormalView.tpl',
      1 => 1544277541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237365c0cec1b319d15-30363234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'data' => 0,
    'tags' => 0,
    'tag' => 0,
    'HOME' => 0,
    'urlKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0cec1b3e5470_18481751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0cec1b3e5470_18481751')) {function content_5c0cec1b3e5470_18481751($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['params']->value['count'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['count'] = config::get('tagsCount');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssUl'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssUl'] = 'tagsList';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssLi'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssLi'] = '';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showCount'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showCount'] = true;?><?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['urlKey'])) {$_smarty_tpl->tpl_vars['urlKey'] = clone $_smarty_tpl->tpl_vars['urlKey'];
$_smarty_tpl->tpl_vars['urlKey']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->get($_smarty_tpl->tpl_vars['params']->value['targetPage'],'urlKey'); $_smarty_tpl->tpl_vars['urlKey']->nocache = null; $_smarty_tpl->tpl_vars['urlKey']->scope = 0;
} else $_smarty_tpl->tpl_vars['urlKey'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->get($_smarty_tpl->tpl_vars['params']->value['targetPage'],'urlKey'), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['tags'])) {$_smarty_tpl->tpl_vars['tags'] = clone $_smarty_tpl->tpl_vars['tags'];
$_smarty_tpl->tpl_vars['tags']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllTags(null,$_smarty_tpl->tpl_vars['params']->value['count']); $_smarty_tpl->tpl_vars['tags']->nocache = null; $_smarty_tpl->tpl_vars['tags']->scope = 0;
} else $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllTags(null,$_smarty_tpl->tpl_vars['params']->value['count']), null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
	<ul class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssUl'];?>
">
	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
	  <li class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssLi'];?>
">
	 	<?php if ($_smarty_tpl->tpl_vars['params']->value['showCount']) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['tag']->value['count'];?>
</span> <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['urlKey']->value;?>
/<?php echo base64_encode(generate::cleanLinkKey($_smarty_tpl->tpl_vars['tag']->value['name']));?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['tag']->value['name']);?>
</a>
	  </li>
	<?php } ?>
	</ul>
<?php } else { ?>
	<div class="pad">
		<?php echo smarty_function_L(array('key'=>"content.list.show.noresults"),$_smarty_tpl);?>

	</div>		
<?php }?><?php }} ?>
