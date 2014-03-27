<?php

class IndexController extends Phalcon\Mvc\Controller
{

	public function indexAction()
	{

        if(!$this->request->isPost()){
            $this->flash->notice('This is a Notice!!');
        }
	}

}
