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
            
            ul.timeline {
                list-style-type: none;
                position: relative;
            }
            ul.timeline:before {
                content: ' ';
                background: #d4d9df;
                display: inline-block;
                position: absolute;
                left: 29px;
                width: 2px;
                height: 100%;
                z-index: 400;
            }
            ul.timeline > li {
                margin: 20px 0;
                padding-left: 20px;
            }
            ul.timeline > li:before {
                content: ' ';
                background: white;
                display: inline-block;
                position: absolute;
                border-radius: 50%;
                border: 3px solid #22c0e8;
                left: 20px;
                width: 20px;
                height: 20px;
                z-index: 400;
            }
            
            a, p{color: black;}
            
            .box {
              width: 80px;
              height: 80px;
              background: #fff;
              border-radius: 50%;
              display: flex;
              justify-content: center;
              align-items: center;
              font-size: 35px;
              color: lightblue;
              cursor: pointer;
            }
            /* nor let's animate the white circle or the box */
            .box:hover {
              animation: btnAnime .6s ease forwards;
            }
            @keyframes btnAnime {
              5% {
                transform: scale(0.8);
              }
              25% {
                background: none;
              }
              50% {
                transform: scale(1.5);
                border: 1px solid #555;
              }
              100% {
                transform: scale(1);
                background: rgba(255, 255, 255, 0.1);
                border: 1px solid #555;
              }
            }
            /* now let's animate the bird */
            .box:hover i {
              animation: fly .6s ease forwards;
            }
            @keyframes fly {
              16.6% { transform: translate(50px, -60px) rotate(-60deg); }
              33.33% { transform: translate(50px, -100px) rotate(-120deg); }
              49.8% { transform: translate(0, -120px) rotate(-180deg); }
              66.4% { transform: translate(-50px, -100px) rotate(-240deg); }
              83% { transform: translate(-50px, -50px) rotate(-300deg); }
              100% { transform: translate(0, 0) rotate(-360deg); }
            }  
            
            th{text-align: center;}
            
            .tab-content{
                padding: 5%;
            }
            
        </style>
        
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

        <div class='container-fluid'>
        
            <div class="row" style="padding-top: 6vh; padding-bottom: 4vh;">
            <div class="col-xl-12 col-sm-12 col-ml-12'">
                <center>
                    <br><h1 style="color: black;">Welcome, Vince Ryan Bufete</h1><br>
                    <div class="card zoom" style="width: 25rem; display: inline-block; padding: 30px; margin: 10px; background-color: #4CAF50;">
                      
                      <div class="card-body">
                       <h1 style="color:white; text-align: left; display: inline-block;"><i class="fas fa-users"></i></h1>
                          &nbsp;&nbsp;
                        <h1 style="color:white; text-align: right; display: inline-block;">23</h1>
                      </div>
                    </div>
                    <div class="card zoom" style="width: 25rem; display: inline-block; padding: 30px; margin: 10px; background-color: #17A2B8;">
                      
                      <div class="card-body">
                        <h1 style="color:white; text-align: left; display: inline-block;"><i class="fas fa-user-tie"></i></h1>
                          &nbsp;&nbsp;
                        <h1 style="color:white; text-align: right; display: inline-block;">7</h1>
                      </div>
                    </div>
                    <div class="card zoom" style="width: 25rem; display: inline-block; padding: 30px; margin: 10px; background-color: #FFC107;">
                      
                      <div class="card-body">
                        <h1 style="color:white; text-align: left; display: inline-block;"><i class="fas fa-clipboard-list"></i></h1>
                          &nbsp;&nbsp;
                        <h1 style="color:white; text-align: right; display: inline-block;">11</h1>
                      </div>
                    </div>
                    
                    <div class="card zoom" style="width: 25rem; display: inline-block; padding: 30px; margin: 10px; background-color: #DC3545;">
                      
                      <div class="card-body">
                        <h1 style="color:white; text-align: left; display: inline-block;"><i class="fas fa-envelope"></i></h1>
                          &nbsp;&nbsp;
                        <h1 style="color:white; text-align: right; display: inline-block;">405</h1>
                      </div>
                    </div>
                    
                </center>
            </div>
                 
         </div>
        
        </div>
        
        <div class='container-fluid' style="background-color: #FAFAFA; padding-left: 5%; padding-right: 5%; padding-top: 2%; padding-bottom: 0px; margin-bottom: 0px;">
         <div class='row layer' style="width: 100%;">
            
             <div class="col-xl-12 col-sm-12 col-ml-12">
             <ul class="nav nav-tabs" id="myTab" role="tablist" >
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profiles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Requests</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent" style="border-bottom: 1px solid #DEE2E6; border-left: 1px solid #DEE2E6; border-right: 1px solid #DEE2E6; background-color: white; -webkit-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.65);
-moz-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.65);
box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.65);">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-hover table-sm table-bordered" id="tbl_users">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Picture</th>
                              <th scope="col">Username</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Batch</th>
                              <th scope="col">Course</th>
                              <th scope="col">Email Address</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center align-middle">
                                <center>
                                    <div
                             style='border-radius: 200px;
                                    background-color: black;
                                    width: 70px; height: 70px; 
                                    background-image: url(img/dev-img.jpg);
                                    background-size: cover;
                                    border: 1px solid white;
                                    background-position: center;
                                    -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                                </center>
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                             <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td style="text-align: center;" class="align-middle">
                                <a href='' class="btn btn-success"><i class="far fa-envelope"></i></a>
                                <a href='' class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href='' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>

                            <tr>
                              <td class="text-center align-middle">
                                <center>
                                    <div
                             style='border-radius: 200px;
                                    background-color: black;
                                    width: 70px; height: 70px; 
                                    background-image: url(img/joasch.jpg);
                                    background-size: cover;
                                    border: 1px solid white;
                                    background-position: center;
                                    -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                                </center>
                              </td>
                              <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                             <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                              <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                                <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                                <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                                <td class="text-center align-middle">
                                Joasch Roque
                              </td>
                                <td style="text-align: center;" class="align-middle">
                                <a href='' class="btn btn-success"><i class="far fa-envelope"></i></a>
                                <a href='' class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href='' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                    
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-hover table-sm table-bordered" id="tbl_profiles">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Picture</th>
                              <th scope="col">Username</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Batch</th>
                              <th scope="col">Course</th>
                              <th scope="col">Email Address</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center align-middle">
                                <center>
                                    <div
                             style='border-radius: 200px;
                                    background-color: black;
                                    width: 70px; height: 70px; 
                                    background-image: url(img/joasch.jpg);
                                    background-size: cover;
                                    border: 1px solid white;
                                    background-position: center;
                                    -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                                </center>
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                             <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td style="text-align: center;" class="align-middle">
                                <a href='' class="btn btn-success"><i class="far fa-envelope"></i></a>
                                <a href='' class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href='' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                  
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <table class="table table-hover table-sm table-bordered" id="tbl_requests">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Picture</th>
                              <th scope="col">Username</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Batch</th>
                              <th scope="col">Course</th>
                              <th scope="col">Email Address</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center align-middle">
                                <center>
                                    <div
                             style='border-radius: 200px;
                                    background-color: black;
                                    width: 70px; height: 70px; 
                                    background-image: url(img/joasch.jpg);
                                    background-size: cover;
                                    border: 1px solid white;
                                    background-position: center;
                                    -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                                    box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                                </center>
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                             <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                              <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td class="text-center align-middle">
                                Bufete Vince Ryan E
                              </td>
                                <td style="text-align: center;" class="align-middle">
                                <a href='' class="btn btn-success"><i class="far fa-envelope"></i></a>
                                <a href='' class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href='' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                </div> 
             </div>
        </div>
        
        </div>
      
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%; padding-top: 2%; padding-bottom: 0px; margin-bottom: 0px;">
            
            <div class="row layer">
                 <div class='col-xl-3 col-sm-12 col-ml-3'>
                    
                  <div class="card zoom" style="width: 90%; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                       <?php
                          
                          include 'charts/chart1.php';
                          ?>
                      </div>
                    </div>    

                    
                </div>
                
                <div class='col-xl-3 col-sm-12 col-ml-3'>
                    
                    <div class="card zoom" style="width: 90%; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                       <?php
                          
                          include 'charts/chart2.php';
                          ?>
                      </div>
                    </div>    
                    
                </div>
                
                <div class='col-xl-6 col-sm-12 col-ml-6'>
                    
                    <div class="card zoom" style="width: 90%; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                       <h5 style="color: black;">Users</h5>
                       <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br>
                          
                        <h5 style="color: black;">Users</h5>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br>
                          
                          <h5 style="color: black;">Users</h5>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br>
                          
                          <h5 style="color: black;">Users</h5>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>    
                    
                </div>
                
            </div>
            
            <div class="row layer" style="background-color: #FAFAFA;">
            
                <div class='col-xl-12 col-sm-12 col-ml-12'>
                    
                    
                </div>
            </div>
        </div>

	 <SCRIPT>
            
        //implementing datatable       
                $('#tbl_users').DataTable( {  
                "dom": 
                "<'row'<'col-md-6'l><'col-md-6'Bfp>>" +
                "<'row'<'col-md-6'><'col-md-6'>>" +
                "<'row'<'col-md-12't>><'row'<'col-md-12'i>>",
            } );
         
         $('#tbl_profiles').DataTable( {  
                "dom": 
                "<'row'<'col-md-6'l><'col-md-6'Bfp>>" +
                "<'row'<'col-md-6'><'col-md-6'>>" +
                "<'row'<'col-md-12't>><'row'<'col-md-12'i>>",
            } );
         
         $('#tbl_requests').DataTable( {  
                "dom": 
                "<'row'<'col-md-6'l><'col-md-6'Bfp>>" +
                "<'row'<'col-md-6'><'col-md-6'>>" +
                "<'row'<'col-md-12't>><'row'<'col-md-12'i>>",
            } );
         
        </SCRIPT>
        
    <?php include 'Includes/footer.php' ?>
        
</BODY>
    

</HTML>