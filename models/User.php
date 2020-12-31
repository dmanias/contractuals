<?php

class User extends ActiveRecord\Model
{
	public static $table_name='users'; // Not required
	public static $primary_key='id';
	
	public function before_create()
	{
	
		$this->date_added=date("Y-m-d H:i:s", strtotime('NOW'));
	}	
	
	public function before_update()
	{
	
		$this->date_modified=date("Y-m-d H:i:s",strtotime('NOW'));
	}
/*
	public function set_password($plaintext) {
		$this->encrypted_password = md5($plaintext);
	}
	

	public function set_username($username) {
		$this->assign_attribute('username',strtoupper($username));
	}
	


	public function set_name($name) {
		$this->assign_attribute('name',strtoupper($name));
	}
	
	public function set_surname($surname) {
		$this->assign_attribute('surname',strtoupper($surname));
	}
	*/

	
	
}

?>