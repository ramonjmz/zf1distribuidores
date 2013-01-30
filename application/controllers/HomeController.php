<?php

class HomeController extends Zend_Controller_Action
{

    public function init()
    {

    	
    	//$value = Zend_Registry::get('session');
    	
/*
  		if ($value != -1) {
			
			return $this->_redirect('/auth/login');
		} 
		 */
    }

    public function indexAction()
    {
     	
    	$value = Zend_Registry::get('test');
    	 
    	$this->view->value = $value;
    	
     }
	
 

}
