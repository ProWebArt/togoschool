<?php
$auth = 0;
include dirname(__FILE__).'/lib/includes.php';

if(!empty($_POST["email"]) && !empty($_POST["password"])){
    $email= htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = sha1($password);
    
    $query=$bdd->query("SELECT * FROM users WHERE email='$email' and password='$password'");
    $result = $query->fetch();
    if($result){
        $_SESSION["Auth"]["id"]=$result["id"];
        $_SESSION["Auth"]["pseudo"] = $result["pseudo"];
        $_SESSION["Auth"]["email"] = $result["email"];
        setFlash("SALUT " .strtoupper($result["pseudo"]). " BON RETOUR SUR TOGOSCHOOL.COM", "success");
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
include dirname(__FILE__).'/lib/head.php';
include dirname(__FILE__).'/design/navbar_default.php';
?>
    <body>
        <section class="container contenu">
            <div class="col-sm-6 col-sm-offset-3" style="margin-top: 100px">
                <div class="panel panel-success" style="text-align: center">
                    <div class="panel-heading">
                        <h2 class="titre">CONNEXION</h2>
                    </div>
                    <div class="panel-body">
                        <form class="form" method="post">
                            <div class="form-group has-success">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                                    <label for="email" class="sr-only"></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required/><br/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group has-success">
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <label for="password" class="sr-only"></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required/><br/>
                                </div>
                            </div>
                            <?= flash(); ?>
                            <button type="submit" class="btn btn-success btn-lg btn-block" >S'identifier</button><br/>
                            <p class="help-block">Pas encore inscrit ? <a href="sign_in.php">S'inscrire sur mescours</a></p>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Copyright © 2014 Tous droits réservés. <a href="http://www.togoschool.com">www.togoschool.com</a>™
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<?php
}