<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Gaya Design - Query Loader</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
	
	<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
	<script type='text/javascript' src='js/queryLoader.js'></script>
	
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10587620-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
	
	<div class='content'>
		<h1>QueryLoader Demo page</h1>
		<p>
			The page that you see was preloaded before it was shown to you.<br />
			To accomplish this, QueryLoader was installed.
		</p>
		
		<p>
			<a href='queryLoader.zip'>Download QueryLoader</a><br />
			<a href='http://www.gayadesign.com/diy/queryloader-preload-your-website-in-style/'>Read the original post</a>
		</p>
		
		<h2>The following images have been preloaded:</h2>
		<p id="element">
			<img src='images/1.jpg' /><br />
			<img src='images/2.jpg' /><br />
			<p>
				<img src='images/3.jpg' />
				<p>
					<img src='images/4.jpg' />
				</p>
			</p>
		</p>
	</div>
	
	<script>
		QueryLoader.selectorPreload = "body";
		QueryLoader.init();
	</script>
	
</body>
</html>