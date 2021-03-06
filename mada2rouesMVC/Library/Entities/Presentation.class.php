<?php

namespace Library\Entities;

class Presentation extends \Library\Entity
{
    protected $titre;
    protected $contenu;

    const TITRE_INVALIDE = 1;
    const CONTENU_INVALIDE = 2;

    public function isValid()
    {
        return !(empty($this->titre) || empty($this->contenu));
    }

    // SETTERS
    public function setTitre($titre)
    {
        if (!is_string($titre) || empty($titre)) {
            $this->erreurs[] = self::TITRE_INVALIDE;
        } else {
            $this->titre = $titre;
        }
    }

    public function setContenu($contenu)
    {
        if (!is_string($contenu) || empty($contenu)) {
            $this->erreurs[] = self::CONTENU_INVALIDE;
        } else {
            $this->contenu = $contenu;
        }
    }

    // GETTERS
    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }
}
