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
             
        </style>
        
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

        
    <div class='container-fluid' 
         style='height: 78vh;
                background-size: cover;'>
        <div class='row'>
            
            <div class='col-xl-12 col-sm-12 col-ml-12' style='z-index: 20;'>
              
                    <br><br><br><br>
                    <h1 style="font-size: 5vw;  margin-left: 3vw; color: white;">Welcome to the Bedan Connect</h1>
              
            </div>
            
            <div class="line line1">
                <div class="wave wave1" style="background-image: url(assets/wavy/1.png);"></div>
            </div>

           <div class="line line2">
                <div class="wave wave2" style="background-image: url(assets/wavy/2.png);"></div>
           </div>

           <div class="line line3">
            <div class="wave wave3" style="background-image: url(assets/wavy/3.png);">
                </div>
            </div>
            
            <div class='col-xl-12 col-sm-12 col-ml-12' style='z-index: 20;'>
                
                   
                    <h1 style="font-size: 2vw; margin-left: 4vw; color: white">Connecting Bedistas from every batch one click at a time</h1>
              
            </div>
        
        </div>

        </div>  
        
        <div class='container-fluid' id="about">
         <div class='row' style='height: 67vh;'>
            <div class='col-xl-6 col-sm-12 col-ml-6' style='padding: 5vw; padding-top: 3vh;'>
            <h1 style='color: black;'>What is the website about?</h1><br>
             <p style='color: black;'>Let's face it. When people graduate, you stop hearing all about them, their new achievements and their stories. But what if I told you we're fixing that? The website aims to create a tracker that can help you find alumnis of San Beda College Alabang with ease <br><br>
             
             What are you waiting for? Hit the tracker link in the navigation bar now! <br><br>
                 
             Also, if you want to find out more about who developed the website...
             <br>Just scroll down a little bit more.
             </p>
                
                
             </div>
            <div class='col-xl-6 col-sm-12 col-ml-6'>
                <center>
                <img src="img/test2.png" style="width: 850px;">
                
                </center>
            </div>
        </div>
        </div>
        
        <div class='container-fluid' style='height: 65vh;'> 
         <div class='row'>
            <div class='col-xl-5 col-sm-12 col-ml-7'>
                <br><br><br><br>
                <center>
                    <div 
                     style='border-radius: 200px;
                            background-color: black;
                            width: 400px; height: 400px; 
                            background-image: url(img/dev-img.jpg);
                            background-size: cover;
                            border: 12px solid white;
                            background-position: center;
                            -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                            box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);'></div>
                </center>
            </div>
             
            <div class='col-xl-7 col-sm-12 col-ml-7' style='padding: 5vw;'>
                 <br><br><h1 style='color: black;'>Info about the Developer</h1><br>
                 <p style='color: black;'>My name is Vince Ryan Bufete and I am currently a Senior MTS Engineer in Ingram Micro PH. I graduated as cum laude in San Beda College Alabang for my bachelor's degree in Information Technology and currently taking up my masters in Information Technology also in the same institution. I am a very hard worker and I am very passionate about infrasturcture and web development! <br><br>

                 But aside from the serious things, I love to eat, watching anime, making art, listening to music, and many other things! Muay Thai is my passion and so aside from work I make it a habit to get to training every day. <br><br>

                 If you want to get to know more about me <a target="_blank" href='https://www.facebook.com/AraragiTamura'>just hit me up</a>. I'll make sure to message.
                 </p>
             </div>
            
            </div>      
        </div>
        
    <?php include 'Includes/footer.php' ?>
        
</BODY>
    

</HTML>