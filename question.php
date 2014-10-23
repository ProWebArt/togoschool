<?php include 'lib/includes_head.php'; ?>

<form role="form" method="post" action="recup_question.php" enctype="multipart/form-data">
                    <fieldset id="fieldset">
					<?php
						if(!empty($_GET["etat"])){
						$etat=htmlentities($_GET["etat"]);
						if($etat=="true"){
							echo "<font color='green'>Ok pour l'envoi de votre question</font><br>";
						}else{
							echo "<font color='red'>erreur</font><br>";
						}
						}
					?>
                        <h4>Envoi de documents</h4>
                        <div class="form-group">
						
          <input type="text" class="form-control" id="email" name="titre" placeholder="Titre" required/><br/>
		<select name="matiere" class="form-control">
			<option>Choisir une matiere</option>
			<option>Mathematique</option>
			<option>SVY</option>
			<option>Physiques</option>
			
		</select><br>
		<input type="file" class="form-control" name="file" id="question_file" onchange="filename(this);"/>
                <button type="button" class="btn btn-default" id="button_choisir_fichier">Choisir un fichier</button><br>
       <label></label>
		<textarea name="question" class="form-control" placeholder="Quelques details sur le sujet"></textarea><br>
		 
        <button type="submit" class="btn btn-success btn-lg btn-block" >Envoyer</button><br/>
                           
                        </div>
                    </fieldset>
                </form>
<?php include 'lib/includes_foot.php'; ?>



					
				
				
				<?php/*
				
				
					</section><!-- end of #content -->
			
					<?php
						include("includes/sidebar.php");
					?>

				<!-- end of #main content and sidebar-->
			</section>
			<?php
				include("includes/footer.php");
			?>
			
		</div><!-- #wrapper -->
		<!-- Free template created by http://freehtml5templates.com -->
	</body>
</html>
*/
?>