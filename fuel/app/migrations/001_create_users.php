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

	\DBUtil::create_table('datas', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'email' => array('constraint' => 70, 'type' => 'varchar'),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'text' => array('type' => 'text','null'=>true),
			'template' => array('constraint' => 11, 'type' => 'int'),
		    'date' => array('type' => 'datetime'),
			'public'=> array('constraint' => 11, 'type' => 'int'),
			), array('id'));


	$datas = \Model_Data::factory(array(
            'id' => 1,
            'email' => 'doesnt@realy.matter',
            'title' => 'It is my first time',
            'text' => 'I am so glad that it works', 
            'template' => '1',
            'date' => '2012-07-08 11:14:15.638276',
            'public' => '1',
        ));

        if ($datas and $datas->save()) {
            \Cli::write("Added ");
        } else {
            \Cli::write("Some shit happend");
        }

	}

	function down()
	{
		\DBUtil::drop_table('users');
		\DBUtil::drop_table('datas');
	}
}