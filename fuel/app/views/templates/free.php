<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
 <style type="text/css">
  body { background-image: url(http://wallpaper.pickywallpapers.com/1680x1050/highlighted-grey-background.jpg); margin: 45px 0 0 0; font-family: ‘Palatino Linotype’, ‘Book Antiqua’, Palatino, serif; font-size: 18px }
  #wrapper { width: 740px; margin: 0 auto; }
  h1 { color: #333333; font: normal normal normal 62px/1em Impact, Charcoal, sans-serif; margin: 0 0 15px 0; }
  pre { padding: 15px; background-color: #FFF; border: 1px solid #CCC; font-size: 16px;}
  #footer p { font-size: 14px; text-align: right; }
  a { color: #000; }
  div {margin-left: 150px;}
 </style>
</head>
<div id="wrapper">
		<h1>FREE TEMPLATE</h1>
		<li><?php echo Html::anchor('templates/index', 'Back'); ?></li>
		</div>

		<div class="form">
		<?php
		 echo Form::open();
		 ?>

		</br><label> Enter Cool Title Here! </label> </br>
 		<?php echo Form::input('title', 
			Input::post('title', 
			    isset($title) ? $datas->title : '')); ?>

	   </br><label> Enter Cool Text Here! </label> </br>
	    <?php echo Form::textarea('text', 
			Input::post('text', 
			    isset($text) ? $datas->text : '')); ?>
		</br>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-default')); ?>
		</div>	
	<?php echo Form::close() ?>
		
</div>