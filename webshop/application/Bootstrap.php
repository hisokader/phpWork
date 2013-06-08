<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	function _initView(){
		$this->bootstrap('layout');
		$layout=$this->getResource('layout');
		$view=$layout->getView();
		$view->headTitle('WebShop');
	}

}

