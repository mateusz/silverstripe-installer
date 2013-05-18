<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	private static $allowed_actions = array (
	);

	public function Pages() {
		$list = new AjaxPaginatedList(Page::get(), $this->request);
		$list->setPageLength(3);
		return $list;
	}

	public function init() {
		parent::init();

		Requirements::themedCSS('reset');
		Requirements::themedCSS('layout'); 
		Requirements::themedCSS('typography'); 
		Requirements::themedCSS('form'); 

		Requirements::javascript('mysite/javascript/jquery-2.0.0.js');
		Requirements::javascript('mysite/javascript/jquery-ui-1.10.3.custom.js');
		//Requirements::javascript('framework/admin/javascript/lib.js');
		Requirements::javascript('frontend/javascript/underscore.js');
		Requirements::javascript('frontend/javascript/jquery.ss.pagination.js');
		Requirements::javascript('frontend/javascript/jquery.ss.endless.js');
		Requirements::javascript('mysite/javascript/testing.js');
	}

}
