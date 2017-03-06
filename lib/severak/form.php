<?php
namespace severak;
use AdamWathan\Form\FormBuilder;
use AdamWathan\Form\OldInput\OldInputInterface;
use AdamWathan\Form\ErrorStore\ErrorStoreInterface;
class form
extends FormBuilder
implements OldInputInterface, ErrorStoreInterface
{
	public $values = [];
	public $errors = [];
	
	function __construct()
	{
		$this->setOldInputProvider($this);
		$this->setErrorStore($this);
	}
	
	function hasOldInput()
	{
		return !empty($this->values);
	}
	
	function getOldInput($name)
	{
		return isset($this->values[ $name]) ? $this->values[$name] : '';
	}
	
	function hasError($key)
	{
		return !empty($this->errors[$key]);
	}
	
	// todo - konflikt v rozhraní - jak vyřešit?
	
	function getError($key)
	{
		return empty($this->errors[$key]) ? '' : $this->errors[$key];
	}
}

