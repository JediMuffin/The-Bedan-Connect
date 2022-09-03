<?php 
?>   

<nav id="dashboard-nav" class="navbar navbar-expand-lg navbar-dark sticky-top" style='background-color: #0077B4;'>
            
            <a class="navbar-brand" href="Dashboard.php"><img src='../img/imlogo2.png' style='width: 130px;'></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
         
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style='margin-left: 3vw;'>
            <li class="active">
                <a class="nav-link" href="Dashboard.php" role="button" aria-haspopup="false" aria-expanded="false">Home</a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="Dashboard.php" role="button" aria-haspopup="true" aria-expanded="false">Dashboard</a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="Coming.php" role="button" aria-haspopup="true" aria-expanded="false">Profiles</a>
            </li>
            <li class="dropdown" style="
            <?php
            if(!isset($_SESSION['login'])){
                echo "display: none;";
            }                           
            ?>                            
            ">
                <a class="nav-link" href="../User/Functions/logout.php" role="button" aria-haspopup="true" aria-expanded="false">Logout</a>
            </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
    </nav>