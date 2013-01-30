<?php

class AuthController extends Zend_Controller_Action {
	
	
	
	public function init(){
			
	}
	
	public function getInstance(){
		
	}	

	public function loginAction()
	{ 
		
		$form = new Application_Form_Login();

        if( $this->getRequest()->isPost() ){
            
            if( $form->isValid( $this->_getAllParams() )) {
            	
            	$cliente = new Application_Model_Soap();

            	$result = $cliente->login($form->getValue('username'),$form->getValue('password'));
            	
            	
            	/*
            	 * $session = new Zend_Session_Namespace(Pro_Auth_Adapter_Twitter::AUTH_NAMESPACE);  
					$authAdapter = new Pro_Auth_Adapter_Oauth($consumer, $session);  
            	 * */
      
                if($result->id != -1){
   			 
					Zend_Registry::set('test', 'TEST');
                	                    
					return $this->_redirect('/home');
                	                    
                }else{
                	
                    $form->username->addErrorMessage('Datos Incorrectos');
                    
                }
            }
        }
        
        $this->view->form = $form;
    }
	
	public function logoutAction(){
		
		$cliente = new Application_Model_Soap();
		$value = Zend_Registry::get('test');
		
				
		$result = $cliente->logout($value);
		
		print_r($result); 
		
		die();
		
		//Zend_Registry::_unsetInstance();
				
	}
	
}