<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<style type="text/css">
	 h1 {
	 	color: rgba(255,106,61,.8);
	 	font: normal normal normal 62px/1em Impact, sans-serif;
	 	/*text-shadow:0 1px #eee, 3px 3px #000;*/
	 	font-size: 32pt;
	 	text-align:center;
}
 a:hover {
    background: #786b59; /* Цвет фона под ссылкой */ 
    color: red; /* Цвет ссылки */ 
   } 
html {
		height: 100%;
        background: url(http://www.widewallpapers.us/file/318/2560x1440/crop/ideal-workplace.jpg) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-attachment: fixed;
}
#container{
	width: 800px;
	min-width: 600px;
	height: 250px;
	min-height: 250px;
	margin: 6em auto;
	background-color:  rgba(255,255,255,.5);
	border-radius: 20px;
	border: 3px solid rgba(103, 103, 254,.5);

}
h3{
	display: inline;
	color: #FF6A3D;
	margin-left:500px;
}
    :link{
        	color: #ffffff;
        	text-decoration:none;
    }
    :visited{color:#ffffff;}
}
	h3 {
		background-color: #eee;
	}
	</style>

	<div id="header">
		   <h3 class="1" ><?php echo Html::anchor("account/create", "Register"); ?> </h3>
		   <h3 class="2"><?php echo Html::anchor("account/simpleauth", "Login"); ?></h3>
	</div>
</head>
<body>
	<div id="container">
		<div class="head">
			<h1>Everyone needs an advice.<br> 
				Do you want to save your time?<br> 
				Is it real to do things easy and qualitatively?<br> 
				With Life-Helper.com it's possible!<br>
			    Join us now!</h1>
		</div>
	</div>
</body>
</html>
