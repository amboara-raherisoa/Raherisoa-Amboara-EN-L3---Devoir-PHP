<?php

namespace Library;

abstract class Entity implements \ArrayAccess
{
    protected $id;
    protected $erreurs = array();

    public function __construct(array $donnees = array())
    {
        if (!empty($donnees)) {
            $this->hydrate($donnees);
        }
    }

    public function isNew()
    {
        return empty($this->id);
    }

    public function getErreurs()
    {
        return $this->erreurs;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set'.ucfirst($attribut);
            
            if (is_callable(array($this, $methode))) {
                $this->$methode($valeur);
            }
        }
    }

    public function offsetGet($var)
    {
        $method = 'get' . ucfirst($var);
        if (isset($this->$var) && is_callable(array($this, $method))) {
            return $this->$method();
        }
    }

    public function offsetSet($var, $value)
    {
        $method = 'set' . ucfirst($var);
        if (isset($this->$var) && is_callable(array($this, $method))) {
            $this->$method($value);
        }
    }

    public function offsetExists($var)
    {
        return isset($this->$var) && is_callable(array($this, 'get' . ucfirst($var)));
    }

    public function offsetUnset($var)
    {
        throw new \Exception('Impossible de supprimer une quelconque valeur');
    }

}
