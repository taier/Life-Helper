
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

<div id="wrapper">
		<h1>REVIEW SECTION</h1>
		<div id="content">

			<li><?php echo Html::anchor('users/login', 'Log Out'); ?></li>

			<p>You have successfully came to this page</p>
	
			<p>Controller of this page located at</p>

			<pre><code>APPPATH/classes/controller/review.php</code></pre>

			<p>Setting variables and other stuff for this page happend in </p>

			<pre><code>action_index()</code></pre>

			<p>View of this page located at </p>
			
			<pre><code>APPPATH/views/review/index.php</code></pre>
		
			<p></p>
		</div>
</div>
