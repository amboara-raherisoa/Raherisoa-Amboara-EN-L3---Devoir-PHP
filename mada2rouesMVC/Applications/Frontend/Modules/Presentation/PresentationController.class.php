<?php

namespace Applications\Frontend\Modules\Presentation;

class PresentationController extends \Library\BackController
{
    public function executeIndex(\Library\HTTPRequest $request)
    {
        $_GET = array_merge($_GET, array('id' => 1));
        $this->executeShow($request);
    }

    public function executeShow(\Library\HTTPRequest $request)
    {
        $presentation = $this->managers->getManagerOf('Presentation')->getUnique($request->getData('id'));
        
        if (empty($presentation)) {
            $this->app->getHttpResponse()->redirect404();
        }

        $this->page->addVar('title', $presentation->getTitre());
        $this->page->addVar('textContent', $presentation->getContenu());
    }

}
