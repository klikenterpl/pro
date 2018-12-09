<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 19:39:35
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\kataloglista\kataloglistaView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252405c0d616745f7c7-03818990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a084592a3743b1159266f8bbd2d0ced371d5cda' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\kataloglista\\kataloglistaView.tpl',
      1 => 1544277541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252405c0d616745f7c7-03818990',
  'function' => 
  array (
    'menuNormalTree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'params' => 0,
    'request' => 0,
    'data' => 0,
    'pages' => 0,
    'page' => 0,
    'HOME' => 0,
    'activePagesId' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0d61675eef98_13079272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0d61675eef98_13079272')) {function content_5c0d61675eef98_13079272($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['params']->value['limit'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['limit'] = 3;?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['params']->value['length'])) {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['length'] = config::get('newsLength');?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['sort']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['sort'] = 'position ASC';?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['where']=='') {?><?php ob_start();?><?php echo pagesDB::TYPE_NEWS;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['where'] = "type != ".$_tmp2;?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['activePagesId'])) {$_smarty_tpl->tpl_vars['activePagesId'] = clone $_smarty_tpl->tpl_vars['activePagesId'];
$_smarty_tpl->tpl_vars['activePagesId']->value = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->hasActivePagesIdArray($_smarty_tpl->tpl_vars['request']->value->getVariable('urlKey')); $_smarty_tpl->tpl_vars['activePagesId']->nocache = null; $_smarty_tpl->tpl_vars['activePagesId']->scope = 0;
} else $_smarty_tpl->tpl_vars['activePagesId'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['pagesDB']->hasActivePagesIdArray($_smarty_tpl->tpl_vars['request']->value->getVariable('urlKey')), null, 0);?>

<?php if (!is_callable('smarty_modifier_truncate')) include 'D:\wamp\www\VIPstronymonki\pro/app/plugins/html/smarty/plugins\modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_menuNormalTree')) {
    function smarty_template_function_menuNormalTree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menuNormalTree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['hasContent']!=true||preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['page']->value->content, $tmp)>3) {?>
          <?php if ($_smarty_tpl->tpl_vars['data']->value['pagesDB']->hasChild($_smarty_tpl->tpl_vars['page']->value->parentId)) {?>
             

<li><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string==null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string;?>
<?php }?>"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value->name),$_smarty_tpl->tpl_vars['params']->value['length']);?>
</a></li>
                  <?php if (($_smarty_tpl->tpl_vars['params']->value['closed']!=true&&in_array($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['activePagesId']->value))||($_smarty_tpl->tpl_vars['params']->value['open']==true)) {?>
                    
    <?php smarty_template_function_menuNormalTree($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPagesByParent($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['params']->value['where'],$_smarty_tpl->tpl_vars['params']->value['sort'],'*',$_smarty_tpl->tpl_vars['params']->value['limit'],null,true)));?>
        
                    <?php }?><?php } else { ?>
   <i class="fa wm-color fa-check"></i><li><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string==null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string;?>
<?php }?>"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value->name),$_smarty_tpl->tpl_vars['params']->value['length']);?>
</a> </li>
          <?php }?>
        <?php } else { ?>
<i class="fa wm-color fa-check"></i><li><a href="<?php if ($_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string==null) {?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->urlKey;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_urlsm_string;?>
<?php }?>"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['page']->value->name),$_smarty_tpl->tpl_vars['params']->value['length']);?>
</a> </li>
        <?php }?> <?php } ?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<div class="col-md-3">
<ul class="ec-icon-list-style">
<?php smarty_template_function_menuNormalTree($_smarty_tpl,array('pages'=>$_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPages($_smarty_tpl->tpl_vars['params']->value['parent'],$_smarty_tpl->tpl_vars['params']->value['where'],$_smarty_tpl->tpl_vars['params']->value['sort'],'*',$_smarty_tpl->tpl_vars['params']->value['limit'],null,true)));?>

</ul>
</div>

                                    


        


                                        
                
                
<?php }} ?>
