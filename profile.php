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
            
        </style>
        
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

        <div class="container-fluid" style="height: 45vh; 
                                            background-image:url(img/carousel1/c1.jpg);
                                            background-size: cover;
                                            background-attachment: fixed;
                                            background-position: bottom;
                                            filter:brightness(70%);
                                            ">
            
            <div class="row">
                    <div style="height: 70vh; z-index: 15; filter: brightness(80%);"></div>
                   <div class='col-xl-12 col-sm-12 col-ml-12' style='z-index: 20;'>
              
                    <br><br><br><br>
<!--                    <h1 style="font-size: 5vw;  text-align: center; color: white;" class="mail">Vince Ryan Bufete</h1>-->
            
                </div> 
            </div>
        </div>
        
        <div class='container'>
         <div class="row" style="padding-top: 6vh;">
            <div class="col-xl-12 col-sm-12 col-ml-12'">
                <center>
                <h1 style="color: black;">Vince Ryan Bufete, MIT</h1>    <hr> 
            </center>
            </div>
                 
         </div>
            
         <div class='row layer' style="width: 100%;">
            <div class='col-xl-4 col-sm-12 col-ml-4'>
            <h2 style='color: black;'>About Me</h2><br>
             <p style='color: black;'>Hey there! Welcome to my online resume. I am currently working as a Senior Infrastructure Engineer at Ingram Micro and I handle many technologies on a daily basis. My primary focus is Wintel, so that means I get to handle servers. A LOT of servers. I handle over 4000 Windows Servers globally. I also manage Active Directory, DNS, GPO, and DHCP. <br><br>
             
             But hey, don't be shy to message me. <br>
                 
             Also, if you want to find out more about who developed the website...Just scroll down a little bit more.
             </p>
             </div>
            <div class='col-xl-4 col-sm-12 col-ml-4'>
                <center>
                    <div 
                     style='border-radius: 200px;
                            background-color: black;
                            width: 300px; height: 300px; 
                            background-image: url(img/dev-img.jpg);
                            background-size: cover;
                            border: 12px solid white;
                            background-position: center;
                            -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                </center>
            </div>
            <div class='col-xl-4 col-sm-12 col-ml-4' >
            <h2 style='color: black;'>Details</h2><br>
             <p style='color: black;'>
                Birthday: February 14, 1998 <br> <br>
                Current Position: Senior Professional, Infrastructure Engineer (Wintel)
                 
                 <br><br>
                 
                 Contact Details: (Mobile) +63175031048
                 
                 <br><br>
                 
                 Interests: Windows Server 2012 - 2019, Windows Technology, Azure, AD
                 
                 <br><br>
                 
                 Hobbies: Muay Thai, Brazilian Jiu Jitsu, Music, Writing, Poetry, Books, Boxing
                
             </div>

        </div>
        
        </div>
      
        <div class="container-fluid">
            
             <div class='row layer' style="background-color: #FAFAFA; padding-top: 5vh; padding-bottom: 8vh;">
            <div class='col-xl-12 col-sm-12 col-ml-12'>
            <center>
                    <br><h1 style="color: black;">My Skills and Services</h1><br>
                    <div class="card zoom" style="width: 20rem; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                        <h1 style="color:black;"><i class="fab fa-windows"></i></h1>
                        <h5 class="card-title">Wintel</h5>
                        <p class="card-text">I manage the Windows OS, configuration, and lifecycle of over 4000 Windows Servers globally.</p>
                       <br>
                        <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="far fa-star"></i>    
                        <br><br>
                      </div>
                    </div>
                    <div class="card zoom" style="width: 20rem; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                        <h1 style="color:black;"><i class="fas fa-server"></i></h1>
                        <h5 class="card-title">Active Directory</h5>
                        <p class="card-text">I can design, configure, and troubleshoot Active Directory, DNS, DHCP, GPO and so much more...</p>
                        <br>
                        <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="far fa-star"></i>    
                        <br><br>
                      </div>
                    </div>
                    <div class="card zoom" style="width: 20rem; display: inline-block; padding: 30px; margin: 10px; border-top: 3px solid red">
                      
                      <div class="card-body">
                        <h1 style="color:black;"><i class="fab fa-internet-explorer"></i></h1>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">I am a full stack developer and can manage both FRONT and BACK END development</p>
                       <br>
                        <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i><i class="far fa-star"></i>    
                        <br><br>
                      </div>
                    </div>
                   
                </center>
                </div>          
            </div>
            
            <div class="row layer">
                <div class="col-md-6 offset-md-3">
                    <h1 style="color: black; text-align: center;">Experience</h1><br>
                    <ul class="timeline">
                        <li>
                            <strong><a href='#'>Ingram Micro, (L3) Senior Professional, Infrastructure</a></strong>
                            <a href="#" class="float-right">June 2022 - Present</a>
                            <p>I am currently a Senior Professional, Wintel Engineer (L3) at Ingram Micro and we handle GPO, DHCP, Windows, VMWARE, Hyper-V </p>
                        </li>
                        <li>
                            <strong><a href='#'>Ingram Micro, (L2) Professional, Infrastructure</a></strong>
                            <a href="#" class="float-right">May 2021 - June 2022</a>
                            <p>I am currently a Senior Professional, Wintel Engineer (L2) at Ingram Micro and we handle GPO, DHCP, Windows, VMWARE, Hyper-V</p>
                        </li>
                        <li>
                            <strong><a href='#'>Ingram Micro, (L1) Associate Professional, Infrastructure</a></strong>
                            <a href="#" class="float-right">Jul 2019 - May 2021</a>
                            <p>I am currently a Associate Professional, Wintel Engineer (L1) at Ingram Micro and we handle GPO, DHCP, Windows, VMWARE, Hyper-V</p>
                        </li>
                    </ul>
                    
                    <br><br><hr><br><br>
                    
                    <h1 style="color: black; text-align: center;">Education</h1>
                    <ul class="timeline">
                         <li>
                            <strong><a href='#'>San Beda College Alabang, MIT</a></strong>
                            <a href="#" class="float-right">June 2022 - Present</a>
                            <p>Ongoing</p>
                        </li>
                        <li>
                            <strong><a href='#'>San Beda College Alabang, BSIT</a></strong>
                            <a href="#" class="float-right">May 2021 - June 2022</a>
                            <p>Grade: 1.3<br>
                            Activities and societies: -Vice President of the Bedan Information Technology Society - 2018<br><br>

                            -President of the Information Technology Digital Arts Team (BDGTAL) - 2018<br><br>

                            -Member of Silakbo (Bedan Creative Arts organization) - 2016</p>
                        </li>
                        <li>
                            <strong><a href='#'>Escuela de San Lorenzo Ruiz, Secondary</a></strong>
                            <a href="#" class="float-right">Jul 2019 - May 2021</a>
                            <p>3rd Honor<br><br> Best in Eloquence Award</p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row layer" style="background-color: #FAFAFA;">
            
                <div class='col-xl-12 col-sm-12 col-ml-12'>
                    <center>
                        <h1 style="color:black;">Contact Me</h1><br>
    
                        <div class="container">
                        <form>
                            <textarea class="form-control"></textarea>   
                            <br>
                            <h6>Click the plane to send me an email</h6>
                            <div class="box">
                                <i class="fas fa-paper-plane" style="color: black;"></i>
                            </div>
                        </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>

	
    <?php include 'Includes/footer.php' ?>
        
</BODY>
    

</HTML>