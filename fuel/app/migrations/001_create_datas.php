<?php

namespace Fuel\Migrations;

class Create_Datas {

	function up()
	{
		\DBUtil::create_table('datas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email' => array('constraint' => 50, 'type' => 'varchar'),
			'title' => array('type' => 'text'),
			'text' => array('type' => 'text'),
			'template' => array('constraint' => 20, 'type' => 'int'),
			'date' => array('type' => 'datetime'),
			'public' => array('constraint' => 20, 'type' => 'int')
		), array('id'));


		$datas = \Model_Orm_Datas::forge(
				array(
				'email' => "helloworld@ololo.com",
				'title' => "My first ololo",
				'text' => "Soul, Money",
				'template' => "1",
				'date' => "2012-07-08 11:14:15.638276",
				'public' =>'1'
				));
		$datas->save();

	}

	function down()
	{
		\DBUtil::drop_table('datas');
	}
}