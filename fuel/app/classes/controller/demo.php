<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Demo extends Controller {

	public function action_index()
    {
        $this->render('demo/index');
    }
}