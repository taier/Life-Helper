<h2>Sign Up</h2>
<p>To sign up for a new account, fill the form  below with your account information. </p>
<?php echo isset($errors) ? $errors : false; ?>
<?php echo Form::open('users/signup'); ?>
<div class="input text required">
	<span style="padding:0px 10px 0px 0px;"> 
    	<?php echo Form::label('Username', 'username'); ?>
	</span>
    <?php echo Form::input('username', NULL, array('size' => 30)); ?>
</div>
<div class="input password required">
	<span style="padding:0px 13px 0px 0px;"> 
    	<?php echo Form::label('Password', 'password'); ?>
    </span>
    <?php echo Form::password('password', NULL, array('size' => 30)); ?></div>
<div class="input text required">
	<span style="padding:0px 46px 0px 0px;"> 
  	  <?php echo Form::label('Email', 'email'); ?>
  	</span>
    <?php echo Form::input('email', NULL, array('size' => 30)); ?>
</div>
<div class="input submit">
  <span style="padding:0px 0px 0px 110px;"> 
   	 <?php echo Form::submit('signup', 'Sign Up'); ?>
   </span>
</div>

<?php echo Form::close(); ?>