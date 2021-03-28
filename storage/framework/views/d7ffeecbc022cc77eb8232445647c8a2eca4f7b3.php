<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
        <div class="header">
            <img src="\img\main_image.png">
            <h4><a href="/">Accueil</a></h4>
            <h4><a href="/listCharacter">Personnages</a></h4>
            <h4><a href="/listCartoonist">Déssinateurs</a></h4>
            <h4><a href="/addCharacter">+ de Personnage</a></h4>
            <h4><a href="/addCartoonist">+ de Déssinateur</a></h4>
        </div>

    </header>
    <main>
    <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html><?php /**PATH T:\laragon\www\AnimeCharacters\resources\views/layouts/base.blade.php ENDPATH**/ ?>