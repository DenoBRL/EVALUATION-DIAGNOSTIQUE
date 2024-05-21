<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SportsNews / Accueil</title>
    <script src="https://kit.fontawesome.com/b92d11c922.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="articles.css">
</head>

<body>
    <div class="header">
        <div class="header__texture"></div>
        <div class="header__mask">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
            </svg>

        </div>
        <div class="container">
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <h1 class="header__navbar--logo--title">SportsNews</h1>
                </div>
                <div class="header__navbar--menu">
                    <a href="/accueil.php" class="header__navbar--menu--link"><i class="fa-solid fa-home"></i> Accueil</a>
                    <a href="/connexion.php" class="header__navbar--menu--link"><i class="fa-solid fa-sign-in-alt"></i> Connexion</a>
                    <a href="/inscription.php" class="header__navbar--menu--link"><i class="fa-solid fa-user-plus"></i> Inscription</a>
                    <a href="" class="header__navbar--menu--link"><i class="fa-solid fa-newspaper"></i> Articles</a>
                    <a href="" class="header__navbar--menu--link"><i class="fa-solid fa-phone"></i> Contact</a>
                </div>
            </div>
            <div class="header__slogan">
                <h1 class="header__slogan--title">Bienvenue sur SportsNews, le site dédié aux articles sportifs</h1>
                <br> <br> <br> <br> <br> <br> <br> <br>
                <a href="" class="header__slogan--bottom">Contactez-moi</a>
            </div>

            <br> <br> <br> <br> <br> <br>

            <div class="articles">
                <div class="container">
                    <h2 class="articles__title">Articles</h2>
                    <div class="articles__items">
                        <div class="article" style="background: url(../Evaluation-diagnostique/articles.rugby.jpg); background-size: cover;">
                            <div class="article__filter"></div>
                            <div class="article__name">Ceci est un article sur le rugby</div>
                            <div class="article__icon"><i class="fas fa-play"></i></div>

                        </div>
                        <div class="article" style="background: url(../Evaluation-diagnostique/articles.24h.jpg); background-size: cover;">
                            <div class="article__filter"></div>
                            <div class="article__name">Ceci est un article sur les 24H du Mans</div>
                            <div class="article__icon"><i class="fas fa-play"></i></div>

                        </div>
                        <div class="article" style="background: url(../Evaluation-diagnostique/articles.JO.jpg); background-size: cover;">
                            <div class="article__filter"></div>
                            <div class="article__name">Ceci est un article sur les JO</div>
                            <div class="article__icon"><i class="fas fa-play"></i></div>

                        </div>
                    </div>
                </div>

            </div>

</body>

</html>