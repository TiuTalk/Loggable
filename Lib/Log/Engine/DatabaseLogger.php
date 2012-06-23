<?php

App::uses('CakeLogInterface', 'Log');
App::uses('ClassRegistry', 'Utility');

class DatabaseLogger implements CakeLogInterface {

	protected $_defaultOptions = array(
		'model' => 'LogEntry'
	);

	public function __construct($options = array()) {
		$this->options = Set::merge($this->_defaultOptions, $options);

		$this->Model = ClassRegistry::init($this->options['model']);
	}

	public function write($type, $message) {
		$this->Model->create();
		$this->Model->save(array(
			'type' => $type,
			'message' => $message
		));
	}

}