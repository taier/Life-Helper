<?php

class Model_Orm_Datas extends Orm\Model {

 	protected static $_table_name = 'datas';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
	'id',
	'email',
	'title',
	'template',
	'question1',
	'question2',
	'question3',
	'answer1',
	'answer2',
	'answer3',
	'date',
	'public'
    );

    public static function validate($factory) {
	$val = Validation::forge($factory);
	return $val;
    }


}