
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Fuel PHP Framework</title>
	<link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	div.temp{
		border: solid 1px #839689;
		border-radius: 5px;
		margin-right: 10px;
		margin-bottom: 10px;
		margin-top: 10px;
		padding:2px 5px 5px 5px;
	}
	</style>
</head>
<body>
<div id="wrapper">
<div class="jumbotron"> <center>
		<h1>REVIEW SECTION</h1>
		<div id="content">

			<?php echo Html::anchor('selectionscreen/index', 'Back'); ?>
			 <?php echo Html::anchor('account/logout', 'Log Out'); ?>
			
			</br>	</br>
			<?php foreach ($data as $userData) { 
				if($userData->template == "Free") { ?>
			<div class="temp" style="display:inline-block;" >
				<h2 style="color:red"> FREE TEMPLATE </h2>
				<h3 style="color:green; text-transform:uppercase;"><?php echo $userData->title; ?> </h3>
				<h4><?php echo $userData->question1 ?> </h4>
			</div>
				<?php }

				if($userData->template == "Productivity") { ?>
			<div class="temp" style="display:inline-block;" >
				<h2 style="color:red"> PRODUCTIVITY TEMPLATE </h2>
				<h3 style="color:green;text-transform:uppercase;"><?php echo $userData->title; ?> </h3>
				<h4> <?php echo $userData->answer1 ?> <?php echo $userData->question1 ?> </h4>
				<h4> <?php echo $userData->answer2 ?> <?php echo $userData->question2 ?> </h4>
				<h4> <?php echo $userData->answer3 ?> <?php echo $userData->question3 ?> </h4>
			</div>
				<?php }
				if($userData->template == "Inspiration") { ?>
			<div class="temp">
				<h2 style="color:red"> INSPIRATION TEMPLATE </h2>
				<h3 style="color:green;text-transform:uppercase;"><?php echo $userData->title; ?> </h3>
				<h4> <?php echo $userData->answer1 ?> <?php echo $userData->question1 ?> </h4>
				<h4> <?php echo $userData->answer2 ?> <?php echo $userData->question2 ?> </h4>
				<h4> <?php echo $userData->answer3 ?> <?php echo $userData->question3 ?> </h4>
			</div>
				<?php }
			} ?>
			<p></p>
		</div>
</div>
</center>
</div>
</body>
