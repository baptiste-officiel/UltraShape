<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Shape</title>
    <link rel="stylesheet" href="./app/Public/front/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header id="bandeau">
        <div id="bande">
            <nav id="nav-bandeau" class="container">
                <!-- logo  -->
                <a href="index.php"><svg id="logo" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M21 23c-1.03 0-2.06-.25-3-.75c-1.89 1-4.11 1-6 0c-1.89 1-4.11 1-6 0c-.95.5-1.97.75-3 .75H2v-2h1c1.04 0 2.08-.35 3-1c1.83 1.3 4.17 1.3 6 0c1.83 1.3 4.17 1.3 6 0c.91.65 1.96 1 3 1h1v2h-1zM17 1.5c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2zm-2.57 6.98L12.18 10L16 13v3.84c.53.38 1.03.78 1.49 1.17c-.68.58-1.55.99-2.49.99c-1.2 0-2.27-.66-3-1.5c-.73.84-1.8 1.5-3 1.5c-.33 0-.65-.05-.96-.14C5.19 16.9 3 14.72 3 13.28C3 12.25 4.01 12 4.85 12c.98 0 2.28.31 3.7.83l-.53-3.1c-.11-.67.18-1.38.78-1.79l2.15-1.45l-2-.37l-2.82 1.93L5 6.4L8.5 4l5.55 1.03c.45.09.93.37 1.22.89l.88 1.55A5.007 5.007 0 0 0 20.5 10v2a7.01 7.01 0 0 1-6.07-3.52zM10.3 11.1l.44 2.65c.92.42 2.48 1.27 3.26 1.75V14l-3.7-2.9z" />
                    </svg></a>

                <div id="menu-bandeau">
                    <!-- On gère le menu burger en css à l'aide d'une checkbox  -->
                    <label for="burger"><img src="./app/Public/front/img/burger-blanc.png" alt="Menu"></label>
                    <input type="checkbox" name="burger" id="burger" role="button">

                    <ul id="menu">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?action=creations">Créations</a></li>
                        <li><a href="index.php?action=reparations">Réparations</a></li>
                        <li><a href="index.php?action=about">A propos</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                        <li><a href="index.php?action=connexion">Connexion</a><a href="index.php?action=inscription">Inscription</a></li>
                    </ul>
                </div>
            </nav>
            </div>
            <div id="titre-principal" class="container">
                <h1>Ultra Shape</h1>
            
            <h3 id="subtitle">Artisan Shaper</h3>
            
            </div>
        
    </header>
