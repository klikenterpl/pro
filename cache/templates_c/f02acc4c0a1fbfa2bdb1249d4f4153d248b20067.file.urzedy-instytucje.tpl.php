<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 06:19:04
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\themes\katalog-firm\tpl_common\katalog-kategorie\urzedy-instytucje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213915c0839e09e1554-28568622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f02acc4c0a1fbfa2bdb1249d4f4153d248b20067' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\themes\\katalog-firm\\tpl_common\\katalog-kategorie\\urzedy-instytucje.tpl',
      1 => 1544073537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213915c0839e09e1554-28568622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839e0a166e9_16954975',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839e0a166e9_16954975')) {function content_5c0839e0a166e9_16954975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'D:\\wamp\\www\\VIPstronymonki\\pro/data/functions\\function.W.php';
?><div class="wm-main-section wm-categories-full">
<section class="parallax instytucje wm-fancy-title">
    <div class="pattern-w mbr-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
               <h2>Urzędy i Instytucje</h2>
                <p>Strony urzędowe w powiecie monieckim</p>
						<div class="col-md-12 wm-button-style">
							<a href="#" class="wm-btn-style-three wm-bgcolor"><i class="flaticon-search"></i> Wyświetl wszystkie instytucje</a>
						</div>
            </div>
        </div>
    </div>
</section>

				<div class="col-md-10 col-md-offset-1 container">
					<div class=" ec-tabs-style ec-tabs-element ec-change-color">
						<ul class="tabs-nav">
							<li role="presentation" class="active"><a href="#instytucje-monki" aria-controls="instytucje-monki" data-toggle="tab">Mońki</a></li>
							<li role="presentation"><a href="#instytucje-trzcianne" aria-controls="instytucje-trzcianne" data-toggle="tab">Trzcianne</a></li>
							<li role="presentation"><a href="#instytucje-jaswily" aria-controls="instytucje-jaswily" data-toggle="tab">Jaświły</a></li>
							<li role="presentation"><a href="#instytucje-goniadz" aria-controls="instytucje-goniadz" data-toggle="tab">Goniądz</a></li>
							<li role="presentation"><a href="#instytucje-knyszyn" aria-controls="instytucje-knyszyn" data-toggle="tab">Knyszyn</a></li>
							<li role="presentation"><a href="#instytucje-jasionowka" aria-controls="instytucje-jasionowka" data-toggle="tab">Jasionówka</a></li>
						</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="instytucje-monki">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1122),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="instytucje-trzcianne">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1332),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="instytucje-jaswily">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1337),$_smarty_tpl);?>

										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="instytucje-goniadz">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1334),$_smarty_tpl);?>
							
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="instytucje-knyszyn">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1335),$_smarty_tpl);?>
										
										</figure>
									</div>
									<div role="tabpanel" class="tab-pane active" id="instytucje-jasionowka">
										<figure class="ec-tabthumb">
											<?php echo smarty_function_W(array('name'=>'kataloglista','limit'=>3,'length'=>42,'parent'=>1336),$_smarty_tpl);?>
								
										</figure>
									</div>
							</div>
					</div>
				</div>
</div><?php }} ?>
