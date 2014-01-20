<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
 <link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
</head>
<div class="jumbotron">
<?php
echo Form::open();
echo Form::fieldset_open(null, "");
?>
<h1>Registration</h1>
<div class="main">
<div class="field">
<label for="usermail" >E-mail (works as username)</label>  </br>
<input type="text" name="usermail" id="usermail" />
</div>
<div class="field">
<label for="password">Password</label> </br>
<input type="password" name="password" id="password" />
</div>
<div class="field">
<label for="password_rep"> Once again</label> </br>
<input type="password" name="password_rep" id="password_rep" />
</div>
 </br>
<input type="Submit" value="Register" class="btn btn-default" style="margin-bottom:500px" />
</div>

</div>
<?php
echo Form::fieldset_close();
echo Form::close();