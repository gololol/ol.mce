<?php
class Practice_Controllerlocal_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
	echo "DIRECTORY_SEPARATOR: ".DIRECTORY_SEPARATOR."<br />";
	echo "PATH_SEPARATOR: ".PATH_SEPARATOR."<br />";
	echo "__FILE__: ".__FILE__."<br />";
	echo "COMPILER_INCLUDE_PATH: ".COMPILER_INCLUDE_PATH."<br />";
	echo "defined(COMPILER_INCLUDE_PATH): ".defined('COMPILER_INCLUDE_PATH')."<br />";
	echo "appRoot: ".$appRoot."<br />";


	echo "<br />";
	echo "DS: ".DS."<br />";
	echo "PS: ".PS."<br />";
	echo "BP: ".BP."<br />";
	echo "<br />";
	echo "get_include_path(): ".get_include_path()."<br />";
	echo "<br />";


   }
}