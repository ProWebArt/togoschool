<div>
    <div class="well" style="width: 625px">
        <form method="post" action="insert_comment.php">
            <legend><h4>Laisser un commentaire</h4></legend>
            <div class="form-group">
                <textarea class="form-control" rows="3" name="commentaire" placeholder=""></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Poster"/>
            <?php if(empty($_SESSION["Auth"]["id"])){
                        echo '<span>
                        Pour commenter ce cours vous devez vous 
                        <a data-toggle="modal" href="#connexion">connectez</a>
                        ou vous 
                        <a data-toggle="modal" href="#inscription">inscrire</a>
                        </span>'; 
                    }
            ?>
        </form>
        
        <!-- Debut du contenu de la fenetre modale #connexion -->
        <div class="modal fade" id="connexion">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 100px;">
                        <div class="panel panel-success" style="text-align: center; margin-bottom: 0px;">
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
                </div>
            </div>
        </div>
        <!-- Fin du contenu de la fenetre modale #connexion -->
        
        <!-- Debut du contenu de la fenetre modale #inscription -->
        
        <div class="modal fade" id="inscription">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 10px;">
                        <div class="panel panel-primary" style="text-align: center; margin-bottom: 0px;">
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
                </div>
            </div>
        </div>
        <!-- Fin du contenu de la fenetre modale #inscription -->
    </div>
    
</div>
    <hr>
    
                                            <!--Les commentaires-->
                                            