<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class AlbumController extends AbstractActionController
{

    public function homeAction(){
        return $this->indexAction();
    }
    public function indexAction()
    {
        return $this->listAction();
    }
    public function listAction(){
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /module-specific-root/skeleton/foo
        return array();
    }

    public function editAction()
    {
        return array();
    }


    public function addAction()
    {
        echo "<h1> this is add action</h1>";
        return array();
    }

    public function deleteAction(){
        return array();
    }

}
