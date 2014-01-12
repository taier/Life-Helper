<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Selectionscreen extends Controller {

	public function action_index()
    {

    	if ( !Auth::has_access('write.create') ) {
		 Response::redirect("welcome/index");
		}
        return View::forge('selectionscreen/index');
    }
}