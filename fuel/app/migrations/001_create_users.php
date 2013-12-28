<?php

namespace Fuel\Migrations;

class Create_users {

	function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 50, 'type' => 'varchar'),
			'email' => array('constraint' => 70, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'last_login' => array('constraint' => 20, 'type' => 'int'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));

	\DBUtil::create_table('data', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email' => array('constraint' => 70, 'type' => 'varchar'),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'text' => array('type' => 'text','null'=>true),
			'template' => array('constraint' => 11, 'type' => 'int'),
		    'date' => array('type' => 'datetime'),
			'public'=> array('constraint' => 11, 'type' => 'int'),
			), array('id'));
	}


	function down()
	{
		\DBUtil::drop_table('users');
		\DBUtil::drop_table('data');
	}
}