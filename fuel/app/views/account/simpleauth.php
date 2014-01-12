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
