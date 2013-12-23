#Fuel

* [Website](http://saaboke.com/)
* FuelPHP Version: 1.0-RC2

## Description

This is a short introduction to FuelPHP's authentication package.

##Development Team

* J Sidhu

Notes
------

Revised for Fuelphp 1.0 RC 2.1

The following are the steps required to get authentication working with FuelPHP. This example is going to make use of the simpleauth driver as provided with FuelPHP.

<!--more-->
<ol>
	<li>Download and uncompress FuelPHP, setup apache, run '<a href="http://fuelphp.com/docs/installation/instructions.html">php oil refine install</a>'</li>
	<li>Edit app/config/config.php
		<ol>
			<li> make sure you are in the intended environment:
				<pre lang="php">
'environment'	=> Fuel::DEVELOPMENT,
				</pre>
			</li>
			<li>Enable the following two packages:
				<pre lang="php">
'packages'  => array(
	'orm',
	'auth',
),
				</pre>
			</li>
		</ol>
	</li>
	<li>Enable database by editing config/db.php for your environment, if you've got Fuel::Development as your environment in config.php above, you will edit 'dev' sub-array in the db.config file. This will probably get fixed in the next release, either as RC3 or stable and will be called 'development' instead of 'dev'</li>
	<li>Now would be a good time to make sure you've created a database as specified above</li>
	<li>Copy core/config/migrations.php to app/config/migrations.php</li>
	<li>Create the following scaffold
		<pre lang="bash">
php oil generate scaffold user username:string password:string email:string profile_fields:text group:integer[11] last_login:integer[20] login_hash:string
		</pre>
	</li>
	<li>The above step will have created a new file for you in app/migrations called 001_create_users.php. Feel free to edit/modify this file before running the migrate task.</li>
	<li>*OPTIONAL* If you want/need to create a record (a model), you can easily do so. The following little snipped can be added right after the create_table() call in the above migration:
<pre lang="php">
$admin_username = "jsidhu";
$admin_password = "1234";
$admin_pass_hash= \Auth::instance()->hash_password($admin_password);
$admin_email    = "sidhu.j@gmail.com";

$user = \Model_User::factory(array(
    'username' => $admin_username,
    'password' => $admin_pass_hash,
    'email' => $admin_email,
    'profile_fields' => '',
    'group' => '',
    'last_login' => '',
    'login_hash' => '',
));

if ($user and $user->save()) {
    \Cli::write("added admin account");
} else {
    \Cli::write("failed to add admin account");
}</pre></li>
	<li>
		*OPTIONAL* If you want/need to create an index on your table then see this post for more information: <a href="http://fuelphp.com/forums/topics/view/1616">http://fuelphp.com/forums/topics/view/1616</a>
		You need to edit the newly created migration (app/migrations/001_create_users.php) and add something like the following after create_table:
		<pre lang="php">
//Adding indexes to id fields
$active_db = \Config::get('db.active');
$table_prefix = \Config::get('db.'.$active_db.'.table_prefix');
\DB::query("CREATE INDEX user_username ON ".$table_prefix."user (username)")->execute();
		</pre>
	</li>
	<li>Copy fuel/packages/auth/config/auth.php and simpleauth.php to fuel/app/config/</li>
	<li>Edit app/config/simpleauth.php and change the tablename to 'users'</li>
	<li>Now, we need to migrate our database to the above migration we just crated
		<pre lang="bash">
$ php oil refine migrate
Migrated to latest version: 1.
		</pre>
	</li>
	<li>We are now going to create a common controller that will check if the user is logged in or not.
<pre lang="bash">$ php oil generate  controller common
Created view: APPPATH/views/common/index.php
Created controller: APPPATH/classes/controller/common.php</pre>
</li>
	<li>edit fuel/app/classes/controller/common.php and add the following function:
		<pre lang="php">
public function before()
{
	parent::before();
	$uri_string = explode('/', Uri::string());
	$this->template->logged_in = false;
	if (count($uri_string)>1 and $uri_string[0] == 'user' and $uri_string[1] == 'login')
	{
		return;
	}
	else
	{
		if(\Auth::check())
		{
			$user = \Auth::instance()->get_user_id();
			$this->user_id = $user[1];
			$this->template->logged_in = true;
		}
		else
		{
			\Response::redirect('/user/login');
		}
	}
}
		</pre>
	</li>
	<li>edit fuel/app/controller/common.php and REMOVE the following function:
		<pre lang="php">
public function action_index()
{
	$this->template->title = 'Common » Index';
	$this->template->content = View::factory('common/index');
}
		</pre>
	</li>
	<li>and also delete the index view of the common controller by deleting:
* /app/views/common/common.php
* /app/views/common (folder)</li>
	<li>To enable authentication, just edit any controller's declaration and make sure that it extends Controller_Common. Now, if you are just getting started and go and change the welcome controller to use Controller_Common - it wont work. That's because welcome.php does not inherit a template controller. So if you change its declaration to extend Controller_Common, you will be required to login, but once you login you will get some ugly error messages when FuelPHP tries to apply the template to this its view. Anyways, edit the users controller in app/classes/controller/users.php to
<pre lang="php">class Controller_Users extends Controller_Common {</pre>
</li>
	<li>Now, we need to create an action called 'login' to the users controller and its view. To create an action, edit fuel/app/classes/controller/users.php and add the following function:
		<pre lang="php">
public function action_login()
{
	$this->template->title = "Login Page";
	$this->template->content = View::factory('users/login');
}
		</pre>
	</li>
	<li>Now, create app/views/users/login.php and add the following text/html:
		<pre lang="php">
<h2>Login</h2>
Login to your account using your username and password.
<?php echo isset($errors) ? $errors : false; ?>
<?php echo Form::open('users/login'); ?>
<div class="input text required">
	<?php echo Form::label('Username', 'username'); ?>
	<?php echo Form::input('username', NULL, array('size' => 30)); ?>
</div>
<div class="input password required">
	<?php echo Form::label('Password', 'password'); ?>
	<?php echo Form::password('password', NULL, array('size' => 30)); ?>
</div>
<div class="input submit">
	<?php echo Form::submit('login', 'Login'); ?>
</div>
		</pre>
	</li>
	<li>At this point, going to any of the pages of the User controller will throw you over the users/login (except the users/login page itself), now lets add some login to our users/login action. Edit app/views/controllers/users.php and add change the action_login() to:
		<pre lang="php">
public function action_login()
{
	if(Auth::check())
	{
		Response::redirect('/'); // user already logged in
	}

	$val = Validation::factory('users');
	$val->add_field('username', 'Your username', 'required|min_length[3]|max_length[20]');
	$val->add_field('password', 'Your password', 'required|min_length[3]|max_length[20]');
	if($val->run())
	{
		$auth = Auth::instance();
		if($auth->login($val->validated('username'), $val->validated('password')))
		{
			Session::set_flash('notice', 'FLASH: logged in');
			Response::redirect('users');
		}
		else
		{
			$data['username'] = $val->validated('username');
			$data['errors'] = 'Wrong username/password. Try again';
		}
	}
	else
	{
		if($_POST)
		{
			$data['username'] = $val->validated('username');
			$data['errors'] = 'Wrong username/password combo. Try again';
		}
		else
		{
			$data['errors'] = false;
		}
	}
	$this->template->title = 'Login';
	$this->template->logged_in = false;
	$this->template->errors = @$data['errors'];
	$this->template->content = View::factory('users/login', $data);
}
		</pre>
	</li>
	<li>Update the template located at app/views/template.php and replace this
		<pre lang="php">
<?php if (Session::get_flash('notice')): ?>
	<?php echo Session::get_flash('notice'); ?>
<?php endif; ?>
		</pre>
	</li>
	<li>with this:
		<pre lang="php">
<?php if (Session::get_flash('success')): ?>
	<?php echo Session::get_flash('success'); ?>
<?php elseif (Session::get_flash('notice')): ?>
	<?php echo Session::get_flash('notice'); ?>
<?php elseif (Session::get_flash('error')): ?>
	<?php echo Session::get_flash('error'); ?>
<?php endif; ?>
		</pre>
	</li>
	<li>lets add a logout method, simply add the following function to controller/users.php:
		<pre lang="php">
public function action_logout()
{
	Auth::instance()->logout();
	Response::redirect('/');
}
		</pre>
	</li>
	<li>Lets add a some navigation links so login/logout is easier, add the following to app/views/template.php right under the content div:
		<pre lang="php">
<ul class="nav">
	<?php if ( $logged_in ): ?>
	<li><?php echo Html::anchor('users/logout', 'Logout'); ?></li>
	<li><?php echo Html::anchor('users', 'users'); ?></li>
<?php else: ?>
	<li><?php echo Html::anchor('users/login', 'Login'); ?></li>
	<li><?php echo Html::anchor('users/signup', 'Sign Up'); ?></li>
<?php endif; ?>
</ul>
		</pre>
	</li>
	<li>Lets add the signup view by adding the following to app/views/users/signup.php
		<pre lang="php">
<h2>Sign Up</h2>
To sign up for a new account, fill the form below with your account information.
<?php echo isset($errors) ? $errors : false; ?>
<?php echo Form::open('users/signup'); ?>
<div class="input text required">
	<?php echo Form::label('Username', 'username'); ?>
	<?php echo Form::input('username', NULL, array('size' => 30)); ?>
</div>
<div class="input password required">
	<?php echo Form::label('Password', 'password'); ?>
	<?php echo Form::password('password', NULL, array('size' => 30)); ?>
</div>
<div class="input text required">
	<?php echo Form::label('Email Address', 'email'); ?>
	<?php echo Form::input('email', NULL, array('size' => 30)); ?>
</div>
<div class="input submit">
	<?php echo Form::submit('signup', 'Sign Up'); ?></div>
<?php echo Form::close(); ?>
		</pre>
	</li>
	<li>Add the action_signup to app/classes/controller/users.php
<pre lang="php">public function action_signup()
{
    if ( Auth::check())
    {
        Response::redirect('/');
    }
    $val = Validation::factory('user_signup');
    $val->add_field('username', 'Your username', 'required|min_length[3]|max_length[20]');
    $val->add_field('password', 'Your password', 'required|min_length[3]|max_length[20]');
    $val->add_field('email', 'Email', 'required|valid_email');
    if ( $val->run() )
    {
        $create_user = Auth::instance()->create_user(
                $val->validated('username'),
                $val->validated('password'),
                $val->validated('email'),
                '100'
        );
        if( $create_user )
        {
            Session::set_flash('notice', 'FLASH: User created.');
            Response::redirect('users');
        }
        else
        {
            throw new Exception('An unexpected error occurred. Please try again.');
        }
    }
    else
    {
        if( $_POST )
        {
            $data['username'] = $val->validated('username');
            $data['login_error'] = 'All fields are required.';
        }
        else
        {
            $data['login_error'] = false;
        }
    }
    $this->template->title = 'Sign Up';
    $this->template->errors = @$data['login_error'];
    $this->template->content = View::factory('users/signup');
}</pre>
</li>
</ol>

Thats it!  Any controller that inherits Controller_Common will be required to login. If you look at our Controller_Common, you'll see that there's a if statement that checks which page is being accessed. If we are accessin the User Controllers 'login' method, we dont require the user to be logged in, since asking the user to login for the login page is a bit ..counterproductive.


