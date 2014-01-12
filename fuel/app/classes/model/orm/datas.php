<?php

class Model_Orm_Datas extends Orm\Model {

 	protected static $_table_name = 'datas';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'email',
	'title',
	'text',
	'template',
	'date',
	'public'
    );

    public static function validate($factory) {
	$val = Validation::forge($factory);
	return $val;
    }


}