<h2>Login</h2>
<p>Login to your account using your username and password. </p>
<?php echo isset($errors) ? $errors : false; ?>
<?php echo Form::open('users/login'); ?>
<div class="input text required">
	<span style="padding:0px 10px 0px 0px;"> 
    	<?php echo Form::label('Username', 'username'); ?>
    </span>
    <?php echo Form::input('username', NULL, array('size' => 30)); ?>
</div>
<div class="input password required">
	<span style="padding:0px 12px 0px 0px;"> 
    	<?php echo Form::label('Password', 'password'); ?>
    </span>
    <?php echo Form::password('password', NULL, array('size' => 30)); ?>
</div>
<div class="input submit">
	<span style="padding:0px 0px 0px 110px;"> 
   		<?php echo Form::submit('login', 'Login'); ?>
   	</span>
</div>

<?php echo Form::close(); ?>