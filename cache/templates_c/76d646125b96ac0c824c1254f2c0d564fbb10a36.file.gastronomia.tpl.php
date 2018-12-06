<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 06:19:05
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\themes\katalog-firm\tpl_common\katalog-kategorie\gastronomia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163785c0839e0d163a6-94070984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d646125b96ac0c824c1254f2c0d564fbb10a36' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\themes\\katalog-firm\\tpl_common\\katalog-kategorie\\gastronomia.tpl',
      1 => 1544073537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163785c0839e0d163a6-94070984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839e0d4ca35_20594042',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839e0d4ca35_20594042')) {function content_5c0839e0d4ca35_20594042($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.W.php';
?><div class="wm-main-section wm-categories-full">
<section class="parallax gastronomia wm-fancy-title">
    <div class="pattern-w mbr-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
               <h2>Gastronomia</h2>
                <p>Polecane miejsca gdzie można smacznie zjeść.</p>
						<div class="col-md-12 wm-button-style">
							<a href="#" class="wm-btn-style-three wm-bgcolor"><i class="flaticon-search"></i> Wyświetl wszystkie bary, restauracje, pizzerie, fast-food</a>
						</div>
            </div>
        </div>
    </div>
</section>

				<div class="col-md-10 col-md-offset-1 container">
					<div class=" ec-tabs-style ec-tabs-element ec-change-color">
						<ul class="tabs-nav">
							<li role="presentation" class="active"><a href="#gastronomia-monki" aria-controls="gastronomia-monki" data-toggle="tab">Mońki</a></li>
							<li role="presentation"><a href="#gastronomia-trzcianne" aria-controls="gastronomia-trzcianne" data-toggle="tab">Trzcianne</a></li>
							<li role="presentation"><a href="#gastronomia-jaswily" aria-controls="gastronomia-jaswily" data-toggle="tab">Jaświły</a></li>
							<li role="presentation"><a href="#gastronomia-goniadz" aria-controls="gastronomia-goniadz" data-toggle="tab">Goniądz</a></li>
							<li role="presentation"><a href="#gastronomia-knyszyn" aria-controls="gastronomia-knyszyn" data-toggle="tab">Knyszyn</a></li>
							<li role="presentation"><a href="#gastronomia-jasionowka" aria-controls="gastronomia-jasionowka" data-toggle="tab">Jasionówka</a></li>
						</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="gastronomia-monki">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1339),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="gastronomia-trzcianne">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1340),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="gastronomia-jaswily">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1345),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="gastronomia-goniadz">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1342),$_smarty_tpl);?>
							
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="gastronomia-knyszyn">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1343),$_smarty_tpl);?>
										
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="gastronomia-jasionowka">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1344),$_smarty_tpl);?>
								
										</figure>
									</div>
							</div>
					</div>
				</div>
</div><?php }} ?>
