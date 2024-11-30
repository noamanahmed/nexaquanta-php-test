<?php

class m241129_212829_create_emp_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('emp', array(
            'id' => 'pk', // Primary Key, Auto Increment
            'name' => 'string NOT NULL', // Max 255 characters
            'email' => 'string NOT NULL UNIQUE', // Max 255 characters, Unique
            'password' => 'string NOT NULL', // Max 255 characters
        ));
	}

	public function down()
	{
		$this->dropTable('emp');

	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}