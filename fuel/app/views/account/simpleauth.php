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
 </style>
</head>

<?php
echo Form::open();
echo Form::fieldset_open(null, "User data");
?>
<label for="username">User name</label>
    <input type="text" name="username" id="username" />
</br>
<label for="password">Password</label>
    <input type="password" name="password" id="password" />
</br>
<input type="Submit" value="Log in" class="btn btn-default" />
<?php
echo Form::fieldset_close();
echo Form::close();
?>

<div id="register">
    <?php
    echo Html::anchor("account/create", "Not registered? Become a member!");
    ?>
</div>
