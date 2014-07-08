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

    public function deleteAction($questionId)
    {
        $question = Questions::findFirstById($questionId);

        $option = Options::findByQuestion_id($questionId);

        if($question->delete() == false || $option->delete() == false)
        {
            echo 'Oeps, er is iets fouts gegaan: <br />';

            foreach ($option->getMessages() as $message) 
            {
                echo $message, "<br />";
            }
        }
        else
        {
            echo '<p>De vraag is met succes verwijderd!</p>';

            return $this->response->redirect('');
        }
    }

}

