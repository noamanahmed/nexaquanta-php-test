<?php

class EmployeeTest extends WebTestCase
{
	public $fixtures=array(
		'employees'=>'Employee',
	);

	public function testShow()
	{
		$this->open('?r=employee/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=employee/create');
	}

	public function testUpdate()
	{
		$this->open('?r=employee/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=employee/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=employee/index');
	}

	public function testAdmin()
	{
		$this->open('?r=employee/admin');
	}
}
