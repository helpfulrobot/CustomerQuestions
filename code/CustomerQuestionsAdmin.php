<?php 

class CustomerQuestionsAdmin extends ModelAdmin {
	public static $managed_models = array('CustomerQuestion'); // Can manage multiple models
	static $url_segment = 'customer-questions';
	static $menu_title = 'Customer Questions';
	public $showImportForm = false;
	
	function BackLink() {
		return Injector::inst()->get("Dashboard")->Link();
	}
}