<?php
namespace Generic\Model;

defined('is_running') or die('Not an entry point...');

require 'GenericObject.php';

// unfortunately Object is a reserved name, therefore…
class Greeting extends GenericObject
{
	// standard default greeting including sender
	private		$displayMessage = "Hello world!<br />Regards from the Greeting object…";


	// main constructor of Greeting
    public function __construct($mess)
    {
		if( $mess != NULL )
        	$this->$displayMessage = $mess;
    }

	public function GetMessage()
    {
        return $this->displayMessage;
    }

}
