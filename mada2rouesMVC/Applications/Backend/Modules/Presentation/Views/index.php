<p style="text-align: center">
    Il y a actuellement <?php echo $nombreTextes; ?> textes. En voici la liste :
</p>

<table border=6 cellspacing=6 cellpadding=10 >
    <tr><th>Titre</th><th>Contenu</th><th>Action</th></tr>
    <?php

    foreach ($listeTextes as $texte) {
        echo '<tr><td>', $texte['titre'],
            '</td><td>', nl2br($texte['contenu']),
            '</td><td><a href="/mada2rouesMVC/Web/admin/presentation-update-', $texte['id'],'.html">Modifier</a></td></tr>',
            "\n";
    }
    
    ?>
</table>
