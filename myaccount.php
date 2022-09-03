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
            <br>Stay Connected
            </h1>
            <h4 style="margin-left: 3vw;">Sign up now and be part of the community</h4>
        </div>
        
        <div class="container" style="min-height: 90vh;">
        
            <div class="row layer">
                <div class="col-xl-12 col-sm-12 col-ml-12'">
                <br><br>
                   
                  
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