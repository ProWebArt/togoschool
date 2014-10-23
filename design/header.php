<header class="container">
            <!-- <div class="row thumbnail">
                    <img id="imgheader" src='/coursenligne/images/image_header.jpg' alt="togoschool"/>
            </div> -->
    
            <?php 
					if(isset($_SESSION["Auth"]["id"])){
                                            include dirname(__FILE__).'/navbar_user.php';
					}elseif(isset($_SESSION["Admin"]["id"])){
                                            include dirname(__FILE__).'/navbar_admin.php';
                                        }else{
                                            include dirname(__FILE__).'/navbar_default.php'; 
					}
				?>
</header>