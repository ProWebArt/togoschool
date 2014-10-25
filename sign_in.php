<?php
$auth = 0;

include 'lib/includes.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["password_verif"]) &&!empty($_POST["classe"])){

    /* SECURISATION DES VARIABLES RECUS */
$pseudo = htmlspecialchars($_POST["pseudo"]);
$email = htmlspecialchars($_POST["email"]);
$pass1 = htmlspecialchars($_POST["password"]);
$pass2 = htmlspecialchars($_POST["password_verif"]);
$tel = htmlspecialchars($_POST["tel"]) ? htmlspecialchars($_POST["tel"]) : "";
$classe = htmlspecialchars($_POST["classe"]);

    /* INSERTION NOUVEAU MEMBRE */
    if($pass1 == $pass2){
        $pass1 = sha1($pass1);
        $insert = $bdd->prepare('INSERT INTO users(pseudo, email, classe, tel, password, date_inscription) VALUES(:pseudo, :email, :classe, :tel, :pass1, now())');
        $insert->execute(array(":pseudo" => $pseudo,
                                ":email" => $email, 
                                ":classe" => $classe, 
                                ":tel" => $tel,
                                ":pass1" => $pass1)
                        );
        $insert->closeCursor();
        $selectId= $bdd->query("SELECT * FROM users WHERE pseudo='$pseudo' and password='$pass1'");
        $donnees=$selectId->fetch();
            if($donnees){
                $_SESSION["Auth"]["id"]=$donnees["id"];
                $_SESSION["Auth"]["pseudo"] = $donnees["pseudo"];
                $_SESSION["Auth"]["email"] = $donnees["email"];
                setFlash("BIENVENU(E) ". strtoupper($donnees['pseudo']) ." SUR TOGOSCHOOL.COM LA PREMIERE PLATFORM TOGOLAISE DE COURS EN LIGNE ACCESSIBLE H24");
                header("Location: " .ROOT. "index.php");
                die();
            }else{
                setFlash("Veuillez bien renseigné les champs", "info");
                header("Location:" .ROOT. "sign_in.php");
                die();
            }
    }else{
        setFlash("Les deux mots de passes ne sont pas identiques", "info");
        header("Location:" .ROOT. "sign_in.php");
        die();
    }
}else{
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include'lib/head.php'; 
include 'design/navbar_default.php'
?>
    <body>
        <section class="container contenu">
            <!-- SIGN IN -->
            <div class="col-sm-6 col-sm-offset-3 login" style="margin-top: 10px">
                <div class="panel panel-primary" style="text-align: center">
                    <div class="panel-heading">
                        <h2 class="titre">INSCRIPTION</h2>
                    </div>
                    <div class="panel-body">
                        <form class="form" method="post">
                            <div class="form-group">
                                <label for="pseudo" class="sr-only"></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only"></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only"></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_verif" class="sr-only"></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                    <input type="password" class="form-control" id="password_verif" name="password_verif" placeholder="Entrez à nouveau votre mot de passe" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tel" class="sr-only"></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="Entrez votre numéro de telephone (Optionnel)"/>
                                </div>
                            </div>
                                <p>Vous etes en quel classe ?</p>
                            <p>
                            <label for="seconde" class="radio-inline">
                                <input type="radio" name="classe" id="seconde" value="seconde">Seconde
                            </label>
                            <label for="premiere"class="radio-inline">
                                <input type="radio" name="classe" id="premiere" value="premiere">Premiere
                            </label>
                            <label for="terminale" class="radio-inline">
                                <input type="radio" name="classe" id="terminale" value="terminale">Terminale
                            </label>
                                <?= flash(); ?>
                            </p>
                            <button type="button" id="submit" class="btn btn-primary btn-lg btn-block" >S'inscrire</button><br/>
                            <input type="submit" id="form" style="display:none;" />
                        </form>        
                    </div>
                    <div class="panel-footer">
                        Copyright © 2014 Tous droits réservés. <a href="http://www.togoschool.com">www.togoschool.com</a>™
                    </div>
                </div>
            </div><!-- END SIGN IN -->
        </section>
    </body>
</html>
<?php 
}