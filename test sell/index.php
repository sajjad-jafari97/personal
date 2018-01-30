<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="mainView">
            <div class="headerView">
                <img src="img/logo.png">
            </div>
            <div class="contentView">
                <div class="onequart">
                    <p>Liste des membres</p>
                    <table>
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>PRÉNOM</th>
                                <th>AGE</th>
                                <th>VILLE</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <div class="threequart">
                    <p>Formulaire de tri</p>
                    <form id="formulaire" action="index.php" method="POST">
                        <select class="tri" name="colonne">
                            <option>nom</option>
                            <option>prenom</option>
                            <option>age</option>
                            <option>ville</option>
                        </select>
                        <select class="tri" name="tri">
                            <option value="ASC">Croissant</option>
                            <option value="DESC">Décroissant</option>
                        </select>
                    </form>
                    <table>
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>PRÉNOM</th>
                                <th>AGE</th>
                                <th>VILLE</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <p>Nouveau membre</p>
                    <form id="addMembre" action="index.php" method="POST">
                        <p>Nom <input type="text" class="input" name="nom"> Prénom <input type="text" class="input" name="prenom"> Age <input type="text" class="input" name="age"> Ville <input type="text" class="input" name="ville"></p>
                        <button>Valider</button>
                    </form>
                    <div class="message"></div>
                </div>
            </div>
            <div class="footerView">
                <ul>
                    <li><img src="img/facebook.png"></li>
                    <li><img src="img/twitter.png"></li>
                    <li><img src="img/google.png"></li>
                </ul>
            </div>
        </div>
    </body>
    <script src="js/jquery.3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</html>
