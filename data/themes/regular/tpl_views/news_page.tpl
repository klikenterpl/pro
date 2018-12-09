
{{include file='../tpl_common/top.tpl'}}
<div class="mainimgband">
	<div class="container simslide">
		{{if pagesDB::getMainImageEkey($page->id)!=null}}
		<img src='{{$HOME}}image/{{pagesDB::getMainImageEkeySmart($page->id)}}/1170/250/smart/original/'>
		{{/if}}
	</div>
</div>
	
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4 hidden-xs hidden-sm">
				{{include file='../tpl_common/left_column.tpl'}}
			</div>
			<div class="col-md-8">
					<h2>{{$page->name}}</h2>
					{{W name=navigation page=$page}}
					{{eval var=$page->content}}
			</div>
		</div>
	</div>
</div>
{{include file='../tpl_common/footer.tpl'}}

