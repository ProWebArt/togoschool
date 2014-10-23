<?php
$auth = 0;
include dirname(__FILE__).'/../lib/includes.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["password"])){
    /** SECURISATION DES VARIABLES **/
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = sha1($password);
    
    /** VERIFICATION DE L'EXISTENCE DES DONNEES DANS LA BASE DE DONNEE **/
    $query=$bdd->query("SELECT * FROM admin WHERE pseudo='$pseudo' and password='$password'");
    $result = $query->fetch();
    if($result){
        $_SESSION["Admin"]["id"]=$result["id"];
        $_SESSION["Admin"]["pseudo"] = $result["pseudo"];
        setFlash("SALUT MONSIEUR " .strtoupper($result["pseudo"]). " MERCI DE M'AVOIR CREER. AFFECTUEUSEMENT COURSENLIGNE.TG...", "success");
        header("location:" .ROOT. "index.php");
        die();
    }else{
        setFlash("L'email ou le mot de passe renseigné est erroné", "warning");
        header("location:" .ROOT. "login.php");
        die();
    }
}else{
    
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include dirname(__FILE__).'/../lib/head.php';
include dirname(__FILE__).'/../design/navbar_default.php';
?>
    <body>
        <section class="container contenu">
            <div class="col-sm-6 col-sm-offset-3 login" style="margin-top: 100px">
                <div class="panel panel-success" style="text-align: center">
                    <div class="panel-heading">
                        <h2 class="titre">CONNEXION</h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="form-group">
                                <div class="input-group has-success">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-ok-circle"></span>
                                </div>
                                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo Monsieur" required/><br/>    
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group has-error">
                                <div class="input-group-addon">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required/><br/>
                                </div>
                            </div>
                            <?= flash(); ?>
                            <button type="submit" class="btn btn-success btn-lg btn-block" >S'identifier</button><br/>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Copyright © 2014 Tous droits réservés. <a href="http://www.togoschool.tg">www.togoschool.tg</a>™
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<?php
}

