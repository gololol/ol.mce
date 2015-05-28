<?php
class Practice_ControllerTest_IndexController extends Mage_Core_Controller_Front_Action
{
    public  function indexAction()
    {
        echo "<h1>"."Controller test"."</h1>";
        echo "<h1>"."frontName: requestflowtest"."</h1>";
    }
}