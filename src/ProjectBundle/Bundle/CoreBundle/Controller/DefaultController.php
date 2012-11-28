<?php

namespace ProjectBundle\Bundle\CoreBundle\Controller;

class DefaultController extends BaseController
{
    public function indexAction()
    {
        return $this->render('ProjectBundleCoreBundle:Default:index.html.twig');
    }
}
