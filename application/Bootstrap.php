<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	public function _initPlugins()
	{
		include_once('PD/Layout/Layout.php');
		$front = Zend_Controller_Front::getInstance();
		$front->registerPlugin(new PD_Layout_Layout());
	}
	

}

