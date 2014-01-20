<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
  <link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
</head>
<div class="jumbotron">
<div id="wrapper">
<center>
		<h1>FREE TEMPLATE</h1>
		<?php echo Html::anchor('templates/index', 'Back'); ?>
		</div>

		<div class="form"><center>
		<?php
		 echo Form::open();
		 ?>

		</br><label> Enter Cool Title Here! </label> </br>
 		<?php echo Form::input('title', 
			Input::post('title', 
			    isset($title) ? $datas->title : '')); ?>

	</br>   </br><label> Enter Cool Text Here! </label> </br>
	    <?php echo Form::textarea('text', 
			Input::post('text', 
			    isset($text) ? $datas->text : '')); ?>
		</br></br>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-default')); ?>
		</center></div>	
	<?php echo Form::close() ?>
	
</div>
</center>	
</div>