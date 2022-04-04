<?php
namespace Library\Models;

use \Library\Entities\Presentation;

class PresentationManager_PDO extends PresentationManager
{
    public function getList()
    {
        $sql = 'SELECT id, titre, contenu FROM Presentation ORDER BY id';

        $requete = $this->dao->query($sql);
        $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Presentation');

        $listeTextes = $requete->fetchAll();

        $requete->closeCursor();
        
        return $listeTextes;
    }

    public function getUnique($id)
    {
        $requete = $this->dao->prepare('SELECT id, titre, contenu FROM Presentation WHERE id = :id');
        $requete->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $requete->execute();
        $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Presentation');
        
        if ($presentation = $requete->fetch()) {
            return $presentation;
        }

        return null;
    }

    public function count()
    {
        return $this->dao->query('SELECT COUNT(*) FROM Presentation')->fetchColumn();
    }

    protected function add(Presentation $texte)
    {
        $requete = $this->dao->prepare('INSERT INTO Presentation SET titre = :titre, contenu = :contenu');

        $requete->bindValue(':titre', $texte->getTitre());
        $requete->bindValue(':contenu', $texte->getContenu());

        $requete->execute();
    }

    protected function modify(Presentation $texte) {
        $requete = $this->dao->prepare('UPDATE Presentation SET titre = :titre, contenu = :contenu WHERE id = :id');

        $requete->bindValue(':titre', $texte->getTitre());
        $requete->bindValue(':contenu', $texte->getContenu());
        $requete->bindValue(':id', $texte->getId(), \PDO::PARAM_INT);

        $requete->execute();

    }

}
