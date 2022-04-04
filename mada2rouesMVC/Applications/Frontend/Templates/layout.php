<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        Mada 2 Roues
        <?php
        if (isset($title)) {
            echo ' - ' . $title;
        }
        ?>
    </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/mada2rouesMVC/Web/bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/mada2rouesMVC/Web/assets/css/main.css">
    
</head>

<body>

    <?php include("header.php"); ?>

    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <?php include("carousel.html"); ?>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-12 col-md-8 order-md-2">
                <?php if ($user->hasFlash()) echo '<p>', $user->getFlash(), '</p>'; ?>
                <?php echo $content; ?>
            </div>
            <div class="col-12 col-md-4 order-md-1 pr-md-3">
                <?php include("carte.html"); ?>
            </div>
        </div>
    </div>

    <?php include("footer.html"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="/mada2rouesMVC/Web/assets/js/jquery.js"></script>
    <script src="/mada2rouesMVC/Web/bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>

</body>
</html>