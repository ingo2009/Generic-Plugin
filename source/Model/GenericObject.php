<?php
namespace Generic\Model;

defined('is_running') or die('Not an entry point...');

/*
 * GenericObject does neither have a controller, nor has it a view
 * It only can supply its name
*/

class GenericObject
{
	protected	$name = "Generic Object";

//  for internal use, maybe? Or not?
    private		$id = 1;

	// main constructor of Object
    public function __construct($newName)
    {
        $this->$name = $newName;

        $this->init();
    }

// TODO: write init code
    protected function init()
    {

    }

	public function GetID()
    {
        return $this->id;
    }

    public function GetName()
    {
        return $this->name;
    }
}
