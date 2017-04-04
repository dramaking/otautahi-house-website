<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
		

  	//<!-- Bootstrap Core CSS -->
    Requirements::css($this->ThemeDir()."/vendor/bootstrap/css/bootstrap.min.css");
    
    //<!-- Font awesome CSS -->
    Requirements::css($this->ThemeDir()."/vendor/font-awesome/css/font-awesome.min.css");

    //<!-- Custom Fonts -->
    Requirements::css("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Suez+One");

    //<!-- Theme CSS -->
    Requirements::css($this->ThemeDir()."/css/main.min.css");
    Requirements::css($this->ThemeDir()."/css/custom.css");


    //<!-- jQuery -->
    Requirements::javascript($this->ThemeDir()."/vendor/jquery/jquery.min.js");

    //<!-- Bootstrap Core JavaScript -->
    Requirements::javascript($this->ThemeDir()."/vendor/bootstrap/js/bootstrap.min.js");

    //<!-- Theme JavaScript -->
    Requirements::javascript($this->ThemeDir()."/js/main.min.js");

	}

}
