<HTML>
<head>
             <?php
        session_start();
        include 'Includes/Connect.php';
        include 'Includes/header.php';
        ?>
        
            <link rel="stylesheet/less" type="text/css" href="styles.less" />
            <script src="less.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


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
            
        .case{
          background-color: #F55145;
          width: 100%;
          height: 30%;
          margin: 0;
          padding: 0;
          overflow: hidden;
                }
          .slides, & > .dg {
            display: none;
          }  
    </style>
</head>

  <body>      
      <?php include 'Includes/navbar.php' ?>
      
      <div class="case container-fluid" id="particle-slider">
        <div class="slides">
        <div id="first-slide" class="slide" data-src="img/technerd.png">
      	</div>
    	</div>
  		<canvas class="draw"></canvas>

      </div>
      
       <div class='container-fluid'>
        
            <div class="row" style="padding-top: 6vh; padding-bottom: 4vh;">
            <div class="col-xl-12 col-sm-12 col-ml-12'">
                <center>
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
                                usbufv00
                              </td>
                             <td class="text-center align-middle">
                                Vince Ryan
                              </td>
                              <td class="text-center align-middle">
                                Bufete
                              </td>
                                <td class="text-center align-middle">
                                2019
                              </td>
                                <td class="text-center align-middle">
                                BSIT
                              </td>
                                <td class="text-center align-middle">
                                vincebufete@gmail.com
                              </td>
                                <td style="text-align: center;" class="align-middle">
                                <a href='' class="btn btn-success"><i class="far fa-envelope"></i></a>
                                <a href='' class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href='' class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                            </tr>

                            <tr>
                              
                              <td class="text-center align-middle">
                                usroqj00
                              </td>
                             <td class="text-center align-middle">
                                Joasch 
                              </td>
                              <td class="text-center align-middle">
                                 Roque
                              </td>
                                <td class="text-center align-middle">
                                2019
                              </td>
                                <td class="text-center align-middle">
                                BSIT
                              </td>
                                <td class="text-center align-middle">
                                joaschroque@gmail.com
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
                              <th scope="col">Job</th>
                              <th scope="col">About</th>
                              <th scope="col">Details</th>
                              <th scope="col">Education</th>
                              <th scope="col">Skills</th>
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
                               usroqj00 
                              </td>
                             <td class="text-center align-middle">
                                 Test Information
                              </td>
                              <td class="text-center align-middle">
                                 Test Information
                              </td>
                                <td class="text-center align-middle">
                                 Test Information
                              </td>
                                <td class="text-center align-middle">
                                Test Information
                              </td>
                                <td class="text-center align-middle">
                                 Test Information
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
                                usbufv00
                              </td>
                             <td class="text-center align-middle">
                                Test Information
                              </td>
                              <td class="text-center align-middle">
                                 Test Information
                              </td>
                                <td class="text-center align-middle">
                                 Test Information
                              </td>
                                <td class="text-center align-middle">
                                 Test Information
                              </td>
                                <td class="text-center align-middle">
                                Test Information
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
                                uscasj00
                              </td>
                              <td class="text-center align-middle">
                                John
                              </td>
                                <td class="text-center align-middle">
                                Doe
                              </td>
                                <td class="text-center align-middle">
                                2023
                              </td>
                                <td class="text-center align-middle">
                                BSA
                              </td>
                            <td class="text-center align-middle">
                                johndoe@gmail.com
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
                          
                        <h5 style="color: black;">Employed</h5>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br>
                          
                          <h5 style="color: black;">Unemployed</h5>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><br>
                          
                          <h5 style="color: black;">Promotions</h5>
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

       <?php include 'Includes/footer.php' ?>
      
      <script>

        var init = function(){
          var isMobile = navigator.userAgent &&
          navigator.userAgent.toLowerCase().indexOf('mobile') >= 0;
          var isSmall = window.innerWidth < 1000;

          var ps = new ParticleSlider({
            ptlGap: isMobile || isSmall ? 3 : 0,
            ptlSize: isMobile || isSmall ? 3 : 1,
            width: 1e9,
            height: 1e9
          });

          var gui = new dat.GUI();
          gui.add(ps, 'ptlGap').min(0).max(5).step(1).onChange(function(){
            ps.init(true);
          });   
          gui.add(ps, 'ptlSize').min(1).max(5).step(1).onChange(function(){
            ps.init(true);
          });
          gui.add(ps, 'restless');
          gui.addColor(ps, 'color').onChange(function(value){
            ps.monochrome = true;
            ps.setColor(value);
              ps.init(true);
          });


          (window.addEventListener
           ? window.addEventListener('click', function(){ps.init(true)}, false)
           : window.onclick = function(){ps.init(true)});
        }

        var initParticleSlider = function(){
          var psScript = document.createElement('script');
          (psScript.addEventListener
            ? psScript.addEventListener('load', init, false)
            : psScript.onload = init);
          psScript.src = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/23500/ps-0.9.js';
            psScript.setAttribute('type', 'text/javascript');
          document.body.appendChild(psScript);
        }

        (window.addEventListener
          ? window.addEventListener('load', initParticleSlider, false)
         : window.onload = initParticleSlider);

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
      </script>
  </body>
</HTML>