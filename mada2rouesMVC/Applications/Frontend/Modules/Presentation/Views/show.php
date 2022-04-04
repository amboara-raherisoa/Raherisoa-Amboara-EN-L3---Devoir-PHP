<h1 class="text-primary">
    <?php
    if ($title == 'Accueil') {
        echo 'Bienvenue';
    } else {
        echo $title;
    }
    ?>
</h1>
<p>
    <?php
    echo nl2br($textContent);
    ?>
</p>