{{include file='../tpl_common/top.tpl'}}

<div class="Tresc-Klikenter">



     <div id="Tresc-Klikenter">
     <div class="span2">
     </div>
     <div class="span6">
				{{W name=notify}}
				<h2>{{$page->name}}</h2>
   	 			{{W name=navigation page=$page}}
   	 			<div class="ogloszenie_bezplatne"><span>
		 			{{if $page->cf_Cena_numeric eq NULL || $page->cf_Cena_numeric == '0'}} Cena do negocjacji{{else}}Cena: <strong>{{$page->cf_Cena_numeric}}</strong> zł{{/if}}
		 			</span></div>
				<div class="exClear"> </div>

<img alt="herb" src="{{$page->cf_logo_string}}" style="float: left; margin-right: 20px; width: 220px; " />
<div style="padding:5px 10px;">
<table border="0" cellpadding="10" cellspacing="1" style="width: 75%;">
	<tbody>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><img alt="autor ogłoszenia" longdesc="Imię i nazwisko osoby umieszczającej ogłoszenie" src="http://stronymonki.pl/image/fqadacvwwgdf/940/626/original/" /> <span>Autor ogłoszenia:</span></th>
			<td class="row_punkt">{{eval var=$page->cf_Imienazwisko_string}}</td>
			<td class="punkowanie row_punkt"><img alt="miejscowość ogłoszeniodawcy" longdesc="Adres osoby umieszczającej ogłoszenie na stronymonki.pl" src="http://stronymonki.pl/image/qfjzmbdntmpg/940/626/original/" /> <strong>miejscowość</strong></td>
			<td class="row_punkt">{{eval var=$page->cf_Miejscowosc_string}}</td>
		</tr>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><img alt="telefon ogłoszeniodawcy" longdesc="Numer telefonu autora ogłoszenia" src="http://stronymonki.pl/image/fgcdkmayhpcb/940/626/original/" /> <span>telefon:</span></th>
			<td class="row_punkt">{{eval var=$page->cf_Telefon_numeric}}</td>
			<td class="punkowanie row_punkt"><img alt="data ogłoszenia" longdesc="Data zamieszczenia ogłoszenia na portalu" src="http://stronymonki.pl/image/rsptjwrpdhnr/940/626/original/" /> <strong>data opublikowania:</strong></td>
			<td class="row_punkt">{{eval var=$page->date}}</td>
		</tr>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><img alt="email ogłoszeniodawcy" longdesc="Adres email osoby umieszczającej ogłoszenie" src="http://stronymonki.pl/image/rhjzysasmfjw/940/626/original/" /> <span>e-mail:</span></th>
			<td class="row_punkt">{{eval var=$page->cf_email_string}}</td>
			<td class="row_punkt"> </td>
			<td class="row_punkt"> </td>
		</tr>
	</tbody>
</table>
</div>
       <br/>
 <h4 style="color:#094F5B;">Treść ogłoszenia</h4>  	 			
		 			
					{{eval var=$page->content}}
 
     </div>
     <div class="span2">
  					{{W name=commentsNormal}}
       <br/><br/>
       <h4>Wyślij wiadomość e-mail do ogłoszeniodawcy</h4>
			{{W name=contactForm inputs="Imię i nazwisko" email="{{eval var=$page->email}}"}}
     </div>

     <div class="span8">
      <br/><br/>
   	{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=300 fit=smart}}
     </div>

     <div class="span10">



     </div>

        </div>  <!-- tresc -->



      <!-- rozjasnienie obrazka po najechaniu kursorem


<img id="fotografia" src="OBRAZEK.PNG" />
img#fotografia:hover{
opacity : 0.70;
filter : alpha(opacity=70);
}

 -->




        </div>
        <div class="mdcontainer">

        </div>
   	{{include file='../tpl_common/footer.tpl'}}




 