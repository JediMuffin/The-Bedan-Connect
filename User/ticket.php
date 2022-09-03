<!DOCTYPE HTML>
<HTML>
    <HEAD>
        

         <?php
        session_start();
        include '../Includes/Connect.php';
        include '../Includes/header.php';
        ?>
        
        <style>
            body{
                background-color: #F5F5F5;
            }
            
             h1, h2, h3, h4, p{
                font-family: Montserrat;
            }
            
            a{font-weight: bold; color: #009688;}
            
            .card{display: inline-block; margin: 10px; border-radius: 0px;
                -webkit-box-shadow: 6px 6px 5px -4px rgba(0,0,0,0.64);
                -moz-box-shadow: 6px 6px 5px -4px rgba(0,0,0,0.64);
                box-shadow: 6px 6px 5px -4px rgba(0,0,0,0.64);
            }
            
            .card:hover{
                transition: .3s;
                background-color: #ECEFF1; 
               }
            
            .note{
                background-color: #FAFAFA;
                min-width: 60vw;
                max-width: 65vw;
                min-height: 22vh;
                margin: 1vh;
                margin-left: 3vw;
                margin-bottom: 0px;
                border-radius: 13px;
            }
        </style>
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>

    <br><br>
    <div class='container' style='background-color: #EEEEEE'>
        <div class='row'>
            <div class='col-xl-12 col-sm-12 col-ml-12' style='padding: 0px;'> 
                <div class="jumbotron" 
                     style="background-image: url(../img/test8.png);
                            background-repeat: repeat-x;
                            background-position: bottom;
                            margin-bottom: 0px;
                            ">
                     
                    <?php
                    $ticketID = '';
                    $description = '';
                    $id = $_REQUEST['id'];
    
                        $view_tickets = mysqli_query($connections, "SELECT * FROM `tickets` WHERE ticketID = '$id'");
                        while($row = mysqli_fetch_assoc($view_tickets)){
                            $ticketID = $row['ticketID'];
                            $categID = $row['categID'];
                            $requestedBy = $row['requestedBy'];
                            $clientFor = $row['clientFor'];
                            $date = $row['date'];
                            $description = $row['description'];
                            $notes = $row['notes'];
                        }

                        ?>    
                    
                    
                  <h1 class="display-4"><?php echo $ticketID; ?></h1>
                  <p class="lead"><?php echo $description; ?></p> 
                </div>
                <div class="accordion" id="accordionExample" style='margin-top: 0px;'>
                      <div>
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style='width: 75vw; text-decoration: none;'>
                              <h4 style='font-size: 20px;'>Add a Work Note</h4>
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" >
                          <div class="card-body" style='padding: 10vw; padding-top: 5vh; padding-bottom: 5vh;'>
                              
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                              
                               
                                <textarea class='form-control' name="note"></textarea>
                                <br>
                                
                                <input type="hidden" name="ticket" value="<?php echo $id; ?>" >
                                <input type='submit' name='note_add' class='btn btn-primary form-control' value="Click here to make a Work Note">
                             </form>
                              
                          </div>
                        <hr>
                        </div>
                      </div>
                    </div>
                   
                 <br>
                 <div class='card note'>   
                    <table style='display: inline-block;'>
                    <tr>
                    <td>
                    <div style='height: 90px; width: 90px; background-color: white; background-image: url(../img/user.png); background-size: cover; border-radius: 50px; float: left; margin: 3vh; border: 3px solid #FF5722; display: inline-block;'></div>     
                    </td> 
                    <td>
                    <span style='font-style: italic;'>Assigned to ME </span><br>
                    Ticket Requested by: <?php echo $requestedBy ?><br>
                    Ticket Requested for: <?php echo $clientFor ?><br>
                    Notes: <?php echo $notes; ?>
                    </td>     
                    </tr>
                    </table>
                     
                     <span style='float: right; margin: 15px;'><?php echo $date; ?></span>
                </div>
                
                  
                <?php  
                
                $view_tickets = mysqli_query($connections, "SELECT * FROM `tickets_note` WHERE ticketID = '$id'");
                        while($row = mysqli_fetch_assoc($view_tickets)){
                            
                            $note = $row['Note'];
                            $date = $row['Date'];
                            
                            echo "
                            <div class='card note'>   
                            <table style='display: inline-block;'>
                            <tr>
                            <td>
                            <div style='height: 90px; width: 90px; background-color: white; background-image: url(../img/user.png); background-size: cover; border-radius: 50px; float: left; margin: 3vh; border: 3px solid #FF5722; display: inline-block;'></div>     
                            </td> 
                            <td>
                            $note
                            </td>     
                            </tr>
                            </table>

                             <span style='float: right; margin: 15px;'>$date</span>
                        </div>";
                            
                        }
                ?>
                
            </div>
        </div><br><br>
    </div>
         <?php include 'Includes/footer.php' ?>

<?php
 
 if(isset($_POST['note_add'])){
        $note = $_POST['note'];
        $ticket = $_POST['ticket'];
        $now = date('Y-m-d h:i:sa');
            
        $query = mysqli_query($connections, "INSERT INTO `tickets_note`(`ticketNote`, `ticketID`, `Note`, `Date`) VALUES ('','$ticket','$note','$now')");

        echo "<script>window.location.href='ticket.php?id=$ticket';</script>";
    }   
        
?>
    </BODY>
</HTML>