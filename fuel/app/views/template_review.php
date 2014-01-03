<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REVIEW</title>
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
		<h1>REVIEW SECTION</h1>

		<li><?php echo Html::anchor('users/logout', 'Log Out'); ?></li>

		<p>Hey <b> <?php echo $name ?> </b>, how's it going?</p>

		<p>Your Email is <b><?php echo $email?> </b> </p>

		<p>Title of your post was <b> <?php echo $title ?> </b></p>

		<p>Text of your post was<b> <?php echo $text ?> </b></p>

		<p>You has select template <b> <?php echo $template ?> </b></p>

		<p>You wrote it on  <b><?php echo $date?> </b></p>

		<p>Is your post public? <b> <?php echo $public?> </b></p>

	</div>
</body>
</html>
