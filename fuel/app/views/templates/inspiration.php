<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
 	<link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
</head>

<div class="jumbotron"> <center>
		<h1>INSPIRATION TEMPLATE</h1>
		<?php echo Html::anchor('templates/index', 'Back'); ?>
		<?php
		 echo Form::open();
		 $i = 1;
		 ?>
		 </br><h2> Enter Cool Title Here! </h2> 
 		<?php echo Form::input('title', 
			Input::post('title', 
			    isset($title) ? $datas->title : '')); ?>
		 <?php foreach ($randomQuestions as $question) { ?>
			<h3 style="margin-top:50px">  <?php echo $question->question ?> </h3>
			<?php
			switch ($i) {
				case 1:
					?> <input type="hidden" name="answer1" value="<?php echo $question->question;?>" /> <?php
					break; 
				case 2:
					?> <input type="hidden" name="answer2" value="<?php echo $question->question;?>" /> <?php
					break;
				case 3:
					?> <input type="hidden" name="answer3" value="<?php echo $question->question;?>" /> <?php
				break;
				default:
					# code...
					break;
			}

			?>
			<input type="hidden" name="answer1" value="<?php echo $question->question;?>" />
			<?php echo Form::input('question' . $i, 
			Input::post('question' . $i
			    )); ?>

		 <?php $i++; }  ?>
	</br></br>
		 <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-default')); ?>
		<?php echo Form::close() ?>
		</div>
		</center>
</div>