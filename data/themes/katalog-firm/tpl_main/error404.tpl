<!doctype html>
	<html lang="pl">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="robots" content="INDEX, FOLLOW" />
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
        <meta name="description" content="{{$meta->description}}" />
        <meta name="keywords" content="{{$meta->keywords}}" />
        <meta name="copyright" content="Copyright (c) StronyMonki.pl" />
        <meta name="distribution" content="global" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css' />      
		{{foreach resourceManager::loadFrontCSS() as $cssFile}}
			<link rel='stylesheet' type='text/css' href='{{$cssFile}}' />
		{{/foreach}}	
		{{foreach resourceManager::loadFrontLESS() as $lessFile}}
			<link rel='stylesheet/less' type='text/css' href='{{$lessFile}}' />
		{{/foreach}}
		<script type="text/javascript">
			window.HOME = "{{$HOME}}";
			window.TEMPLATE = "{{config::get(template)}}";
		</script>	
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		{{foreach resourceManager::loadFrontJS() as $jsFile}}
			<script type="text/javascript" src="{{$jsFile}}"></script>
		{{/foreach}}
		<title>{{$meta->title}}</title>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
		<meta name="google-site-verification" content="Tj02TsLThIz1GV-tN7CvD9vj-1xqkrCVLtyKfR9uxS8" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46637295-2', 'auto');
  ga('send', 'pageview');

</script>
	</head>
<body>
 
{{include file='../tpl_common/01header-podstrona.tpl'}}  
		<div class="wm-mini-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="wm-breadcrumb">
							{{W name=navigation page=$page}}
<li>{{$pages->name}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section wm-404-fullbg">
				<div class="container">
					<div class="row">

						<!--// Fancy Title \\-->
						<div class="col-md-12">
							<div class="wm-fancy-title">
								<h2>404 Błąd strony</h2>
								<p>Wygląda na to, że ta strona nie istnieje lub nie jest aktualnie dostępna...</p>
							</div>
						</div>
						<!--// Fancy Title \\-->
						
						<div class="col-md-12">
							<div class="wm-404page">
								<h1>Za utrudnienia przepraszamy...</h1>
								<p>Jeżeli ta strona istniała wcześniej i jest dla Państwa ważna prosimy aby nas o tym poinformować <a href="#">w tym miejscu.</a></p>
								<a class="wm-button wm-bgcolor" href="{{$HOME}}">powrót do strony głównej</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

{{include file='../tpl_common/11content-stopka.tpl'}}
{{include file='../tpl_common/12login-register.tpl'}}
{{include file='../tpl_common/java.tpl'}}

</body> 
</html>


