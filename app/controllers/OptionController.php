<?php

class OptionController extends \Phalcon\Mvc\Controller
{
    public function initialize()
    {
        $this->tag->setTitle(" - Opties");
    }

    public function indexAction()
    {

    }

	public function showAction($questionId)
    {
    	$this->view->question 	= Questions::findFirstById($questionId);

        $question = Questions::findFirstById($questionId);

        $this->tag->prependTitle($question->name);

    	$this->view->options 	= Options::find(array(
    		"question_id = ".$questionId."",
    		"order" => "votes DESC"
    	));
    }

    public function voteAction($optionId)
    {
    	$option = Options::findFirstById($optionId);
    	$option->votes++;
    	$option->save();

    	/*return $this->dispatcher->forward(array(
    		"controller" => "option",
    		"action" => "show",
    		"params" => array($option->question_id)
    	));
		*/

    	return $this->response->redirect('option/show/'.$option->question_id);
    }

    public function addAction($questionId)
    {
    	$this->view->question 	= Questions::findFirstById($questionId);

        $this->tag->prependTitle("Toevoegen");

    	if($this->request->isPost())
    	{
    		$option 				= new Options();
    		$option->question_id 	= $questionId;
    		$option->name 		 	= $this->request->getPost("name");
    		$option->votes 			= 0;

    		$option->save();

    		return $this->response->redirect('option/show/'.$questionId);
    	}
    }

    public function deleteAction($optionId)
    {
    	$option = Options::findFirstById($optionId);

    	if($option->delete() == false)
    	{
    		echo 'Oeps, er is iets fouts gegaan: <br />';

    		foreach ($option->getMessages() as $message) 
    		{
            	echo $message, "<br />";
        	}
    	}
    	else
    	{
    		echo '<p>De optie is met succes verwijderd!</p>';

    		return $this->response->redirect('option/show/'.$option->question_id);
    	}
    }

    public function editAction($optionId)
    {
    	$this->view->option = Options::findFirstById($optionId);

        $option = Options::findFirstById($optionId);

        $this->tag->prependTitle($option->name);

    	if($this->request->isPost())
    	{
    		$options = Options::findFirstById($optionId);

    		$qID = $options->question_id;

    		$options->name 			= $this->request->getPost("name");
    		$options->question_id	= $this->request->getPost("question"); 

    		$options->save();

			return $this->response->redirect('option/show/'.$qID);
		}
    }
}

