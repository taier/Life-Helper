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
  a { color: #ffffff; text-decoration:none;}
 </style>
</head>

<div id="wrapper">
  <h1>TEMPLATE SELECTION</h1>
  <div id="content">
  <ul>  
    <li><?php echo Html::anchor('selectionscreen/index', 'Back'); ?></li>
    <li><?php echo Html::anchor('account/logout', 'Log Out'); ?></li>
  </br>
    <li><?php echo Html::anchor('templates/productivity', 'Productivity'); ?></li>
    <li><?php echo Html::anchor('templates/inspiration', 'Inspiration'); ?></li>
    <li><?php echo Html::anchor('templates/free', 'Free'); ?></li>
 
  </ul>
  </div>
</div>