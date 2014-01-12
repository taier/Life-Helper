<?php
echo Form::open();
echo Form::fieldset_open(null, "Enter your data");
?>

<label for="usermail">E-mail (works as username)</label> 
<input type="text" name="usermail" id="usermail" />
</br>
<label for="password">Password</label>
<input type="password" name="password" id="password" />
</br>
<label for="password_rep"> Once again</label>
<input type="password" name="password_rep" id="password_rep" />
</br>

<input type="Submit" value="Register" class="btn btn-default" />
</br> </br>
<?php
echo Form::fieldset_close();
echo Form::close();

