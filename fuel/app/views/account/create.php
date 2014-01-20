<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
 <style type="text/css">
  body { background-image: url(http://wallpaper.pickywallpapers.com/1680x1050/highlighted-grey-background.jpg); margin: 45px 0 0 0; font-family: ‘Palatino Linotype’, ‘Book Antiqua’, Palatino, serif; font-size: 18px }
  #wrapper { width: 740px; margin: 0 auto; }
  h1 { color: #ffffff; font: normal normal normal 62px/1em Impact, Charcoal, sans-serif; margin: 0 0 15px 0; }
  pre { padding: 15px; background-color: #FFF; border: 1px solid #CCC; font-size: 16px;}
  #footer p { font-size: 14px; text-align: right; }
  a { color: #ffffff; text-decoration:none; padding: 15px;}
  label {color: #ffffff; float:left; }
  .field {clear:both; text-align:right;}
  .main {float:left}
 </style>
</head>

<?php
echo Form::open();
echo Form::fieldset_open(null, "");
?>
<h1>Registration</h1>
<div class="main">
<div class="field">
<label for="usermail">E-mail (works as username)</label> 
<input type="text" name="usermail" id="usermail" />
</div>
<div class="field">
<label for="password">Password</label>
<input type="password" name="password" id="password" />
</div>
<div class="field">
<label for="password_rep"> Once again</label>
<input type="password" name="password_rep" id="password_rep" />
</div>
<input type="Submit" value="Register" class="btn btn-default" />
</div>
<?php
echo Form::fieldset_close();
echo Form::close();