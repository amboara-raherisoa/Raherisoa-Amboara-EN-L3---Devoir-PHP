<?php

namespace Library\Models;

use \Library\Entities\Presentation;

abstract class PresentationManager extends \Library\Manager
{
    /**
    * Méthode retournant une liste de textes
    * @return array La liste des textes de présentation . Chaque entrée est une instance de Presentation.
    */
    abstract public function getList();

    /**
    * Méthode retournant un texte précis.
    * @param $id int L'identifiant du texte à récupérer
    * @return Presentation Le texte de présentation demandé
    */
    abstract public function getUnique($id);

    /**
    * Méthode renvoyant le nombre de news total.
    * @return int
    */
    abstract public function count();

    /**
    * Méthode permettant d'ajouter un texte.
    * @param $texte Presentation le texte à ajouter
    * @return void
    */
    abstract protected function add(Presentation $texte);

    /**
    * Méthode permettant de modifier un texte.
    * @param $texte Presentation le texte à modifier
    * @return void
    */
    abstract protected function modify(Presentation $texte);

    /**
    * Méthode permettant d'enregistrer un texte.
    * @param $texte Presentation le texte à enregistrer
    * @see self::add()
    * @see self::modify()
    * @return void
    */
    public function save(Presentation $texte)
    {
        if ($texte->isValid()) {
            $texte->isNew() ? $this->add($texte) : $this->modify($texte);
        } else {
            throw new \RuntimeException('Le texte doit être validé pour être enregistré');
        }
    }

}
