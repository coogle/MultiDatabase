<?php

namespace MultiDatabase\Db\Adapter;

use Zend\Db\Adapter\Adapter;

use Zend\ServiceManager\ServiceLocatorInterface;

use Zend\ServiceManager\FactoryInterface;

class AdapterServiceFactory implements FactoryInterface
{
	protected $configKey;

	public function __construct($key)
	{
		$this->configKey = $key;
	}

	public function createService(ServiceLocatorInterface $sl) {
		$config = $sl->get('Config');
		return new Adapter($config[$this->configKey]);
	}
}