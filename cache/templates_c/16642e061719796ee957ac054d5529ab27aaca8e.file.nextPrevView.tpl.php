<?php /* Smarty version Smarty-3.1.18, created on 2018-12-09 11:16:58
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\widgets\nextPrev\nextPrevView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158655c0ceb9a5e1ad0-05052288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16642e061719796ee957ac054d5529ab27aaca8e' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\widgets\\nextPrev\\nextPrevView.tpl',
      1 => 1544277541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158655c0ceb9a5e1ad0-05052288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0ceb9a678253_75537101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0ceb9a678253_75537101')) {function content_5c0ceb9a678253_75537101($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?><ul class="pager">

  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['page']->parentId;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_tmp1;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['page']->position;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_tmp3;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php  $_smarty_tpl->tpl_vars['prev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPages($_tmp2,"position = ".$_tmp4."-1",'createTime DESC','*'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prev']->key => $_smarty_tpl->tpl_vars['prev']->value) {
$_smarty_tpl->tpl_vars['prev']->_loop = true;
?><?php $_tmp5=ob_get_clean();?><?php echo $_tmp5;?>

    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['prev']->value->name!='') {?><?php $_tmp6=ob_get_clean();?><?php echo $_tmp6;?>

      <li class="previous">
          <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prev']->value->urlKey;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_tmp7;?>
" class="prev" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prev']->value->name;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_tmp8;?>
">← <?php ob_start();?><?php echo smarty_function_L(array('key'=>"front.widget.prev"),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_tmp9;?>
</a>
      </li>
    <?php ob_start();?><?php }?><?php $_tmp10=ob_get_clean();?><?php echo $_tmp10;?>

  <?php ob_start();?><?php } ?><?php $_tmp11=ob_get_clean();?><?php echo $_tmp11;?>

  
  
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['page']->parentId;?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_tmp12;?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['page']->position;?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_tmp14;?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php  $_smarty_tpl->tpl_vars['prev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPages($_tmp13,"position = ".$_tmp15."+1",'createTime DESC','*'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prev']->key => $_smarty_tpl->tpl_vars['prev']->value) {
$_smarty_tpl->tpl_vars['prev']->_loop = true;
?><?php $_tmp16=ob_get_clean();?><?php echo $_tmp16;?>

    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['prev']->value->name!='') {?><?php $_tmp17=ob_get_clean();?><?php echo $_tmp17;?>

      <li class="next">
          <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prev']->value->urlKey;?>
<?php $_tmp18=ob_get_clean();?><?php echo $_tmp18;?>
" class="next" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['prev']->value->name;?>
<?php $_tmp19=ob_get_clean();?><?php echo $_tmp19;?>
"><?php ob_start();?><?php echo smarty_function_L(array('key'=>"front.widget.next"),$_smarty_tpl);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_tmp20;?>
 →</a>
      </li>
    <?php ob_start();?><?php }?><?php $_tmp21=ob_get_clean();?><?php echo $_tmp21;?>

  <?php ob_start();?><?php } ?><?php $_tmp22=ob_get_clean();?><?php echo $_tmp22;?>

</ul><?php }} ?>
