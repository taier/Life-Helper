<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Review extends Controller_Template_Review {


public function before()
    {
        parent::before();
        $uri_string = explode('/', Uri::string());

        if (count($uri_string)>1 and $uri_string[0] == 'users' and ($uri_string[1] == 'login' or $uri_string[1] == 'signup'))
        {
            $this->template->logged_in = false;
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
                $this->template->logged_in = false;
                \Output::redirect('/users/login');
            }
        }
    }


	public function action_index()
    {
	$users = Model_Users::find($this->user_id);
    	$this->template->name = $users->username;
    	//$this->template->name = "Awsome name";
    	$this->template->email = $users->email;
    	$this->template->title = "Awsome title";
    	$this->template->text = "Losts of words";
		$this->template->title = "Awsome title";
		$this->template->template = "Awsome Template";
		$this->template->date = "Awsome date";
		$this->template->public = "Maybe";

       $this->template->content = View::factory('review/index');
    }

}