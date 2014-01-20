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
			'answer1' => array('constraint' => 255, 'type' => 'varchar'),
			'answer2' => array('constraint' => 255, 'type' => 'varchar'),
			'answer3' => array('constraint' => 255, 'type' => 'varchar'),
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
				'question' => "What do you love doing?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "What is your dream job?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "What did you enjoy as a child?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Do you currently have the skills required to fulfill your goals?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "If not know, then when?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Do you ask enough questions?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "When the last time you tried something new?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Time or money?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "What do you do to be more productive?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "When you have a lot of work to do, how do you get it all done? "
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Have you ever done a cost-benefit analysis? "
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "How can you make your free-time more efficient?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Are you working too long or too short of a time for certain tasks?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Which of your projects, if completed, would likely have the most impact?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Productivity",
				'question' => "Do you think about future?"
				));
		$datas->save();





		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "When did you know you wanted to have a Life-Helper?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "What books would you recommend for a young adult?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "What do you want your life to look like?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "How do you want to grow spiritually?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "What do you want to improve physically?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "How do you want to increase your creativity?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "How do you want your relationship with your spouse to look?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "Do you think crying is the sign of weakness of strength?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "How would you like to relate to your children?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "What inspires you?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "If you had no limits what would you choose to do?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "When and where do you get most of your inspirations?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "Can you be over inspired?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "Why does the energy flow from unseen, bountiful sources one day, then dry up the next?"
				));
		$datas->save();
		$datas = \Model_Orm_Templates::forge(
				array(
				'template_name' => "Inspiration",
				'question' => "What would you do differently if you knew nobody would judge you?"
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

	}

	function down()
	{
		\DBUtil::drop_table('datas');
	}
}