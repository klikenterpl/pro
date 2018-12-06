<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:33
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_views\simple_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111385c093199b5ab31-55140995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b9c12ed57d9c0fc363a7298c048d1e85d2e5741' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_views\\simple_page.tpl',
      1 => 1544103900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111385c093199b5ab31-55140995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c093199bdde54_88200605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c093199bdde54_88200605')) {function content_5c093199bdde54_88200605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'G:\\wamp\\www\\pro/data/functions\\function.W.php';
?>


   	<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/01header-podstrona.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo smarty_function_W(array('name'=>'notify'),$_smarty_tpl);?>

		<div class="wm-mini-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="wm-breadcrumb">
<?php echo smarty_function_W(array('name'=>'navigation','page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--// Sub Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">

							<!--// Content Section \\-->
							<div class="col-md-8">

								<!--// Listing Detail Slider \\-->
								<div class="wm-listing-detail-slider">
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="extra-images/listing-detail-1.jpg">
										<div class="wm-listing-tag"><a class="wm-bgcolor" href="#">Courses</a></div>
									</div>
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="extra-images/listing-detail-2.jpg">
										<div class="wm-listing-tag"><a class="wm-bgcolor" href="#">Courses</a></div>
									</div>
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="extra-images/listing-detail-3.jpg">
										<div class="wm-listing-tag"><a class="wm-bgcolor" href="#">Courses</a></div>
									</div>
								</div>
								<!--// Listing Detail Slider \\-->

								<!--// Listing Detail Options \\-->
								<div class="wm-listing-options-text wm-listing-detail-options">
									<ul>
										<li><i class="flaticon-tag"></i> $450,000</li>
										<li><i class="flaticon-rest"></i> 2 beds</li>
										<li><a href="#" class="wm-colorhover"><i class="flaticon-medical"></i> 2 baths</a></li>
										<li><a href="#" class="wm-colorhover"><i class="flaticon-school"></i> 1,582 sq ft</a></li>
										<li><i class="flaticon-clock"></i> 10+ Days on website</li>
										<li><i class="flaticon-money"></i> $725/sqft</li>
									</ul>

								</div>
								<!--// Listing Detail Options \\-->

								<!--// Editore Section \\-->
								<div class="wm-editore-section">
									<h6>Edytuj informację</h6>
									<h3><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>
</p>
								</div>
								<!--// Editore Section \\-->

								<div class="row">
									<div class="col-md-6">
										<div class="wm-section-heading"><h2>Godziny otwarcia</h2></div>
										<div class="wm-opening-hours">
											<ul>
												<li>Poniedziałek: <span>7:30 - 15:30</span></li>
												<li>Wtorek: <span>7:30 - 15:30</span></li>
												<li>Środa: <span>7:30 - 15:30</span></li>
												<li>Czwartek: <span>7:30 - 15:30</span></li>
												<li>Piątek: <span>7:30 - 15:30</span></li>
												<li>Sobota: <span>Zamknięte</span></li>
												<li>Niedziela: <span>Zamknięte</span></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="wm-section-heading"><h2>Dane kontaktowe</h2></div>
										<div class="wm-opening-hours wm-opening-info">
											<ul>
												<li>Addres: <span><?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Adres_string;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Miejscowosc_string;?>
</span></li>
												<li>Telefon: <span><?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Telefon_numeric;?>
</span></li>
												<li>Email: <span><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_email_string;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->cf_email_string;?>
</a></span></li>
												<li>Strona internetowa: <span><?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Stronawww_string;?>
</span></li>
											</ul>
										</div>
									</div>
								</div>

								<a class="wm-btn-style-three wm-bgcolor" href="#">Napisz wiadomość</a>
								<a class="wm-btn-style-three wm-bgcolor" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
przekierowanie?do=<?php echo $_smarty_tpl->tpl_vars['page']->value->cf_Stronawww_string;?>
"><i class="flaticon-symbol"></i> Przejdź na stronę</a>

								<!--// Features \\-->
								<div class="wm-features">
									<div class="wm-section-heading"><h2>Szczegóły</h2></div>
									<ul class="row">
										<li class="col-md-4">
											<span>Identyfikator: <?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
</span>
											<span>NIP: <?php echo $_smarty_tpl->tpl_vars['page']->value->cf_NIP_numeric;?>
</span>
											<span>REGON: <?php echo $_smarty_tpl->tpl_vars['page']->value->cf_REGON_numeric;?>
</span>
											<span>Condo</span>
										</li>
										<li class="col-md-4">
											<span>Status: For Sale</span>
											<span>Balcony</span>
											<span>Lot Size: 9,476 sqft</span>
											<span>Neighborhood: West Village</span>
										</li>
										<li class="col-md-4">
											<span>MLS/Source ID: 00110246</span>
											<span>Zip: 10014</span>
											<span>625 sqft</span>
										</li>
									</ul>
								</div>
								<!--// Features \\-->

								<!--// Location Setting \\-->
								<div class="wm-location-setting">
									<div class="wm-section-heading"><h2>Neighborhood</h2></div>
									<div id="map"></div>
								</div>
								<!--// Location Setting \\-->

								<!--// Floor Plans \\-->
								<div class="wm-floorplans">
									<div class="wm-section-heading"><h2>floor plans</h2></div>
									<ul class="row">
										<li class="col-md-3"><a href="#"><img alt="" src="extra-images/floorplans-1.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="extra-images/floorplans-2.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="extra-images/floorplans-3.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="extra-images/floorplans-4.jpg"> <span>+3</span></a></li>
									</ul>
								</div>
								<!--// Floor Plans \\-->

								<!--// Recent Listing Grid \\-->
								<div class="wm-listing wm-recent-listing">
									<div class="wm-section-heading"><h2>you might also like</h2></div>
									<ul class="row">
										<li class="col-md-6">
											<figure><a href="#"><img alt="" src="extra-images/recent-realestate-1.jpg"></a>
												<figcaption>
													<div class="wm-listing-tag"><a href="#" class="wm-bgcolor">Condo</a></div>
													<h2><a href="#">463 E 40th Saints 11203</a></h2>
												</figcaption>
											</figure>
											<div class="wm-listing-options-text">
												<ul>
													<li><i class="flaticon-tag"></i> $450,000</li>
													<li><i class="flaticon-rest"></i> 2 beds</li>
													<li><a class="wm-colorhover" href="#"><i class="flaticon-medical"></i> 2 baths</a></li>
													<li><a class="wm-colorhover" href="#"><i class="flaticon-school"></i> 1,582 sq ft</a></li>
												</ul>
											</div>
										</li>
										<li class="col-md-6">
											<figure><a href="#"><img alt="" src="extra-images/recent-realestate-2.jpg"></a>
												<figcaption>
													<div class="wm-listing-tag"><a href="#" class="wm-bgcolor">Multi-family home</a></div>
													<h2><a href="#">439 Putnam Ave 11221</a></h2>
												</figcaption>
											</figure>
											<div class="wm-listing-options-text">
												<ul>
													<li><i class="flaticon-tag"></i> $1,250,000</li>
													<li><i class="flaticon-rest"></i> 4 beds</li>
													<li><a class="wm-colorhover" href="#"><i class="flaticon-medical"></i> 1 baths</a></li>
													<li><a class="wm-colorhover" href="#"><i class="flaticon-school"></i> 1,93 sqft</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
								<!--// Recent Listing Grid \\-->

								<!--// Latest Reviews \\-->
								<div class="wm-latest-reviews">
									<div class="wm-section-heading"><h2>Latest Reviews</h2></div>
									<ul>
				                        <li>
				                          <div class="wm-reviews-wrap">
				                            <ul>
				                              <li>
				                                <figure><a href="#"><img alt="" src="extra-images/latest-review-1.jpg"></a></figure>
				                                <div class="wm-review-text">
				                                  <h6><a href="#">Charles B. Russell</a></h6>
				                                  <div class="wm-review-list">
				                                  	<time datetime="2008-02-14 20:00"><i class="flaticon-clock"></i> 25 Jan, 2016</time>
				                                  	<a href="#"><i class="fa fa-share"></i></a>
				                                  </div>
				                                  <p>Our home buying experiences with Michael began a few years ago with the sale &amp; purchase of a home. All went very smoothly and Michael's knowledge base of the area.</p>
				                                  <div class="clearfix"></div>
				                                </div>
				                              </li>
				                            </ul>
				                          </div>
				                        </li>
				                        <li>
				                          <div class="wm-reviews-wrap">
				                            <ul>
				                              <li>
				                                <figure><a href="#"><img alt="" src="extra-images/latest-review-2.jpg"></a></figure>
				                                <div class="wm-review-text">
				                                  <h6><a href="#">Charles B. Russell</a></h6>
				                                  <div class="wm-review-list">
				                                  	<time datetime="2008-02-14 20:00"><i class="flaticon-clock"></i> 25 Jan, 2016</time>
				                                  	<a href="#"><i class="fa fa-share"></i></a>
				                                  </div>
				                                  <p>Fast forward a few years, Michael again was our first choice to get us into the house of our dreams and to sell our home once again. Michael was somehow able to always be.</p>
				                                  <div class="clearfix"></div>
				                                </div>
				                              </li>
				                            </ul>
				                          </div>
				                          <ul class="children">
				                            <li>
				                                <figure><a href="#"><img alt="" src="extra-images/latest-review-3.jpg"></a></figure>
				                                <div class="wm-review-text">
				                                  <h6><a href="#">Charles B. Russell</a></h6>
				                                  <div class="wm-review-list">
				                                  	<time datetime="2008-02-14 20:00"><i class="flaticon-clock"></i> 25 Jan, 2016</time>
				                                  	<a href="#"><i class="fa fa-share"></i></a>
				                                  </div>
				                                  <p>Not only was he able to assist us with pricing our home, he also offered advice on how to stage it to attract the right buyer.</p>
				                                  <div class="clearfix"></div>
				                                </div>
				                              </li>
				                          </ul>
				                        </li>
				                      </ul>
								</div>
								<!--// Latest Reviews \\-->

								<!--// Reviews Form \\-->
								<div class="wm-review-form">
									<div class="wm-section-heading"><h2>comments</h2></div>
									<form>
										<ul>
											<li><input type="text" onfocus="if(this.value =='Name') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Name'; }" value="Name"></li>
											<li><input type="text" onfocus="if(this.value =='Email') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Email'; }" value="Email"></li>
											<li class="wm-textarea-field"><textarea placeholder="Message"></textarea></li>
											<li class="wm-textarea-field"><input type="submit" value="submit" class="wm-bgcolor"></li>
										</ul>
									</form>
								</div>
								<!--// Reviews Form \\-->

							</div>
							<!--// Content Section \\-->

							<aside class="col-md-4">
			                    <div class="widget wm-searching-widget">
			                        <div class="wm-widget-listing-heading">
			                        	<h2>Search Listings</h2>
			                            <p>Type your search in order to find the best property:</p>
			                        </div>
			                         <form class="wm-form-widget">
			                              <ul class="wm-form-widget-wrap">
			                                <li>
			                                  <input type="text" onfocus="if(this.value =='Keywords') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Keywords'; }" value="Keywords">
			                                </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Location</option>
			                                            <option>London</option>
			                                            <option>Australia</option>
			                                            <option>UK</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Proerty status</option>
			                                            <option>London</option>
			                                            <option>Australia</option>
			                                            <option>UK</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Property type</option>
			                                            <option>London</option>
			                                            <option>Australia</option>
			                                            <option>UK</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Bedrooms</option>
			                                            <option>one</option>
			                                            <option>two</option>
			                                            <option>three</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Bathroom</option>
			                                            <option>one</option>
			                                            <option>two</option>
			                                            <option>three</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Garrage</option>
			                                            <option>one</option>
			                                            <option>two</option>
			                                            <option>three</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                    <div class="wm-select">
			                                        <select>
			                                            <option>Radius</option>
			                                            <option>one</option>
			                                            <option>two</option>
			                                            <option>three</option>
			                                        </select>
			                                    </div>
			                                  </li>
			                                  <li>
			                                       <input type="submit" value="Search">
			                                  </li>
			                              </ul>   
				                          <div class="wm-select-checkbox">
				                               <h3><a href="#">Advanced Search</a></h3>
			                                   <ul>
			                                        <li>
			                                          <input type="checkbox" id="c1" name="ca">
			                                          <label for="c1"><span></span>Parking</label>
			                                        </li>
			                                        <li>
			                                          <input type="checkbox" id="c2" name="ca">
			                                          <label for="c2"><span></span>Wi-Fi</label>
			                                        </li>
			                                        <li>
			                                          <input type="checkbox" id="c3" name="ca">
			                                          <label for="c3"><span></span>Cable TV</label>
			                                        </li>
			                                        <li>
			                                          <input type="checkbox" id="c4" name="ca">
			                                          <label for="c4"><span></span>Bolcony</label>
			                                        </li>
			                                        <li>
			                                          <input type="checkbox" id="c5" name="ca">
			                                          <label for="c5"><span></span>Microwave</label>
			                                        </li>
			                                        <li>
			                                          <input type="checkbox" id="c6" name="ca">
			                                          <label for="c6"><span></span>Tea Pot</label>
			                                        </li>
			                                   </ul>
			                                </div>
			                         </form>
			                    </div>

		                        <div class="widget wm-featured-widget">
		                               <div class="wm-widget-listing-heading">
		                                	<h2>Featured Listings</h2>
		                                    <p>Type your search in order to find the best property:</p>
		                                </div>
		                                <ul>
		                                    <li>
		                                        <figure>
		                                            <a href="#"><img src="extra-images/directory-widget-1.jpg" alt=""></a>
		                                            <i class="fa fa-long-arrow-right"></i>
		                                        </figure>
		                                        <section class="wm-newsinfo">
		                                        <h6><a href="#">145 E 48th St #26D, NY</a></h6>
		                                         <a href="#"><i class="flaticon-tag"></i>$250,000</a>
		                                         <div class="clearfix"></div>
		                                      </section>
		                                    </li>
		                                    <li>
		                                        <figure>
		                                            <a href="#"><img src="extra-images/directory-widget-2.jpg" alt=""></a>
		                                            <i class="fa fa-long-arrow-right"></i>
		                                        </figure>
		                                        <section class="wm-newsinfo">
		                                        <h6><a href="#">183 Colonial St, Georgetown</a></h6>
		                                         <a href="#"><i class="flaticon-tag"></i>$789,000</a>
		                                         <div class="clearfix"></div>
		                                      </section>
		                                    </li>
		                                    <li>
		                                        <figure>
		                                            <a href="#"><img src="extra-images/directory-widget-3.jpg" alt=""></a>
		                                            <i class="fa fa-long-arrow-right"></i>
		                                        </figure>
		                                        <section class="wm-newsinfo">
		                                        <h6><a href="#">2393 Hickory Ridge Denver</a></h6>
		                                         <a href="#"><i class="flaticon-tag"></i>$1,127,000</a>
		                                         <div class="clearfix"></div>
		                                      </section>
		                                    </li>
		                                </ul>
		                             </div>  

		                    </aside>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>















      <!-- rozjasnienie obrazka po najechaniu kursorem


<img id="fotografia" src="OBRAZEK.PNG" />
img#fotografia:hover{
opacity : 0.70;
filter : alpha(opacity=70);
}

 -->




<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/10content-newsletter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/11content-stopka.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/12login-register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('../tpl_common/java.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





 <?php }} ?>
