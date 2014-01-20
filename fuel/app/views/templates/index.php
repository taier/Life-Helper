<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Templates</title>
 <link href="http://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet">
</head>
<div class="jumbotron">
<center>
<div id="wrapper">
  <h1>TEMPLATE SELECTION</h1>
  <div id="content">
    <?php echo Html::anchor('selectionscreen/index', 'Back'); ?>
    <?php echo Html::anchor('account/logout', 'Log Out'); ?>
 <div style="margin-top:80px;margin-bottom:800px">
   <h2 style="display:inline; "> <?php echo Html::anchor('templates/productivity', 'Productivity'); ?>  </h2>
   <h2 style="display:inline;margin-left:50px;"> <?php echo Html::anchor('templates/inspiration', 'Inspiration'); ?> </h2>
    <h2 style="display:inline;margin-left:50px;"><?php echo Html::anchor('templates/free', 'Free'); ?> </h2>
  </div >
</div>
</center>
</div>