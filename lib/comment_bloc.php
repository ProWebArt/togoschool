<div>
    <div class="well" style="width: 600px">
        <form method="post" action="insert_comment.php">
            <legend><h4>Laisser un commentaire</h4></legend>
            <div class="form-group">
                <textarea class="form-control" rows="3" name="commentaire" placeholder=""></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Poster"/>
            <?php if(empty($_SESSION["Auth"]["id"])){
                        echo '<span>
                        Pour commenter ce cours vous devez vous 
                        <a href="/coursenligne/login.php" id="new_login">connectez</a>
                        ou vous 
                        <a href="/coursenligne/sign_in.php" id="new_sign_in">inscrire</a>
                        </span>'; 
                    }
            ?>
        </form>
    </div>
</div>
    <hr>
    
                                            <!--Les commentaires-->
                                            