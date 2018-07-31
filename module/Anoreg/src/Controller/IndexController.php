<?php
/**
 * Created by PhpStorm.
 * User: alylson
 * Date: 30/07/18
 * Time: 22:54
 */

namespace Anoreg\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}