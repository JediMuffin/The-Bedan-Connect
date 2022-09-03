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
            
            .highlight{
                transition: transform .3s ease-in-out;  
            }
            
            .highlight:hover{
                  filter: brightness(108%);
            }
            
        </style>
        
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

        <div class="container-fluid slanted">
            <h1 style="margin-left: 3vw;">
            <br>Looking for someone?
            </h1>
            <h4 style="margin-left: 3vw;">Click their picture to view their profiles</h4>
        </div>
        
        <div class="container" style="min-height: 90vh;">
        
            <div class="row layer">
                <div class="col-xl-12 col-sm-12 col-ml-12'">
                <br><br>
                   <table class="table" id="tbl_tracker">
                      <thead style="display: none;">
                        <tr>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                              <a href='profile.php'>
                                <div class="highlight"
                     style='border-radius: 200px;
                            background-color: black;
                            width: 130px; height: 130px; 
                            background-image: url(img/dev-img.jpg);
                            background-size: cover;
                            border: 5px solid white;
                            background-position: center;
                            -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                              </a>
                          </td>
                          <td>
                            <h3 style='color: black; margin-bottom: 0px; padding-bottom: 0px;'>Bufete Vince Ryan </h3>
                            <h4 style='color: black;'>Senior Infrastructure Engineer at Ingram Micro</h4>
                            BSIT, Batch 2019
                          </td>
                        </tr>
                        <tr >
                          <td><div
                     style='border-radius: 200px;
                            background-color: black;
                            width: 130px; height: 130px; 
                            background-image: url(img/joasch.jpg);
                            background-size: cover;
                            border: 5px solid white;
                            background-position: center;
                            -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div></td>
                          <td>
                            <h3 style='color: black; margin-bottom: 0px; padding-bottom: 0px;'>Joasch Gamaliel Roque</h3>
                            <h4 style='color: black;'>Associate Professional Infrastructure Engineer at Ingram Micro</h4>
                            BSIT, Batch 2019
                          </td>
                        </tr>
                      </tbody>
                    </table>

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