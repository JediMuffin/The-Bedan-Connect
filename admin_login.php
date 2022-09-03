<!DOCTYPE HTML>
<HTML>
    <HEAD>
        

         <?php
        session_start();
        include 'Includes/Connect.php';
        include 'Includes/header.php';
        ?>
        
        <style>
            body{
/*                background-color: #F5F5F5;*/
            }
            
            h1, h2, h3, h4, p{
                color: white;
                font-family: Montserrat;
            }
            
            .mail{
                color: white;
                font-family: Archivo Narrow;
                margin-top: 8%;
                margin-left: 8%;
            }
           
            .slanted {
            background-color:#F55145;
            height:25vh;
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 56%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 45%, 0 100%);
        }
            
        .zoom:hover {
              -ms-transform: scale(1.01); /* IE 9 */
              -webkit-transform: scale(1.01); /* Safari 3-8 */
              transform: scale(1.01); 
              z-index: 10;
             -webkit-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             -moz-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
            } 
            
            
        </style>
        
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

        <div class="container-fluid slanted">
            <h1 style="margin-left: 3vw;">
            <br>Welcome, superuser
            </h1>
            <h4 style="margin-left: 3vw;">Reminder never to share this page to anyone</h4>
        </div>
        
        <div class="container" style="min-height: 90vh;">
        
            <div class="row layer">
                <div class="col-xl-12 col-sm-12 col-ml-12'">
                <br><br>
                   
                <center>
                
                        <div class="card zoom" style='width: 70%; border-radius: 0px; '>
                          <img class="card-img-top" src="img/carousel1/c1.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Almost There...</h5>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" style='padding: 20px; border-radius: 5px; '>
                                
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
                                   <input type="submit" class='btn btn-warning form-control' style="font-size: 25px;" name="login"> 
                                </div>

                                </form>
                            </div>
                        </div>
                    
                </center>    
                  
                </div>
            </div>
        </div>
        
        <SCRIPT>
            
        //implementing datatable       
                $('#tbl_tracker').DataTable( {
                "pageResize": true,   
                "dom": 
                "<'row'<'col-md-6'l><'col-md-6'Bfp>>" +
                "<'row'<'col-md-6'><'col-md-6'>>" +
                "<'row'<'col-md-12't>><'row'<'col-md-12'i>>",
            } );
        </SCRIPT>
        
    <?php include 'Includes/footer.php' ?>
        
</BODY>
    

</HTML>