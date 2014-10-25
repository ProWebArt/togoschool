<?php include dirname(__FILE__).'/lib/includes_head.php'; ?>


<div class="row" style="text-align: center">
        <h3 class="titre">Votre boite de reception</h3>
        </div>
<div class="panel panel-primary">
    <table class="table table-bordered table-striped table-responsive table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>ENNONCE</th>
                <th>SUJET</th>
                <th>CORRIGE</th>
		<th>MATIERE</th>
            </tr>
        </thead>
        <tbody>
	    <?php
			include dirname(__FILE__)."/lib/connexion_base.php";
			$id=$_SESSION["Auth"]["id"];
			global $bdd;
			$query=$bdd->query("SELECT * FROM reception WHERE id_eleve='$id'");
			$i=1;
			while($result=$query->fetch()){
				$ennonce=$result["ennonce"];
				$sujet=$result["sujet"];
				$corrige=$result["corrige"];
				$classe=$result["classe"];
				$matiere=$result["matiere"];
				echo "<tr>
						<td>$i</td>
						<td>$ennonce</td>
						<td><a href='$sujet' target='_blank'><img src='images/see_question.png' title='Voire le sujet' /></a></td>
						<td><a href='$corrige' target='_blank'><img src='images/see_answer.png' title='Voire le corrige'/></a></td>
						
						<td>$matiere</td></tr>";
						$i++;
						};
			
			?>
            
        </tbody>
    </table>
</div>
<?php include 'lib/includes_foot.php'; ?>