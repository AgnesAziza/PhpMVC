<header>
    <div id="info-bar">
        <p>My wonderful platform</p>
    </div>

    <div id="banner-bloc">
        <h1>TP Authentification et MVC</h1>
    </div>

    <div id="account_bar">
        <div class="connection center">
            <?php
                if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                    echo "<a href=\"./index.php?ctrl=user&action=doDisconnect\" class=\"no-deco\" title=\"Disconnect\">
                            <img src=\"View/images/person.svg\" alt=\"\">
                            <div class=\"text\">Disconnect</div>
                        </a>";
                } else {
                    echo "<a href=\"./index.php?ctrl=user&action=login\" class=\"no-deco\" title=\"Login or create account\">
                            <img src=\"View/images/person.svg\" alt=\"\">
                            <div class=\"text\">Login</div>
                        </a>";
                }
            ?>
        </div>
    </div>

    <ul id="menu_bar">
        <a href="./index.php?ctrl=user&action=usersList" class="no-deco"><li>Liste des utilisateurs</li></a>
        <a href="./" class="no-deco"><li>Le mémoire</li></a>
        <a href="./" class="no-deco"><li>La soutenance</li></a>
        <a href="./" class="no-deco"><li>Le carnet de liaison</li></a>
        <a href="./" class="no-deco"><li>Les espaces de travail</li></a>
    </ul>
</header>