
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Fuel PHP Framework</title>
	<link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div class="jumbotron"> <center>
		<h1>REVIEW SECTION</h1>
		<div id="content">

			<?php echo Html::anchor('selectionscreen/index', 'Back'); ?>
			<?php echo Html::anchor('users/login', 'Log Out'); ?>
			
			</br>	</br>
			<?php foreach ($data as $userData) { 
				if($userData->template == "Free") { ?>
				<h2 style="color:red"> FREE TEMPLATE </h2>
				<h2 style="color:green"> Title -> <?php echo $userData->title; ?> </h2>
				<h4> Text -> <?php echo $userData->question1 ?> </h4>
				<?php }

				if($userData->template == "Productivity") { ?>
				<h2 style="color:red"> PRODUCTIVITY TEMPLATE </h2>
				<h2 style="color:green"> Title -> <?php echo $userData->title; ?> </h2>
				<h4> <?php echo $userData->answer1 ?> <?php echo $userData->question1 ?> </h4>
				<h4> <?php echo $userData->answer2 ?> <?php echo $userData->question2 ?> </h4>
				<h4> <?php echo $userData->answer3 ?> <?php echo $userData->question3 ?> </h4>
				<?php }
				if($userData->template == "Inspiration") { ?>
				<h2 style="color:red"> INSPIRATION TEMPLATE </h2>
				<h2 style="color:green"> Title -> <?php echo $userData->title; ?> </h2>
				<h4> <?php echo $userData->answer1 ?> <?php echo $userData->question1 ?> </h4>
				<h4> <?php echo $userData->answer2 ?> <?php echo $userData->question2 ?> </h4>
				<h4> <?php echo $userData->answer3 ?> <?php echo $userData->question3 ?> </h4>
				<?php }
			} ?>
			<p></p>
		</div>
</div>
</center>
</div>
</body>
