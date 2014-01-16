<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Review extends Controller {

	public function action_index()
    {
    	$allData = Model_Orm_Datas::find('all');
    	list(,$user_id) = Auth::get_user_id();
    	$user = Model_Orm_User::find($user_id);




    	$data['data'] = array();
    	foreach ($allData as $userData ) {
    		if($userData->email == $user->username) {
    			array_push($data['data'], $userData);
    		}
    	}


        return View::forge('review/index',$data);
     }

}