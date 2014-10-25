<?php include dirname(__FILE__).'/include_header_admin.php'; 

if(isset($_GET["user"]) AND !empty($_GET["user"])){
    $user = intval(htmlspecialchars($_GET["user"]));
}
?>

<?php include dirname(__FILE__).'/include_footer_admin.php';
