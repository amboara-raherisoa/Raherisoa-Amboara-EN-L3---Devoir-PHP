<form action="" method="post">
    <p>

    <?php
    if (isset($erreurs) && in_array(\Library\Entities\Presentation::TITRE_INVALIDE, $erreurs))
        echo 'Le titre est invalide.<br />';
    ?>
    <label>Titre</label>
    <input type="text" name="titre" value="<?php if (isset($texte)) echo $texte['titre']; ?>" /><br />

    <?php
    if (isset($erreurs) && in_array(\Library\Entities\Presentation::CONTENU_INVALIDE, $erreurs))
        echo 'Le contenu est invalide.<br />';
    ?>
    <label>Contenu</label>
    <textarea rows="8" cols="60" name="contenu"><?php if (isset($texte)) echo $texte['contenu']; ?></textarea><br />
    
    <?php
    if(isset($texte) && !$texte->isNew()) {
    ?>
        <input type="hidden" name="id" value="<?php echo $texte['id']; ?>" />    
        <input type="submit" value="Modifier" name="modifier" />
    <?php
    }
    ?>

    </p>
</form>