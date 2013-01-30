<?php
class PD_Layout_Layout extends Zend_Controller_Plugin_Abstract
{
	public function preDispatch()
	{
		//$user = Zend_Auth::getInstance();
		//if($user->hasIdentity()){
			//$role = $user->getIdentity()->role;
			$role = "Distribuidor";
			$layout = Zend_Layout::getMvcInstance();

 			switch ($role) {
 
				case 'Distribuidor':
					$layout->setLayout('layout_interno');
					break;
				default:
					$layout->setLayout('layout');
					break;
			}
		//}
	}
}