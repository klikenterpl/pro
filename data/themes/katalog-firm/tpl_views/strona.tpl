   	{{include file='../tpl_common/01header-strona.tpl'}}
{{W name=notify}}
		<!-- <div class="wm-mini-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="wm-breadcrumb">
{{W name=navigation page=$page}}
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<!--// Sub Header \\-->

		<!--// Main Content \\-->
		<style type="text/css">
			body{overflow: hidden;}
		</style>
		<div class="wm-main-content">

	
			<div class="wm-main-section">
					<iframe frameborder="0" src="{{$page->cf_Stronawww_string}}">
						Twoja przeglądarka nie obsługuje ramek pływających.
					</iframe>
			</div>
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




 