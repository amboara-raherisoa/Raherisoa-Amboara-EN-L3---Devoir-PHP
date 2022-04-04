<?php

namespace Applications\Backend\Modules\Presentation;

class PresentationController extends \Library\BackController
{
    public function executeIndex(\Library\HTTPRequest $request)
    {
        $this->page->addVar('title', 'Gestion des textes');

        $manager = $this->managers->getManagerOf('Presentation');
        
        $this->page->addVar('listeTextes', $manager->getList());
        $this->page->addVar('nombreTextes', $manager->count());
    }

    public function processForm(\Library\HTTPRequest $request)
    {
        $texte = new \Library\Entities\Presentation(array(
                'titre' => $request->postData('titre'),
                'contenu' => $request->postData('contenu')
            )
        );

        // L'identifiant du texte est transmis si on veut modifier le texte.
        if ($request->postExists('id')) {
            $texte->setId($request->postData('id'));
        }

        if ($texte->isValid()) {
            $this->managers->getManagerOf('Presentation')->save($texte);
            $this->app->getUser()->setFlash($texte->isNew() ? 'Le texte a bien été ajouté !' : 'Le texte a bien été modifié !');
        } else {
            $this->page->addVar('erreurs', $texte->getErreurs());
        }

        $this->page->addVar('texte', $texte);
    }


    public function executeUpdate(\Library\HTTPRequest $request)
    {
        // On vérifie si le formulaire a été envoyé.
        if ($request->postExists('titre')) {
            // Si c'est le cas, alors il procédera à la vérification des données et insérera le texte en BDD si tout est valide.
            $this->processForm($request);
        } else {
            // Il faut passer le texte à la vue si le formulaire n'a pas été envoyé.
            $this->page->addVar('texte', $this->managers->getManagerOf('Presentation')->getUnique($request->getData('id')));
        }

        $this->page->addVar('title', 'Modification d\'un texte');
    }


}
