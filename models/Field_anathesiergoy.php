﻿<?php

class Field_anathesiergoy extends ActiveRecord\Model
{
	public static $table_name='field_anathesiergoy'; // Not required
	public static $primary_key='id';
	
	public function before_create()
	{
	
		$this->date_added=date("Y-m-d H:i:s", strtotime('NOW'));
	}	
	
	public function before_update()
	{
	
		$this->date_modified=date("Y-m-d H:i:s",strtotime('NOW'));
	}

}

?>