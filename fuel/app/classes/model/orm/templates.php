<?php

class Model_Orm_Templates extends Orm\Model {

 	protected static $_table_name = 'templates';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'template_name',
	'question'
	);

    public static function validate($factory) {
	$val = Validation::forge($factory);
	return $val;
    }


}