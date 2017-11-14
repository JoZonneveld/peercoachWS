<?php

/**
* 
*/
class SinglePage
{
	var $Id;
	var $Name;
	var $Text;

	function __construct($id, $name, $text)
	{
		$this->Id = $id;
		$this->Name = $name;
		$this->Text = $text;
	}
}