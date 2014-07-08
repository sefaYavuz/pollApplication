<?php

class QuestionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function addAction()
    {
    	if($this->request->isPost())
    	{
    		$question = new Questions();
    		$question->name = $this->request->getPost("name");
    		$question->save();

    		$this->response->redirect("");
    	}
    }

}

