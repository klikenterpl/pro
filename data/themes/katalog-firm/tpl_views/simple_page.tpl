


   	{{include file='../tpl_common/01header-podstrona.tpl'}}
{{W name=notify}}
		<div class="wm-mini-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="wm-breadcrumb">
{{W name=navigation page=$page}}
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
								
									<div class="wm-editore-section">
										<h1>{{$page->views}}</h1>
										<h6><a href="?edycja={{$page->id}}">Edytuj informację</a></h6>
										<h3>{{$pagesDB->get($page->parentId,'name')}} - {{$page->name}}</h3>
										<p>{{eval var=$page->content}}</p>
								</div>

								<!--// Listing Detail Slider \\-->
								<div class="wm-listing-detail-slider">
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="{{$TEMPLATE_HOME}}/extra-images/listing-detail-1.jpg">
										<div class="wm-listing-tag"><a class="wm-bgcolor" href="#">Courses</a></div>
									</div>
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="{{$TEMPLATE_HOME}}/extra-images/listing-detail-2.jpg">
										<div class="wm-listing-tag"><a class="wm-bgcolor" href="#">Courses</a></div>
									</div>
									<div class="wm-listing-detail-slider-wrap">
										<img alt="" src="{{$TEMPLATE_HOME}}/extra-images/listing-detail-3.jpg">
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
												<li>Addres: <span>{{$page->cf_Adres_string}}, {{$page->cf_Miejscowosc_string}}</span></li>
												<li>Telefon: <span>{{$page->cf_Telefon_numeric}}</span></li>
												<li>Email: <span><a href="mailto:{{$page->cf_email_string}}">{{$page->cf_email_string}}</a></span></li>
												<li>Strona internetowa: <span>{{$page->cf_Stronawww_string}}</span></li>
											</ul>
										</div>
									</div>
								</div>

								<a class="wm-btn-style-three wm-bgcolor" href="#">Napisz wiadomość</a>
								<a class="wm-btn-style-three wm-bgcolor" href="{{$HOME}}przekierowanie?do={{$page->cf_Stronawww_string}}"><i class="flaticon-symbol"></i> Przejdź na stronę</a>

								<!--// Features \\-->
								<div class="wm-features">
									<div class="wm-section-heading"><h2>Szczegóły</h2></div>
									<ul class="row">
										<li class="col-md-4">
											<span>Identyfikator: {{$page->id}}</span>
											<span>NIP: {{$page->cf_NIP_numeric}}</span>
											<span>REGON: {{$page->cf_REGON_numeric}}</span>
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
										<li class="col-md-3"><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/floorplans-1.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/floorplans-2.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/floorplans-3.jpg"> <span>+3</span></a></li>
										<li class="col-md-3"><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/floorplans-4.jpg"> <span>+3</span></a></li>
									</ul>
								</div>
								<!--// Floor Plans \\-->

								<!--// Recent Listing Grid \\-->
								<div class="wm-listing wm-recent-listing">
									<div class="wm-section-heading"><h2>you might also like</h2></div>
									<ul class="row">
										<li class="col-md-6">
											<figure><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/recent-realestate-1.jpg"></a>
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
											<figure><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/recent-realestate-2.jpg"></a>
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
				                                <figure><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/latest-review-1.jpg"></a></figure>
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
				                                <figure><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/latest-review-2.jpg"></a></figure>
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
				                                <figure><a href="#"><img alt="" src="{{$TEMPLATE_HOME}}/extra-images/latest-review-3.jpg"></a></figure>
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
			                        	<h2>Przeglądaj firmy, urzędy, instytucje</h2>
			                            {{W name=nextPrev}}
			                <div class="col-md-12">
							<div class="ec-accordian-element" id="accordion">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          
							          {{$pagesDB->get($page->parentId,'name')}}
							        </a>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
							      <div class="panel-body">
							        {{W name=contentListShow type="lastest" bucket=$page->parentId fit="fit" filter="blur" showDate=true showAuthor=true showSource=true elementtype=1 imageWidth="" imageHeight="" count="" limit="10" cssUl="ec-icon-list-style" cssLi="fa wm-color fa-caret-right"}}
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          {{$pagesDB->get(1309,'name')}}
							        </a>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
							      <div class="panel-body">
							        {{W name=contentListShow type="lastest" bucket=1309 fit="fit" filter="blur" showDate=true showAuthor=true showSource=true elementtype=1 imageWidth="" imageHeight="" count="" limit="10" cssUl="ec-icon-list-style" cssLi="fa wm-color fa-caret-right"}}
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							         {{$pagesDB->get(908,'name')}}
							        </a>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
							      <div class="panel-body">
							        {{W name=contentListShow type="lastest" bucket=908 fit="fit" filter="blur" showDate=true showAuthor=true showSource=true elementtype=1 imageWidth="" imageHeight="" count="" limit="10" cssUl="ec-icon-list-style" cssLi="fa wm-color fa-caret-right"}}
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			                        </div>
									{{W name=tagsListNormal targetPage=475 count="10" cssUl="" cssLi="" showCount=true}}
			                    </div>

		                        <div class="widget wm-featured-widget">
		                               <div class="wm-widget-listing-heading">
		                                	<h2>Featured Listings</h2>
		                                    <p>Zobacz co jeszcze warto obejrzeć</p>
		                                </div>
		                                <ul>
		                                    <li>
		                                        <figure>
		                                            <a href="#"><img src="{{$TEMPLATE_HOME}}/extra-images/directory-widget-1.jpg" alt=""></a>
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
		                                            <a href="#"><img src="{{$TEMPLATE_HOME}}/extra-images/directory-widget-2.jpg" alt=""></a>
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
		                                            <a href="#"><img src="{{$TEMPLATE_HOME}}/extra-images/directory-widget-3.jpg" alt=""></a>
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




{{include file='../tpl_common/10content-newsletter.tpl'}}
{{include file='../tpl_common/11content-stopka.tpl'}}
{{include file='../tpl_common/12login-register.tpl'}}
{{include file='../tpl_common/java.tpl'}}




 