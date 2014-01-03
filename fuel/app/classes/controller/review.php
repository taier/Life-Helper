<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Review extends Controller {

	public function action_review()
    {
        $this->render('review/review');
    }
}