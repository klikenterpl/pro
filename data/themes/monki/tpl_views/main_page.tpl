{{include file='../tpl_common/top.tpl'}}

<div class="Tresc-Klikenter span100">



     <div id="Tresc-Klikenter" class="span100">



     <div class="span100">
        <!--- banerki start---> 
       <div class="container partners">
         {{W name=notify}}
  <div class="title">
    <div id='right_scroll'><a href='javascript:slide("right");'> ›</a></div>
    <div id='left_scroll'><a href='javascript:slide("left");'>‹ </a></div>
  </div>
  <div id='carousel_container'>
    
    <div id='carousel_inner'>
      <ul id='carousel_ul'>
        {{foreach $imagesDB->getByBucket(759) as $image}}
        <li><a href="{{$image->url}}"><img src="{{$HOME}}image/{{$image->ekey}}/200/150/fit/" alt="Firmy powiatu monieckiego"></a></li>
        {{/foreach}}
      </ul>
    </div>
    <input type='hidden' id='hidden_auto_slide_seconds' value=0 />
  </div>

</div>
      <!--- banerki stop---> 
     	{{eval var=$pagesDB->getContent(931)}} <!--- treść katalog firm i instytucji---> 
					{{W name=newsNormal showImg=false newsGroup=745 showAuthor=0 showDate=0 length=200 count=4 height=120  }}<!--- news--->

     </div>
     <div class="span2">
       <div >
         <h4 style="color:#094F5B;">Zapisz się do Newslettera aby otrzymywać informację o nowych firmach w powiecie monieckim</h4>
   {{W name=newsletter}} 
       </div>
       <br/>
       </div>

     <div class="span8">
   	{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=300 fit=smart}}
     </div>

     <div class="span10">

     	<div class="news smnews">
		<div class="center">
			<h2>Ogłoszenia</h2>
		</div>
			<div class="container-fluid">
				{{W name=newsNormal newsGroup=918 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=919 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=920 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=921 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=922 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=923 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
        {{W name=newsNormal newsGroup=924 showAuthor=0 showDate=0 length=220 count=2 width=120 height=120 cssUl="row" cssLi="punkowanie_ogloszenia"}}
			</div>

	</div>

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



