{{include file='../tpl_common/top.tpl'}}
<div class="slider">
	<div class="container subslide">
		{{W name=sliderBootstrap imagesBucket=737 count=7 width=1170 height=500 fit=smart}}
	</div>
</div>
<div class="infobox">
	<div class="container">
		<div class="row">
	        <div class="col-md-4">
		          <span class="glyphicon glyphicon-search big-icon"></span>
		          <h2>{{$pagesDB->get(742,'name')}}</h2>
		          {{eval var=$pagesDB->getContent(742)|truncate:300}}<br/><br/>
		          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button">{{L key="front.form.more"}}</a></p>
	        </div>
	        <div class="col-md-4">
		          <span class="glyphicon glyphicon-fire big-icon"></span>
		          <h2>{{$pagesDB->get(740,'name')}}</h2>
		          {{eval var=$pagesDB->getContent(740)|truncate:300}}<br/><br/>
		          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button">{{L key="front.form.more"}}</a></p>
	        </div>
	        <div class="col-md-4">
		          <span class="glyphicon glyphicon-globe big-icon"></span>
		          <h2>{{$pagesDB->get(741,'name')}}</h2>
		          {{eval var=$pagesDB->getContent(741)|truncate:300}}<br/><br/>
		          <p><a class="btn btn-color btn-more" href="#_add_your_url" role="button">{{L key="front.form.more"}}</a></p>
	        </div>
	    </div>
	</div>
</div>
<div class="news">
	<div class="container">
		<div class="center">
			<h1>{{L key="editable.front.news"}}</h1>
		</div>
			{{W name=newsNormal newsGroup=745 showAuthor=0 showDate=0 length=220 count=4 width=120 height=120 cssUl="row" cssLi="col-md-6"}}
			<div class="center margin-bottom-lg">
				<a href="#_add_your_url" class="btn btn-lg btn-color btn-purpbig">{{L key="editable.front.news"}}</a>
			</div>
	</div>
</div>	
{{include file='../tpl_common/footer.tpl'}}
	
