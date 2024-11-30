<?php

class m241129_100717_create_users_table extends CDbMigration
{	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('users', array(
            'id' => 'pk', // Primary Key, Auto Increment
            'name' => 'string NOT NULL UNIQUE', // Max 255 characters, Unique
            'password' => 'string NOT NULL', // Max 255 characters
        ));

		$this->insert('users',array(
			'name'=>'admin',
			'password'=> CPasswordHelper::hashPassword('admin')
			)
		);
		$this->insert('users',array(
			'name'=>'user',
			'password'=> CPasswordHelper::hashPassword('user')
			)
		);
	}

	public function safeDown()
	{
		$this->dropTable('users');
	}
	
}