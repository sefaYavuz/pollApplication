<?php

class IndexController extends ControllerBase
{
	public function initialize()
    {
        $this->tag->setTitle("Poll Applicatie");
    }

    public function indexAction()
    {
    	$this->view->questions = Questions::find(array("order" => "name"));
    }
}

