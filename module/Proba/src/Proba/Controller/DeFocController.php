<?php

namespace Proba\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DeFocController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

