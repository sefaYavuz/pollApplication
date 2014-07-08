<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->questions = Questions::find(array("order" => "name"));
    }
}

