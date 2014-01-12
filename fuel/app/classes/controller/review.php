<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Review extends Controller_Template_Review {

	public function action_index()
    {
    	$data = Model_Data::find($this->user_id);
		$users = Model_Users::find($this->user_id);

    	$this->template->name = $users->username;
    	$this->template->email = $users->email;
    	$this->template->title = $data->title;
    	$this->template->text = $data->text;
		
		if($data->template == 1) {
			$this->template->template = "Productivity";
		}

		$this->template->date = $data->date;

		if($data->template == 1) {
			$this->template->public = "Maybe";
		}

       $this->template->content = View::factory('review/index');
    }

}