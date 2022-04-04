<?php

namespace Applications\Backend\Modules\Connexion;

class ConnexionController extends \Library\BackController
{
    public function executeIndex(\Library\HTTPRequest $request)
    {
        $this->page->addVar('title', 'Connexion');

        if ($request->postExists('login')) {
            $login = $request->postData('login');
            $password = $request->postData('password');

            if ($login == $this->app->getConfig()->get('login')
                    && $password == $this->app->getConfig()->get('pass')) {
                $this->app->getUser()->setAuthenticated(true);
                $this->app->getHttpResponse()->redirect('.');
            } else {
                $this->app->getUser()->setFlash('Le pseudo ou le mot de passe est incorrect.');
            }
        }

    }

}
