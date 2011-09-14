<?php
//The sole purpose of this is to sanitize data
App::import('Sanitize');
class AppModel extends Model {

	var $cleanData = true; //if you want disable data cleaning in some model, set it false in that model.
	
	function beforeSave() {
		if (!empty($this->data) && $this->cleanData == true) {
			$this->data = Sanitize::clean($this->data, array('connection' => 'default', 'escape' => false));
		}

		return true;
	}
}

?>
