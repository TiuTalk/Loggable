<?php

App::uses('CakeLog', 'Log');

CakeLog::config('database', array(
	'engine' => 'Loggable.DatabaseLogger',
	'model' => 'Loggable.LogEntry'
));