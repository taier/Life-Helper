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
  <h1 style="margin-bottom:50px">LOGIN</h1>
  <div class="main">
  <div class="field">
  <label for="username">Username</label> <br>
      <input type="text" name="username" id="username" />
  </div>
  <div class="field">
  <label for="password">Password</label> <br>
      <input type="password" name="password" id="password" />
  </div><br>
  <input type="Submit" value="Log in" class="btn btn-default" />
  </div>
  <?php
  echo Form::fieldset_close();
  echo Form::close();
  ?>

  <div id="register" style="margin-top:20px;margin-bottom:400px;">
      <?php
      echo Html::anchor("account/create", "Not registered? Become a member!");
      ?>
  </div>
  </div>
