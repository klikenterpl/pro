<!doctype html>
	<html lang="pl">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="INDEX, FOLLOW" />
        <meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
        <meta name="description" content="{{$meta->description}}" />
        <meta name="keywords" content="{{$meta->keywords}}" />
        <meta name="copyright" content="Copyright (c) StronyMonki.pl - katalog firm powiatu monieckiego" />
        <meta name="distribution" content="global" />
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
	{{include file=$pageTpl}}
</body> 
</html>