<div class="row contenu">
                <div class="navbar navbar-inverse navbar-fixed-top" role='navigation'>
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/togoschool/admin/index.php">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/togoschool/admin/utilisateurs.php">Utilisateurs</a></li>
                            <li><a href="/togoschool/admin/cours_admin.php">Cours</a></li>
                            <li><a href="/togoschool/admin/reception_admin.php">Reception</a></li>
                            <li><a href="/togoschool/admin/publication_admin.php">Publication</a></li>
                            <li><a href="/togoschool/admin/faq_admin.php">FAQ</a></li>
                        </ul>
                        <div class="container">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> ADMIN (<?= strtoupper($_SESSION["Admin"]["pseudo"]) ?>)<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mon Profil</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mes messages <span class="badge">12</span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Mes statistiques</a></li>
                                <li class="divider"></li>
                                <li><a href="/togoschool/logout.php"><span class="glyphicon glyphicon-log-out"></span> Se deconnecter</a></li>
                            </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-left" role="search" action="/togoschool/search.php" method="get">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" name="search" id="search" placeholder="Recherche">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div>
                </div>
            </div>