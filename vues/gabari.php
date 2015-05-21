<!-- Hugo PALLA SIO1  Si6 -->
<!DOCTYPE html>

<html>
    <head>
        <title>Cognitio - Partagez vos connaissances</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/SITEBOUSILLE/styles/style.css">
        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>
    <body>
        <nav>
            <?= $menu ?>
        </nav>

        <header>
            <?= $header ?>
        </header>
        <?= $contenu ?> <!-- Affiche le contenu du site -->
        <footer>
            <div class="fcol">
                <h3>Qui sommes nous ?</h3>
                <p>Nous pensons que l’internet est une source incroyable de connaissances,<br/>
                    cependant elles sont souvent disséminés ! Notre site à donc pour but de <br/>
                    permettre aux utilisateurs de partager leurs connaissances et de trouver<br/>
                    facilement celles dont ils ont besoins !</p>
            </div>
            <div class="fcol">
                <h3>Nous contacter</h3>
                <p>18 Rue Haute Chiffolière<br/>
                    53000 Laval, FRANCE<br/>

                    <a href="#" class="bouton">Envoyer un mail</a></p>
            </div>
        </footer>
    </body>
    <html>
