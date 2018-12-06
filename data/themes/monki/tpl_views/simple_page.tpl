{{include file='../tpl_common/top.tpl'}}

<div class="Tresc-Klikenter">



     <div id="Tresc-Klikenter">
     <div class="span2">
     </div>
     <div class="span6">
				{{W name=notify}}
		 		<h2>{{$page->name}}</h2>
		 			{{W name=navigation page=$page}}
       
       <img alt="{{$page->name}}" src="{{$page->cf_logo_string}}" style="float: left; margin-left: 20px; margin-right: 20px; width: 140px; height: 150px;" />
<div style="padding:5px 10px;">
<table border="0" cellpadding="10" cellspacing="1" style="width: 80%;">
	<tbody>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><span>Adres:</span></th>
			<td class="row_punkt">{{$page->cf_Adres_string}}</td>
			<td class="punkowanie row_punkt"><strong>NIP</strong></td>
			<td class="row_punkt" style="text-align: right;">{{$page->cf_NIP_numeric}}</td>
		</tr>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><span>strona internetowa:</span></th>
			<td class="row_punkt">{{$page->cf_Stronawww_string}}</td>
			<td class="punkowanie row_punkt"><strong>REGON</strong></td>
			<td class="row_punkt" style="text-align: right;">{{$page->cf_REGON_numeric}}</td>
		</tr>
		<tr>
			<th class="punkowanie row_punkt" scope="row"><span>e-mail:</span></th>
			<td class="row_punkt">{{$page->cf_email_string}}</td>
			<td class="punkowanie row_punkt"><strong>Telefon</strong></td>
			<td class="row_punkt" style="text-align: right;">{{$page->cf_Telefon_numeric}}</td>
		</tr>
		<tr>
			<th class="punkowanie row_punkt" scope="row">Imię i nazwisko</th>
			<td class="row_punkt">{{$page->cf_Imienazwisko_string}}</td>
			<td class="punkowanie row_punkt"><strong>Miejscowość</strong></td>
			<td class="row_punkt" style="text-align: right;">{{$page->cf_Miejscowosc_string}}</td>
		</tr>
	</tbody>
</table>
</div>
    

			   <p>{{eval var=$page->content}}</p>		
 
     </div>
     <div class="span2">
    
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




 