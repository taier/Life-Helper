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


	\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'last_login' => array('constraint' => 25, 'type' => 'varchar'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int')
		), array('id'));

	\Auth::instance()->create_user(
			"admin@lifehelper.com", //username = email
			"lifehelper_admin",
			"admin@lifehelper.com",
			100, //admin
			array("verified" => true,
			      "verification_key" => md5(mt_rand(0, mt_getrandmax())))
			);


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