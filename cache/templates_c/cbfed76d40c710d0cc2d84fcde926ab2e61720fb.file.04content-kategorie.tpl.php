<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:36
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_common\04content-kategorie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103745c09319c8aa422-11613387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbfed76d40c710d0cc2d84fcde926ab2e61720fb' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_common\\04content-kategorie.tpl',
      1 => 1544103900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103745c09319c8aa422-11613387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagesDB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c09319c9ba1b2_52346692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c09319c9ba1b2_52346692')) {function content_5c09319c9ba1b2_52346692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\pro/data/functions\\function.W.php';
?>			<div class="wm-main-section wm-categories-full">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">

							<div class="col-md-12">
								<div class="wm-fancy-title">
									<h2>Wyróżnione firmy</h2>
									<p>Firmy promowane przez portal.</p>
								</div>
							</div>
							<div class="wm-extra-spacer"></div>
							<div class="col-md-12">
								<div class="wm-categorie-list">
									<ul class="row">
            <?php echo smarty_function_W(array('name'=>'kategoria','length'=>42,'limit'=>3,'url'=>"urzedy-i-instytucje",'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(937,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(937,'menuCssClass'),'parent'=>1122),$_smarty_tpl);?>

                                        
                                                          
                                         <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(943,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(943,'menuCssClass'),'parent'=>943),$_smarty_tpl);?>

                                                         
									
										<?php echo smarty_function_W(array('name'=>'kategoria','length'=>42,'limit'=>3,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(942,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(942,'menuCssClass'),'parent'=>942),$_smarty_tpl);?>

                                        
                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(944,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(944,'menuCssClass'),'parent'=>944),$_smarty_tpl);?>


                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1056,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1056,'menuCssClass'),'parent'=>1056),$_smarty_tpl);?>


                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1068,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1068,'menuCssClass'),'parent'=>1068),$_smarty_tpl);?>

                                        
                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1083,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1083,'menuCssClass'),'parent'=>1083),$_smarty_tpl);?>

                                        
                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(940,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(940,'menuCssClass'),'parent'=>940),$_smarty_tpl);?>

                                        
                                        <?php echo smarty_function_W(array('name'=>'kategoria','limit'=>3,'length'=>42,'nazwa'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1093,'name'),'class'=>$_smarty_tpl->tpl_vars['pagesDB']->value->get(1093,'menuCssClass'),'parent'=>1093),$_smarty_tpl);?>

									</ul>
								</div>
							</div>
						</div>

					</div>


 

				</div>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/urzedy-instytucje.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/handel-uslugi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/gastronomia.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/edukacja-medycyna.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/parafie.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/katalog-kategorie/agroturystyka.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
