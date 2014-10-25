<?php
$auth = 0;
include dirname(__FILE__).'/lib/includes_head.php';

?>
<div class="row">
    <h2 class="titre" style="text-align: center">Résultats de la recherche</h2>
</div>
<div class="row">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#utilisateurs" data-toggle="tab">Utilisateurs</a></li>
        <li><a href="#cours" data-toggle="tab">Cours</a></li>
    </ul>
    <br/>
    <div class="tab-content">
        <!-- RECHERCHE PARMI LES UTILISATEURS -->
        <div class="tab-pane active" id="utilisateurs">
            <?php
                $search = htmlspecialchars($_GET['search']);
                if(isset($_GET['search']) AND !empty($_GET["search"]) AND preg_match("/[^0\^\'\" \/]/", $search)){
                $query = $bdd->query("SELECT * FROM users WHERE pseudo LIKE '%$search%'");
                if($query->rowCount() > 0 ){
                    while($resultat = $query->fetch()){
                        ?>
                    <div class="thumbnail form-control">
                        <a href="#">
                        <?php
                        echo $resultat["pseudo"];
                        ?>
                        </a>
                    </div>
            <?php
                }
                }else{
                    echo '<div class="row">
                        <h2 class="titre" style="text-align: center">Aucun résultat ne correspond à votre recherche</h2>
                    </div>';
                }
                }else{
                    echo '<div class="row">
                        <h2 class="titre" style="text-align: center">Aucun résultat ne correspond à votre recherche</h2>
                    </div>';
                }
            ?>
        </div>
        <!-- FIN RECHERCHE PARMI LES UTILISATEURS -->
        <!-- DEBUT RECHERCHE PARMI LES COURS -->
        <div class="tab-pane" id="cours">
            <?php
                $search = htmlspecialchars($_GET['search']);
                if(isset($_GET['search']) AND !empty($_GET["search"]) AND preg_match("/[^0\^\'\" \/]/", $search)){
    
                $query = $bdd->query("SELECT * FROM cours WHERE titre LIKE '%$search%'");
                
                if($query->rowCount() > 0 ){
                    while($resultat = $query->fetch()){
                    ?>
                <div class="thumbnail form-control">
                    <a href="<?php echo $resultat["lien"]; ?>">
                    <?php
                    echo $resultat["matiere"];
                    ?>
                    </a>
                    - <span class="small"><?php echo $resultat['classe']; ?></span>
                </div>
            <?php
                    }
                }else{
                    echo '<div class="row">
                        <h2 class="titre" style="text-align: center">Aucun résultat ne correspond à votre recherche</h2>
                    </div>';
                }
                }else{
                    echo '<div class="row">
                        <h2 class="titre" style="text-align: center">Aucun résultat ne correspond à votre recherche</h2>
                    </div>';
                }
            ?>
        </div>
        <!-- FIN RECHERCHE PARMI LES COURS -->
    </div>
</div>
<?php
include dirname(__FILE__).'/lib/includes_foot.php'; ?>
