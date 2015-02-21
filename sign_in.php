<?php
$auth = 0;

include dirname(__FILE__).'/lib/includes.php';

if(!empty($_POST["pseudo"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["password_verif"]) &&!empty($_POST["classe"])){
    include dirname(__FILE__).'/lib/sign_in_traitement.php';
}else{
?>
<!DOCTYPE html>
<html lang="fr">
<?php
include dirname(__FILE__).'/lib/head.php'; 
include dirname(__FILE__).'/design/navbar_default.php'
?>
    <body>
        <section class="container contenu">
            <!-- SIGN IN -->
            <div class="col-sm-6 col-sm-offset-3" style="margin-top: 10px">
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