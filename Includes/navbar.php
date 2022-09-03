<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #F55145; color: white;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><img src="img/sbca_logo.png" style="height: 45px;"><span style="color:white;">&nbsp; &nbsp;Bedan Connect</span></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item hover-underline-animation">
        <a class="nav-link" href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item hover-underline-animation">
        <a class="nav-link" href="tracker.php" style="color: white;">Tracker <span class="sr-only">(current)</span></a>
      </li>
        
    <li class="nav-item hover-underline-animation" style="color: white;">
        <a class="nav-link" href="register.php" style="color: white;">Register</a>
      </li>
        
     <li class="nav-item hover-underline-animation" style="color: white;">
        <a class="nav-link" href="#contact" style="color: white;">Contact</a>
      </li>
        
     <li class="nav-item hover-underline-animation" style="color: white;">
        <a class="nav-link" href='' data-toggle="modal" data-target="#loginmodal" style="color: white;">Login</a>
      </li>
    </ul>
      
    <div>
      
    </div>
    <div class="menutoggle zoom"> 
            <i class="fa fa-comment"></i>
            <span class="badge">0</span>
    </div>
      
    <div class="menutoggle zoom"> 
            <i class="fa fa-bell"></i>
            <span class="badge">0</span>
    </div>
     
    <div>
      
    </div>
    <h4 style="margin-top: 4px;" href="" class="menutoggle"><i class="fas fa-home zoom" style="cursor: pointer;"></i></h4>
    <h4 style="margin-top: 4px;" href="" class="menutoggle" style="padding-left: 0px;"><i class="fas fa-bell  zoom" style="cursor: pointer;"></i></h4> 
    <h4 style="margin-top: 4px;" href="" class="menutoggle" style="padding-left: 0px;"><i class="fas fa-cog  zoom" style="cursor: pointer;"></i></h4>  
    <div class="inline my-2 my-lg-0">
     
       <div 
           style='height: 40px; width: 40px; 
           border-radius: 100px; 
           background-size: cover;
           background-position: center;
           background-image: url(img/sample.jpg);'>
       </div>
    </div>
  </div>
</nav>


<!--Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-image: url(img/modalcover.png); background-size: cover; min-height: 250px; background-position: center;">
<!--        <h5 class="modal-title" id="loginmodal"></h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" style='padding: 20px; border-radius: 5px; padding-bottom: 0px;'>
                                

                                <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="nunber" class='form-control' placeholder='Email Address' name="username" id="username" required> 
                                </div>

                                 <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="nunber" class='form-control' placeholder='Password' name="username" id="username" required> 
                                </div>
                                 <div class="input-group input-group-sm mb-3">
                                   <input type="submit" class='btn btn-warning form-control' style="font-size: 15px;" name="login"> 
                                </div>

                        </form>
      </div>
      <div class="modal-footer" style="padding-left: 35px;" >
            <a href='' class="mr-auto">Forgot your password</a>  
      </div>
    </div>
  </div>
</div>