<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_templates extends Controller{


public function before()
    {
        parent::before();
        $uri_string = explode('/', Uri::string());

        if (count($uri_string)>1 and $uri_string[0] == 'users' and ($uri_string[1] == 'login' or $uri_string[1] == 'signup'))
        {
          
        }
        else
        {
            if(\Auth::check())
            {
                $user = \Auth::instance()->get_user_id();
                $this->user_id = $user[1];
            
            }
            else
            {
               
                \Output::redirect('/users/login');
            }
        }
    }


 public function action_template1()
    {
      $this->render('templates/template1');
    }

}