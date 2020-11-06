<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace TransportInterprovincial\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\ServiceManager\ServiceManager;
use Laminas\Mvc\Controller\Plugin\Redirect;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
		return new ViewModel([
			'login'  => true
		]);
    }
}
