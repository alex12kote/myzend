<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $newsModel = new Application_Model_News();
        print_r($newsModel->getData()); 
    }


}

