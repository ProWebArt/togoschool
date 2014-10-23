<?php include dirname(__FILE__).'/include_header_admin.php'; 

if(isset($_GET["user"]) AND !empty($_GET["user"])){
    $user = intval(htmlspecialchars($_GET["user"]));
    $bdd->query("DELETE FROM users WHERE id = $user");
}
?>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Password</th>
                <th>Classe</th>
                <th>Date D'inscription</th>
                <th>Action</th>
            </tr>
        </thead>
    <tbody>
<?php
$query=$bdd->query("SELECT * FROM users");
while($result=$query->fetch()){
    echo '<tr>
            <td>' .$result["id"]. '</td>
            <td>' .$result["pseudo"]. '</td>
            <td>' .$result["email"]. '</td>
            <td>' .$result["tel"]. '</td>
            <td>' .$result["password"]. '</td>
            <td>' .$result["classe"]. '</td>
            <td>' .$result["date_inscription"]. '</td>
            <td>
                <a href="edit_user.php?user=' .$result["id"]. '" class="btn btn-default">Modifier</a>
                <a href="?user=' .$result["id"]. '" class="btn btn-danger" onclick="return confirm(\'Est de vous sur de vouloir supprimer ?\')">Supprimer</a>
            </td>
        </tr>';
}?>
    </tbody>
</table>
<?php include dirname(__FILE__).'/include_footer_admin.php';

