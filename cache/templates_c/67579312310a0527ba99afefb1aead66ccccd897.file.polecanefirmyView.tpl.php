<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 06:19:04
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\polecanefirmy\polecanefirmyView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314725c0839e02fe8f2-83020347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67579312310a0527ba99afefb1aead66ccccd897' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\polecanefirmy\\polecanefirmyView.tpl',
      1 => 1544073538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314725c0839e02fe8f2-83020347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839e05cda15_62002775',
  'variables' => 
  array (
    'params' => 0,
    'first' => 0,
    'last' => 0,
    'where' => 0,
    'data' => 0,
    'newsGroup' => 0,
    'getNews' => 0,
    'news' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839e05cda15_62002775')) {function content_5c0839e05cda15_62002775($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['params']->value['count'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
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

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showDate'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showDate'] = true;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['showAuthor'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showAuthor'] = true;?><?php }?>

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

<?php if ($_smarty_tpl->tpl_vars['params']->value['range']!='') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['first'])) {$_smarty_tpl->tpl_vars['first'] = clone $_smarty_tpl->tpl_vars['first'];
$_smarty_tpl->tpl_vars['first']->value = generate::sqlDate(strtotime("first day of ".((string)$_smarty_tpl->tpl_vars['params']->value['range']))); $_smarty_tpl->tpl_vars['first']->nocache = null; $_smarty_tpl->tpl_vars['first']->scope = 0;
} else $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(generate::sqlDate(strtotime("first day of ".((string)$_smarty_tpl->tpl_vars['params']->value['range']))), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['last'])) {$_smarty_tpl->tpl_vars['last'] = clone $_smarty_tpl->tpl_vars['last'];
$_smarty_tpl->tpl_vars['last']->value = generate::sqlDate(strtotime("last day of ".((string)$_smarty_tpl->tpl_vars['params']->value['range']))); $_smarty_tpl->tpl_vars['last']->nocache = null; $_smarty_tpl->tpl_vars['last']->scope = 0;
} else $_smarty_tpl->tpl_vars['last'] = new Smarty_variable(generate::sqlDate(strtotime("last day of ".((string)$_smarty_tpl->tpl_vars['params']->value['range']))), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['where'])) {$_smarty_tpl->tpl_vars['where'] = clone $_smarty_tpl->tpl_vars['where'];
$_smarty_tpl->tpl_vars['where']->value = " and type=2 and status=1 and createTime >= '".((string)$_smarty_tpl->tpl_vars['first']->value)."' and createTime <= '".((string)$_smarty_tpl->tpl_vars['last']->value)."'"; $_smarty_tpl->tpl_vars['where']->nocache = null; $_smarty_tpl->tpl_vars['where']->scope = 0;
} else $_smarty_tpl->tpl_vars['where'] = new Smarty_variable(" and type=2 and status=1 and createTime >= '".((string)$_smarty_tpl->tpl_vars['first']->value)."' and createTime <= '".((string)$_smarty_tpl->tpl_vars['last']->value)."'", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['getNews'])) {$_smarty_tpl->tpl_vars['getNews'] = clone $_smarty_tpl->tpl_vars['getNews'];
$_smarty_tpl->tpl_vars['getNews']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews'],$_smarty_tpl->tpl_vars['where']->value); $_smarty_tpl->tpl_vars['getNews']->nocache = null; $_smarty_tpl->tpl_vars['getNews']->scope = 0;
} else $_smarty_tpl->tpl_vars['getNews'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews'],$_smarty_tpl->tpl_vars['where']->value), null, 0);?>
    <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['getNews'])) {$_smarty_tpl->tpl_vars['getNews'] = clone $_smarty_tpl->tpl_vars['getNews'];
$_smarty_tpl->tpl_vars['getNews']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews']); $_smarty_tpl->tpl_vars['getNews']->nocache = null; $_smarty_tpl->tpl_vars['getNews']->scope = 0;
} else $_smarty_tpl->tpl_vars['getNews'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->getNews($_smarty_tpl->tpl_vars['params']->value['newsGroup'],$_smarty_tpl->tpl_vars['params']->value['count'],$_smarty_tpl->tpl_vars['params']->value['startNews']), null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['news'])) {?><?php if (isset($_smarty_tpl->tpl_vars['newsList'])) {$_smarty_tpl->tpl_vars['newsList'] = clone $_smarty_tpl->tpl_vars['newsList'];
$_smarty_tpl->tpl_vars['newsList']->value = $_smarty_tpl->tpl_vars['newsGroup']->value; $_smarty_tpl->tpl_vars['newsList']->nocache = null; $_smarty_tpl->tpl_vars['newsList']->scope = 0;
} else $_smarty_tpl->tpl_vars['newsList'] = new Smarty_variable($_smarty_tpl->tpl_vars['newsGroup']->value, null, 0);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['newsList'])) {$_smarty_tpl->tpl_vars['newsList'] = clone $_smarty_tpl->tpl_vars['newsList'];
$_smarty_tpl->tpl_vars['newsList']->value = $_smarty_tpl->tpl_vars['params']->value['news']; $_smarty_tpl->tpl_vars['newsList']->nocache = null; $_smarty_tpl->tpl_vars['newsList']->scope = 0;
} else $_smarty_tpl->tpl_vars['newsList'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['news'], null, 0);?><?php }?>



    <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
			<li class="col-md-4">
                <figure><a href="<?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
<?php }?><?php }?>" class="wm-colorhover"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['news']->value->id);?>
/356/244/<?php echo $_smarty_tpl->tpl_vars['params']->value['fit'];?>
/" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value->name;?>
"></a>
                <figcaption>
				<div class="wm-listing-tag"><a class="wm-bgcolor" href="<?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['news']->value->cf_kategoria_string;?>
</a></div>
				<h2><a href="<?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['news']->value->name;?>
</a></h2>
				</figcaption>
                </figure>
											<div class="wm-listing-options-text">
												<ul>
				<li><i class="flaticon-location"></i><?php echo $_smarty_tpl->tpl_vars['news']->value->cf_Miejscowosc_string;?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['news']->value->cf_Cena_numeric!=null) {?><li><i class="flaticon-money"></i><?php echo $_smarty_tpl->tpl_vars['news']->value->cf_Cena_numeric;?>
 zł</li><?php } else { ?><?php }?>
       
                                                    
				<li><a href="tel:+48<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_Telefon_numeric;?>
" class="wm-colorhover"><i class="flaticon-phone">tel </i><?php echo $_smarty_tpl->tpl_vars['news']->value->cf_Telefon_numeric;?>
</a></li>
                    <li><a href="<?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string!=null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->cf_urlsm_string;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['news']->value->urlKey;?>
<?php }?><?php }?>" class="wm-colorhover">
                        <i class="flaticon-search"></i><?php echo $_smarty_tpl->tpl_vars['news']->value->cf_tabs_string;?>
strona</a></li>
												</ul>
											</div>
										</li>
 


    <?php } ?>


							<?php }} ?>
