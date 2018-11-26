<?php 
require_once ('auth.php');
//echo "aqui va despues del login";
//echo $_SESSION['usuario'];
 ?>

<!DOCTYPE html>
<html>
<body>

<!-- Static navbar -->
<nav class="navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a href="../dashboard/dashboard.php"><img src="imagens/icone_twitter.png" /></a>
    </div>
    
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../auth/logout.php"><span class="glyphicon glyphicon-off btn-sm "></span></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</body>
</html>