<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Selectionscreen extends Controller {

	public function action_index()
    {
        return View::forge('selectionscreen/index');
    }
}