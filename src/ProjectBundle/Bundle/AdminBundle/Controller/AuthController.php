<?php

namespace ProjectBundle\Bundle\AdminBundle\Controller;

class AuthController extends BaseController
{
    public function init()
    {
        parent::init();
    }

    public function loginAction()
    {
        return $this->render('ProjectBundleAdminBundle:Auth:login.html.twig');
    }
}