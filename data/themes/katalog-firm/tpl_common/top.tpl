<div class="Tlo-Naglowek-Klikenter"></div>
<div class="Tlo-Menu-Klikenter "></div>
<div class="Klikenter">
  

  
	<div class="Logo-Klikenter">
                <ul class="nav pull-right">

                <div id="ep-widget-custom-container" data-widget="pogoda-3dni" data-widget-box="300,220" data-widget-city="monki" data-widget-colors=",094F5B,FFFFFF,6482D7">

</div>
<script type="text/javascript">
(function(d, t, i) {
if (d.getElementById(i)) return;
var f = d.getElementsByTagName(t)[0], js = d.createElement(t);
js.id = i; js.src = "//www.ekologia.pl/pogoda/widget/widget.js";
js.onload = function(){showEpCustomWidget(i + "-container")};
f.parentNode.appendChild(js);
}(document, "script", "ep-widget-custom"));
</script>



        </ul>
        <a href="{{$HOME}}" class="logo"><img src="{{$TEMPLATE_HOME}}/images/logo_stronymonki.png" width="422" height="153"></a>
    <div class="pull-right contacts">

    <ul class="nav pull-right">
    <li class="dropdown">
            <a class="dropdown-toggle login" href="#" data-toggle="dropdown"><img src="http://stronymonki.pl/image/dasbpyvyprkc/940/626/original/" width="16" height="16" alt="Panel użytkownika stronymonki.pl" longdesc="Zaloguj się lub zarejestruj na stronymonki.pl">  Panel użytkownika <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                        {{W name=userLogin registerPage=637 panelPage=639}}
            </div>
          </li>
    </ul>


      
      
      
      
  </div>
      </div>
  <div id="Szukaj_firme">
    <div id="pole-szukaj_">
     {{W name=search}}
    </div>
  </div>

	<div class="Menu-Klikenter">
      {{W name=menuDroppy}}
	</div>



	
