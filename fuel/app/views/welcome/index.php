<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Fuel PHP Framework</title>
	<style type="text/css">
		body { background-color: #F2F2F2; margin: 45px 0 0 0; font-family: ‘Palatino Linotype’, ‘Book Antiqua’, Palatino, serif; font-size: 18px }
		#wrapper { width: 740px; margin: 0 auto; }
		h1 { color: #333333; font: normal normal normal 62px/1em Impact, Charcoal, sans-serif; margin: 0 0 15px 0; }
		pre { padding: 15px; background-color: #FFF; border: 1px solid #CCC; font-size: 16px;}
		#footer p { font-size: 14px; text-align: right; }
		a { color: #000; }
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>FUEL Beta</h1>
		
		<div id="content">
			<p>You have successfully installed the Fuel PHP Framework.</p>
	
			<p>Your default controller, 'Controller_Welcome' is located at:</p>

			<pre><code>APPPATH/classes/controller/welcome.php</code></pre>

			<p>The Controller_Welcome is using the view:</p>
			
			<pre><code>APPPATH/views/welcome/index.php</code></pre>
		
			<p></p>
		</div>
		<div id="footer">
			<p>
				<a href="http://fuelphp.com">Fuel PHP</a> is released under the MIT license.<br />
				Executed in {exec_time}s using {mem_usage}mb of memory.
			</p>
		</div>
	</div>
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fuel PHP Framework</title>
	<style type="text/css">
		* { margin: 0; padding: 0; }
		body { background-color: #EEE; font-family: sans-serif; font-size: 16px; line-height: 20px; margin: 40px; }
		#wrapper { padding: 30px; background: #fff; color: #333; margin: 0 auto; width: 600px; }
		a { color: #36428D; }
		h1 { color: #000; font-size: 55px; padding: 0 0 25px; line-height: 1em; }
		.intro { font-size: 22px; line-height: 30px; font-family: georgia, serif; color: #555; padding: 29px 0 20px; border-top: 1px solid #CCC; }
		h2 { margin: 50px 0 15px; padding: 0 0 10px; font-size: 18px; border-bottom: 1px dashed #ccc; }
		h2.first { margin: 10px 0 15px; }
		p { margin: 0 0 15px; line-height: 22px;}
		a { color: #666; }
		pre { border-left: 1px solid #ddd; line-height:20px; margin:20px; padding-left:1em; font-size: 16px; }
		pre, code { color:#137F80; font-family: Courier, monospace; }
		ul { margin: 15px 30px; }
		li { line-height: 24px;}
		.footer { color: #777; font-size: 12px; margin: 40px 0 0 0; }
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Fuel</h1>
		
		<p class="intro">You have successfully installed the Fuel PHP Framework.</p>
		
		<h2 class="first">Version: <?php echo e(Fuel::VERSION); ?></h2>
		
		<p>The controller that is generating this page is located here:</p>

		<pre><code>APPPATH/classes/controller/welcome.php</code></pre>

		<p>This view can be located here:</p>
		
		<pre><code>APPPATH/views/welcome/index.php</code></pre>

		<h2>Now What?</h2>

		<p>Now that you have Fuel installed, here are a few links you might find useful:</p>
		
		<ul>
			<li><a href="http://fuelphp.com/docs" target="_blank">Documentation</a></li>
			<li><a href="http://fuelphp.com/" target="_blank">Official Website</a></li>
			<li><a href="http://github.com/fuel/fuel" target="_blank">GitHub Respository</a></li>
			<li><a href="http://dev.fuelphp.com" target="_blank">Issue Tracker</a></li>
		</ul>

		<p class="footer">
			<a href="http://fuelphp.com">Fuel PHP</a> is released under the MIT license.<br />Page rendered in {exec_time}s using {mem_usage}mb of memory.
		</p>
	</div>
</body>
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f
</html>