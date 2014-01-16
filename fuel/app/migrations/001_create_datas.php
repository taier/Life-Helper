<?php

namespace Fuel\Migrations;

class Create_Datas {

	function up()
	{
		\DBUtil::create_table('datas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email' => array('constraint' => 50, 'type' => 'varchar'),
			'title' => array('type' => 'text'),
			'template' => array('constraint' => 20, 'type' => 'varchar'),
			'question1' => array('constraint' => 255, 'type' => 'varchar'),
			'question2' => array('constraint' => 255, 'type' => 'varchar'),
			'question3' => array('constraint' => 255, 'type' => 'varchar'),
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

		\DBUtil::create_table('templates', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'template_name' => array('constraint' => 50, 'type' => 'varchar'),
			'question' => array('constraint' => 255, 'type' => 'varchar')
		), array('id'));

		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Question 1"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Question 2"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Question 3"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Question 4"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Question 5"
				));
		$datas->save();



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
				'template' => "Fre",
				'question1' => "Some Text 1",
				'question2' => "Some Text 2",
				'question3' => "Some Text 3",
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