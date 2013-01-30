<?php

Class TestController extends Zend_Controller_Action
{
	
	public function init()
	{
		
	}
	
	public function indexAction()
	{
		
	}
	
	public function testAction(){
			 
		$cliente = new Application_Model_Soap();
		$result = $cliente->login();
		
		$this->view->result = $result;
		 
	}
}