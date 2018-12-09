<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:16:58
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\contentListShow\contentListShowView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289905c0ceb9a6b4b06-01041048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06fa855cdc396907fed9f0d59862c0b70feae48b' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\contentListShow\\contentListShowView.tpl',
      1 => 1544348748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289905c0ceb9a6b4b06-01041048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'where' => 0,
    'sort' => 0,
    'data' => 0,
    'results' => 0,
    'HOME' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0ceb9a903579_79979552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0ceb9a903579_79979552')) {function content_5c0ceb9a903579_79979552($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['params']->value['count'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['count'] = config::get('newsCount');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['length'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['length'] = config::get('newsLength');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['lengthTitle'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['lengthTitle'] = config::get('newsLengthTitle');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['width'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['width'] = config::get('imgSmallWidth');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['height'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['height'] = config::get('imgSmallHeight');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['span'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['span'] = config::get('newsSpan');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['btncss'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['btncss'] = config::get('newsBtnCssClass');?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssUl'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssUl'] = 'newsNormal';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['cssLi'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['cssLi'] = '';?><?php }?>



<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showTitle'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showTitle'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showContent'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showContent'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showImg'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showImg'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showMore'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showMore'] = false;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['startNews'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['startNews'] = 0;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['fit'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['fit'] = 'smart';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['where'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['where'] = null;?><?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['limit'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['limit'] = 10;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['elementtype'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['elementtype'] = 2;?><?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['type'])) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'createTime ASC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('createTime ASC', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='lastest') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'date DESC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('date DESC', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='views') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'views DESC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('views DESC', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='position') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'position ASC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('position ASC', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='position-group') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'parentId ASC,position ASC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('parentId ASC,position ASC', null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type']=='author') {?>
	<?php if (isset($_smarty_tpl->tpl_vars['sort'])) {$_smarty_tpl->tpl_vars['sort'] = clone $_smarty_tpl->tpl_vars['sort'];
$_smarty_tpl->tpl_vars['sort']->value = 'createTime DESC'; $_smarty_tpl->tpl_vars['sort']->nocache = null; $_smarty_tpl->tpl_vars['sort']->scope = 0;
} else $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable('createTime DESC', null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['where'])) {$_smarty_tpl->tpl_vars['where'] = clone $_smarty_tpl->tpl_vars['where'];
$_smarty_tpl->tpl_vars['where']->value = " AND authorId = ".((string)$_smarty_tpl->tpl_vars['params']->value['authorId']); $_smarty_tpl->tpl_vars['where']->nocache = null; $_smarty_tpl->tpl_vars['where']->scope = 0;
} else $_smarty_tpl->tpl_vars['where'] = new Smarty_variable(" AND authorId = ".((string)$_smarty_tpl->tpl_vars['params']->value['authorId']), null, 0);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['dateNow'])) {$_smarty_tpl->tpl_vars['dateNow'] = clone $_smarty_tpl->tpl_vars['dateNow'];
$_smarty_tpl->tpl_vars['dateNow']->value = generate::sqlDatetime(); $_smarty_tpl->tpl_vars['dateNow']->nocache = null; $_smarty_tpl->tpl_vars['dateNow']->scope = 0;
} else $_smarty_tpl->tpl_vars['dateNow'] = new Smarty_variable(generate::sqlDatetime(), null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['params']->value['bucket'])) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['results'])) {$_smarty_tpl->tpl_vars['results'] = clone $_smarty_tpl->tpl_vars['results'];
$_smarty_tpl->tpl_vars['results']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllBucketPagesSmart($_smarty_tpl->tpl_vars['params']->value['bucket'],"type=".((string)$_smarty_tpl->tpl_vars['params']->value['elementtype'])." ".((string)$_smarty_tpl->tpl_vars['where']->value)." and (date is null or date <= '".((string)$_smarty_tpl->tpl_vars['dateNow']->value)."')",$_smarty_tpl->tpl_vars['sort']->value,'*',$_smarty_tpl->tpl_vars['params']->value['limit']); $_smarty_tpl->tpl_vars['results']->nocache = null; $_smarty_tpl->tpl_vars['results']->scope = 0;
} else $_smarty_tpl->tpl_vars['results'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllBucketPagesSmart($_smarty_tpl->tpl_vars['params']->value['bucket'],"type=".((string)$_smarty_tpl->tpl_vars['params']->value['elementtype'])." ".((string)$_smarty_tpl->tpl_vars['where']->value)." and (date is null or date <= '".((string)$_smarty_tpl->tpl_vars['dateNow']->value)."')",$_smarty_tpl->tpl_vars['sort']->value,'*',$_smarty_tpl->tpl_vars['params']->value['limit']), null, 0);?>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['results'])) {$_smarty_tpl->tpl_vars['results'] = clone $_smarty_tpl->tpl_vars['results'];
$_smarty_tpl->tpl_vars['results']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllPagesSmart("type=".((string)$_smarty_tpl->tpl_vars['params']->value['elementtype']).((string)$_smarty_tpl->tpl_vars['where']->value)." and (date is null or date <= '".((string)$_smarty_tpl->tpl_vars['dateNow']->value)."')",$_smarty_tpl->tpl_vars['sort']->value,'*',$_smarty_tpl->tpl_vars['params']->value['limit']); $_smarty_tpl->tpl_vars['results']->nocache = null; $_smarty_tpl->tpl_vars['results']->scope = 0;
} else $_smarty_tpl->tpl_vars['results'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getAllPagesSmart("type=".((string)$_smarty_tpl->tpl_vars['params']->value['elementtype']).((string)$_smarty_tpl->tpl_vars['where']->value)." and (date is null or date <= '".((string)$_smarty_tpl->tpl_vars['dateNow']->value)."')",$_smarty_tpl->tpl_vars['sort']->value,'*',$_smarty_tpl->tpl_vars['params']->value['limit']), null, 0);?>
<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['results']->value)) {?>
<ul class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssUl'];?>
">
<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
  <li>
    <i class="<?php echo $_smarty_tpl->tpl_vars['params']->value['cssLi'];?>
"></i><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
" class="punktowanie"><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</a>
  </li>
<?php } ?>
</ul>
<?php } else { ?>
<div class="pad">
	<?php echo smarty_function_L(array('key'=>"content.list.show.noresults"),$_smarty_tpl);?>

</div>
<?php }?>
<?php }} ?>
