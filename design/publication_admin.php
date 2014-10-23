<!DOCTYPE html>
<html lang="fr">
    <?php include('includes/head.php'); ?>
    <body>
        
        <div class="login">
                <form role="form" method="post" action="recup_login.php">
                    <fieldset id="fieldset">
                        <h1>Mes Cours</h1>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required/><br/>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required/><br/>
                            <button type="submit" class="btn btn-success btn-lg btn-block" >S'identifier</button><br/>
                            <p>Pas encore inscrit ? <a href="#">S'inscrire sur mescours</a></p>
                        </div>
                    </fieldset>
                </form>
        </div>
    </body>
</html>