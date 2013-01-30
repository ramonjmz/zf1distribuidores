<?php
require_once "Zend/Exception.php";
require_once "Zend/Soap/Client.php";

class Application_Model_Soap {

	public function __construct(){
		
		$_WSDL_URI="http://192.168.16.101/crm/soap.php?wsdl";
		
		$this->client = new Zend_Soap_Client($_WSDL_URI);
		$this->client->setSoapVersion(SOAP_1_1);

	}

	public function login($user_name,$password){
	
		try {
	
			$result =  $this->client->login(array('user_name' =>$user_name,	'password' => md5($password),'version' => '0.1'),'soapleadcapture');
	
			return $result;
	
		} catch(Zend_Exception $e) {
	
			echo $e->getMessage();
		}
	
	
	}
	
	public function logout($session){
		
		try {
			
			
			$result =  $this->client->logout(array('session' =>$session));
		
			return $result;
		
		} catch(Zend_Exception $e) {
		
			echo $e->getMessage();
		}
		

	}

	public function set_entry(){

	}

	public function get_entry_list(){

	}

	public function get_relationships(){

	}

	public function set_note_attachment() {

	}

	public function relate_note_to_module(){

	}



}
