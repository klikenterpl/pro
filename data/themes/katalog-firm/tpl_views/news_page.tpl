{{include file='../tpl_common/top.tpl'}}


<div class="Tresc-Klikenter">



     <div id="Tresc-Klikenter">
     <div class="span2">
     </div>
     <div class="span6">


                <div class="pad">
                  {{W name=notify}}
					<h2>{{$page->name}}</h2>
					{{W name=navigation page=$page}}
					{{eval var=$page->content}}
                </div>


     </div>
     <div class="span2">
  
					{{W name=commentsNormal}}
       <br/><br/>
       <h4>Wyślij wiadomość e-mail do ogłoszeniodawcy</h4>
			{{W name=contactForm inputs="Imię i nazwisko" email="{{$page->authorId}}"}}
     </div>

     <div class="span8">
   	{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=300 fit=smart}}
     </div>

     <div class="span10">



     </div>

        </div>  <!-- tresc -->




        </div>




        <div class="mdcontainer">

        </div>
   	{{include file='../tpl_common/footer.tpl'}}




