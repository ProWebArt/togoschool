<div class="row contenu">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/coursenligne/index.php">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/coursenligne/cours.php">Cours</a></li>
                          <li><a href="/coursenligne/faq.php">FAQ</a></li>
                          <li><a href="/coursenligne/apropos.php">A Propos</a></li>
                        </ul>
                        <form class="navbar-form pull-left" role="search" action="/coursenligne/search.php" method="get">
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
                        <form class="navbar-form pull-right" method="post" action="/coursenligne/login.php">
                            <a class="btn btn-sm btn-primary" href="/coursenligne/sign_in.php">S'inscrire</a>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="email"/>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="password"/>
                            <button type="submit" class="btn btn-success btn-sm">Se connecter</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                    
                </nav>
   </div>