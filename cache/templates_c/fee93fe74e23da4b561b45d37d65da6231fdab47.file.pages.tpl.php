<?php /* Smarty version Smarty-3.1.18, created on 2018-12-05 21:49:23
         compiled from "D:\wamp\www\VIPstronymonki\pro\app\plugins\admin\templates\common\pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112435c0839d3132448-14392746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fee93fe74e23da4b561b45d37d65da6231fdab47' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\app\\plugins\\admin\\templates\\common\\pages.tpl',
      1 => 1487793312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112435c0839d3132448-14392746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'contentType' => 0,
    'form' => 0,
    'images' => 0,
    'image' => 0,
    'formRestore' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839d3255461_33532246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839d3255461_33532246')) {function content_5c0839d3255461_33532246($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.L.php';
?>			<div class="row-fluid">
			  <div class="span5 box">
			  	<h5><i class="fa fa-clipboard icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.pageslist"),$_smarty_tpl);?>

				  	<div class="buttons buttons-three">
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('sortableOn')) {?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.sort"),$_smarty_tpl);?>
</a>
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/showAllOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('showAllOn')) {?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.showall"),$_smarty_tpl);?>
</a>
				  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/content/hideTreelistAll/" class="btn btn-small">-</a>
				  	</div>
			  	</h5>
				<?php echo $_smarty_tpl->getSubTemplate ('common/content_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			  </div>
			  	<?php if ($_smarty_tpl->tpl_vars['contentType']->value=='form') {?>
				  	<div class="span7">
				  		<div class="box box-floating">
				  			<h5><i class="fa fa-plus-circle icon-margin icon-grey">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addelement"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

				  		</div>
				  	</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['contentType']->value=='edit') {?>
					<?php echo $_smarty_tpl->getSubTemplate ('common/images_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ('common/widgets_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ('common/files_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php echo $_smarty_tpl->getSubTemplate ('common/customfields_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				  	<div class="span7">
					  	<div class="box box-silver">
							<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

					  	</div>
					  	<?php if ($_smarty_tpl->tpl_vars['images']->value!=null) {?>
					  	<div class="box margin-top mobileHidden">
					  		<h5><i class="fa fa-picture-o icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.imagelistingalery"),$_smarty_tpl);?>

							  	<div class="buttons">
							  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('sortableOn')) {?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.sort"),$_smarty_tpl);?>
</a>
							  	</div>				  			
					  		</h5>
					  		<?php echo $_smarty_tpl->getSubTemplate ('common/images_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					  	</div>
					  	<?php }?>
				  	</div>				  	
			  	<?php } elseif ($_smarty_tpl->tpl_vars['contentType']->value=='gallery') {?>
				  	<div class="span7">
					  		<div class="box">
						  		<h5><i class="fa fa-plus-circle icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.addimages"),$_smarty_tpl);?>
</h5>
						  		<?php echo $_smarty_tpl->getSubTemplate ('common/images_multiuploader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						  	</div>	
						  	<div class="box margin-top">
					  			<h5><i class="fa fa-picture-o icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.imagelistingalery"),$_smarty_tpl);?>

								  	<div class="buttons">
								  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/mainDo/toogleCookie/sortableOn/tab1/" class="btn btn-small <?php if (cookie::readCookie('sortableOn')) {?>btn-success<?php }?>"><?php echo smarty_function_L(array('key'=>"admin.content.tpl.sort"),$_smarty_tpl);?>
</a>
								  	</div>				  			
					  			</h5>
					  			<?php echo $_smarty_tpl->getSubTemplate ('common/images_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
					  		</div>
				  	</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['contentType']->value=='image') {?>
				  	<div class="span2">
					  	<div class="box">
						  	<h5><i class="fa fa-pencil icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.tpl.editimages"),$_smarty_tpl);?>
</h5>
							<?php echo $_smarty_tpl->getSubTemplate ('common/images_editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
						</div>				  	
				  		<div class="box margin-top">
					  		<h5><i class="fa fa-picture-o icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.common.tpl.imagelistingalery"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->getSubTemplate ('common/images_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('parentId'=>$_smarty_tpl->tpl_vars['image']->value->bucket,'small'=>1), 0);?>
	
					  	</div>	
				  	</div>					
				  	<div class="span5">
				  		<div class="box">
					  		<h5><i class="fa fa-clipboard icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.tpl.description"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

					  	</div>
				  	</div>	
				<?php } elseif ($_smarty_tpl->tpl_vars['contentType']->value=='news') {?>
				  	<div class="span7">
				  		<div class="box">
					  		<h5><i class="fa fa-calendar icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.tpl.addnews"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['form']->value->toHtml();?>

					  	</div>	
					  	<?php if (is_object($_smarty_tpl->tpl_vars['formRestore']->value)) {?>
				  		<div class="box margin-top">
					  		<h5><i class="fa fa-picture-o icon-margin icon-grey">&nbsp;</i> <?php echo smarty_function_L(array('key'=>"admin.content.tpl.restore"),$_smarty_tpl);?>
</h5>
					  		<?php echo $_smarty_tpl->tpl_vars['formRestore']->value->toHtml();?>

				  		</div>
				  		<?php }?>	
				  	</div>	
			  	<?php } else { ?>
			  		<div class="span7">
			  			<?php echo $_smarty_tpl->getSubTemplate ('common/content_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			  		</div>
			  	<?php }?>
			</div><?php }} ?>