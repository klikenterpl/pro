			<div class="wm-main-section wm-categories-full">
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
            {{W name=kategoria length=42 limit=7 url="urzedy-i-instytucje" nazwa=$pagesDB->get(937,'name') class=$pagesDB->get(937,'menuCssClass') parent=1122}}
                                        
                                                          
                                         {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(943,'name') class=$pagesDB->get(943,'menuCssClass') parent=943}}
                                                         
									
										{{W name=kategoria length=42 limit=7 nazwa=$pagesDB->get(942,'name') class=$pagesDB->get(942,'menuCssClass') parent=942}}
                                        
                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(944,'name') class=$pagesDB->get(944,'menuCssClass') parent=944}}

                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(1056,'name') class=$pagesDB->get(1056,'menuCssClass') parent=1056}}

                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(1068,'name') class=$pagesDB->get(1068,'menuCssClass') parent=1068}}
                                        
                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(1083,'name') class=$pagesDB->get(1083,'menuCssClass') parent=1083}}
                                        
                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(940,'name') class=$pagesDB->get(940,'menuCssClass') parent=940}}
                                        
                                        {{W name=kategoria limit=7 length=42 nazwa=$pagesDB->get(1093,'name') class=$pagesDB->get(1093,'menuCssClass') parent=1093}}
									</ul>
								</div>
							</div>
						</div>

					</div>


 

				</div>

{{include file='../tpl_common/katalog-kategorie/urzedy-instytucje.tpl'}}
{{include file='../tpl_common/katalog-kategorie/handel-uslugi.tpl'}}
{{include file='../tpl_common/katalog-kategorie/gastronomia.tpl'}}
{{include file='../tpl_common/katalog-kategorie/edukacja-medycyna.tpl'}}
{{include file='../tpl_common/katalog-kategorie/parafie.tpl'}}
{{include file='../tpl_common/katalog-kategorie/agroturystyka.tpl'}}