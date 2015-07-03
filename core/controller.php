<?php

class Controller {

	protected $_view;
	protected $_model;
	protected $_url;

	/**
	* If the user is not logged in and the url is not 'login', there will be a 
	* redirect to 'talks/login'.
	**/
	function __construct() {
		$this->_getUrl();
		if (!User::is_logged_in() && end($this->_url) !== 'login') {
			URL::redirect('talks/login');
		}
		$this->_view = new View();
	}

	public function loadModel($name) {
		$modelpath = 'models/'.$name.'_model.php';

		if (file_exists($modelpath)) {
			require $modelpath;

			$modelName = ucwords($name).'_Model';
			$this->_model = new $modelName();
		}
	}

	protected function _getUrl() {
		$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : NULL;
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$this->_url = explode('/',$url);
	}

}
