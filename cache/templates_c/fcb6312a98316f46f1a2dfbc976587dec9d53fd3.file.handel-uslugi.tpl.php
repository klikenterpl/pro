<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:36
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_common\katalog-kategorie\handel-uslugi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181945c09319cde84b7-12869762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcb6312a98316f46f1a2dfbc976587dec9d53fd3' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_common\\katalog-kategorie\\handel-uslugi.tpl',
      1 => 1544103900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181945c09319cde84b7-12869762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c09319ce244f4_10326352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c09319ce244f4_10326352')) {function content_5c09319ce244f4_10326352($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\pro/data/functions\\function.W.php';
?><div class="wm-main-section wm-categories-full">
<section class="parallax handel wm-fancy-title">
    <div class="pattern-w mbr-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
               <h2>Handel i usługi</h2>
                <p>Firmy w powiecie monieckim</p>
						<div class="col-md-12 wm-button-style">
							<a href="#" class="wm-btn-style-three wm-bgcolor"><i class="flaticon-search"></i> Wyświetl wszystkie firmy</a>
						</div>
            </div>
        </div>
    </div>
</section>

				<div class="col-md-10 col-md-offset-1 container">
					<div class=" ec-tabs-style ec-tabs-element ec-change-color">
						<ul class="tabs-nav">
							<li role="presentation" class="active"><a href="#handel-monki" aria-controls="handel-monki" data-toggle="tab">Mońki</a></li>
							<li role="presentation"><a href="#handel-trzcianne" aria-controls="handel-trzcianne" data-toggle="tab">Trzcianne</a></li>
							<li role="presentation"><a href="#handel-jaswily" aria-controls="handel-jaswily" data-toggle="tab">Jaświły</a></li>
							<li role="presentation"><a href="#handel-goniadz" aria-controls="handel-goniadz" data-toggle="tab">Goniądz</a></li>
							<li role="presentation"><a href="#handel-knyszyn" aria-controls="handel-knyszyn" data-toggle="tab">Knyszyn</a></li>
							<li role="presentation"><a href="#handel-jasionowka" aria-controls="handel-jasionowka" data-toggle="tab">Jasionówka</a></li>
						</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="handel-monki">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>100,'length'=>42,'parent'=>1339),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="handel-trzcianne">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1340),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="handel-jaswily">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1345),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="handel-goniadz">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1342),$_smarty_tpl);?>
							
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="handel-knyszyn">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1343),$_smarty_tpl);?>
										
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="handel-jasionowka">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1344),$_smarty_tpl);?>
								
										</figure>
									</div>
							</div>
					</div>
				</div>
</div><?php }} ?>
