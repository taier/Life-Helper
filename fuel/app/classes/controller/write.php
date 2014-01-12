<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_Write extends Controller{


 public function action_index()
    {
    	return View::forge('write/index');
    }

}