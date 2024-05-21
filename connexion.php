<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SportsNews / Connexion</title>
    <script src="https://kit.fontawesome.com/b92d11c922.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="form.css">
</head>

<body>

    <div class="header header__otherpage">
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
                <br> <br> <br> <br> <br>
                <a href="" class="header__slogan--bottom">Contactez-moi</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form">
            <div class="form__title">Connexion</div>
            <form method="POST" action="traitementconnexion.php">
                <form class="form__inner" action="">
                    <div class="form__line">
                        <div class="form__block">
                            <h4 class="form__label">Email</h4>
                            <input class="form__input" type="text" id="email" name="email">
                        </div>
                        <div class="form__block">
                            <h4 class="form__label">Mot de passe</h4>
                            <input class="form__input" type="password" id="password" name="password">
                        </div>
                    </div>
                    <input class="header__slogan--bottom" value="M'inscrire" type="submit" name="ok">
                </form>
        </div>
    </div>

</body>

</html>