<?php include ("navItemActivation.php"); ?>

<div class="bg-dark">
    <div class="container">
        <div class="row">
            <nav class="col navbar navbar-expand-lg navbar-dark">
                <a href="" class="navbar-brand">Mada 2 Roues</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="<?php echo navItemActivation($title, 'Accueil'); ?>"><a href="/mada2rouesMVC/Web/presentation-1.html" class="nav-link">Accueil</a></li>
                        <li class="<?php echo navItemActivation($title, 'Historique'); ?>"><a href="/mada2rouesMVC/Web/presentation-2.html" class="nav-link">Historique</a></li>
                        <li class="<?php echo navItemActivation($title, 'A propos'); ?>"><a href="/mada2rouesMVC/Web/presentation-3.html" class="nav-link">A propos</a></li>
                        <li class="<?php echo navItemActivation($title, 'Contact'); ?>"><a href="/mada2rouesMVC/Web/presentation-4.html" class="nav-link">Contact</a></li>

                        <?php 
                        if ($user->isAuthenticated()) { ?>
                            <li class="<?php echo navItemActivation($title, ''); ?>"><a href="/mada2rouesMVC/Web/admin/" class="nav-link">Admin</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
