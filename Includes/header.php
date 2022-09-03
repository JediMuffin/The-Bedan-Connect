        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <title>Bedan Connect</title>
        
        <!--bootstrap and jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" media="all" href="/assets/application-mailer-dbc5154d3c4160e8fa7ef52fa740fa402760c39b5d22c8f6d64ad5999499d263.css" />

               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" media="all" href="/assets/application-mailer-dbc5154d3c4160e8fa7ef52fa740fa402760c39b5d22c8f6d64ad5999499d263.css" />

        <!--datatable plugin dependency-->
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
        <link rel='stylesheet prefetch' href='https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css'>
        <script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
       
        <!--SASS plugin dependency-->
        <link rel="stylesheet/less" type="text/css" href="styles.less" />
         <script src="less.js" type="text/javascript"></script>

    
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            @import url('https://fonts.googleapis.com/css?family=Courgette');
            @import url('https://fonts.googleapis.com/css?family=Archivo Narrow');
                        .zoom, .zoom_navfloat{
              transition: transform .3s;
            }
            
            html {
              scroll-behavior: smooth;
            }
            
            .section{
                 -webkit-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                -moz-box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                box-shadow: 0px 10px 13px -4px rgba(0,0,0,0.4);
                
            }
            
            .zoom:hover {
              -ms-transform: scale(1.1); /* IE 9 */
              -webkit-transform: scale(1.1); /* Safari 3-8 */
              transform: scale(1.05); 
              z-index: 10;
             -webkit-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             -moz-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
            } 
            
            .zoom_navfloat:hover {
              -ms-transform: scale(1.3); /* IE 9 */
              -webkit-transform: scale(1.3); /* Safari 3-8 */
              transform: scale(1.3); 
              z-index: 10;
             -webkit-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             -moz-box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
             box-shadow: 10px 10px 16px -12px rgba(0,0,0,0.07);
            }
            
            .line{
            position: absolute;
            width: 100%;
            overflow: hidden;
            height: 72%;
            background-color: #F44336;
           
            }
            
            .dark{
                background-color: #3E2723 !important;
            }
            
            .line_invert{
            position: absolute;
            width: 100%;
            overflow: hidden;
            height: 100%;
            background-color: #BCAAA4;
           
            }
            
            .line1{
            z-index: 15;
            opacity: 0.5;
            
            
            }
            .line2{
            z-index: 10;
            opacity: 0.7;
            
            }
            .line3{
            z-index: 5;
            opacity: 0.5;
            }
        
                 
            @keyframes animate{
                0%{
                    transform: translateX(0) translateZ(0) scaleY(1);
                }
                50%{
                    transform: translateX(-25%) translateZ(0) scaleY(1);
                }
                100%{
                    transform: translateX(-50%) translateZ(0) scaleY(1);
                }
            }
        
            .wave {
                
                position: absolute;
                left: 0;
                width: 200%;
                height: 100%;
                background-repeat: repeat no-repeat;
                background-position: 0 bottom;
                transform-origin: center bottom;

            }
            
            .wave_invert {
                
                position: absolute;
                left: 0;
                width: 200%;
                height: 100%;
                background-repeat: repeat no-repeat;
                background-position: 0 top;
                transform-origin: center top;

            }
            
        
            .wave1{
                -webkit-background-size: 50% 80px;
                background-size: 50% 80px;
            }
            
            .wave2{
                -webkit-background-size: 50% 100px;
                background-size: 50% 100px;
                animation: animate 12s linear infinite;
            }
            
             .wave3{
                -webkit-background-size: 50% 80px;
                background-size: 50% 80px;
                animation: animate 18s linear infinite;
            }
            
                        #view_contacts:link { text-decoration: none; }
            #view_contacts:visited { text-decoration: none; }
            #view_contacts:hover { text-decoration: none; }
            #view_contacts:active { text-decoration: none; }
            
            .menutoggle {
            position: relative;
            float: left;

            font-size: 22px;
            cursor: pointer;
            color: #E0E0E0;
            -moz-transition: all 0.2s ease-out 0s;
            -webkit-transition: all 0.2s ease-out 0s;
            transition: all 0.2s ease-out 0s;
        }
            .menutoggle i {
                padding:12px;
                padding-left: 5px;
                padding-bottom:0px;
            }
            .menutoggle:hover {
                color: white;
            }
            .badge {
                position: absolute;
                top: 0;
                right: 0;
                display:inline-block;
                min-width:10px;
                
                font-size:12px;
                font-weight:700;
                line-height:1;
                color:#fff;
                text-align:center;
                white-space:nowrap;
                vertical-align:baseline;
                background-color:#777;
                border-radius:10px;
            }
            
            .comment_btn , .flag_btn{
                background: none;
                border: none;
                padding: 0;
                font: inherit;
                cursor: pointer;
                outline: inherit; 
            }
            
            .flag_btn:hover{
              color: blue; 
            }
            
            .layer{
                padding-top: 5vh;
                padding-bottom: 10vh;
            }
            
            .highlight{
                transition: transform .3s ease-in-out;  
            }
            
            .highlight:hover{
                  filter: brightness(108%);
            }
            
            .modal-backdrop
                {
                    opacity:0.8 !important;
                }
            
        </style>