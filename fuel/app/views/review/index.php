
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
			<li><?php echo Html::anchor('selectionscreen/index', 'Back'); ?></li>

			<?php foreach ($data as $userData) { 
				if($userData->template == "Free") { ?>
				<h2 style="color:red"> FREE TEMPLATE </h2>
				<h2 style="color:green"> Title -> <?php echo $userData->title; ?> </h2>
				<h4> Text -> <?php echo $userData->question1 ?> </h4>
				<?php }

				if($userData->template == "Productivity") { ?>
				<h2 style="color:red"> PRODUCTIVITY TEMPLATE </h2>
				<h2 style="color:green"> Title -> <?php echo $userData->title; ?> </h2>
				<h4> Answer 1 <?php echo $userData->question1 ?> </h4>
				<h4> Answer 2 <?php echo $userData->question2 ?> </h4>
				<h4> Answer 3 <?php echo $userData->question3 ?> </h4>
				<?php }
			} ?>
			<p></p>
		</div>
</div>
