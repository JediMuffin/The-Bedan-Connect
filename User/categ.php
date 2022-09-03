<!DOCTYPE HTML>
<HTML>
    <HEAD>
        

        
         <?php
        session_start();
        include '../Includes/Connect.php';
        include '../Includes/header.php';
        
        $id = $_REQUEST['id'];
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
                        $categID = '';
                        $Name = '';                    
    
                        $view_categ = mysqli_query($connections, "SELECT * FROM `categories` WHERE categID = '$id'");
                        while($row = mysqli_fetch_assoc($view_categ)){
                            $categID = $row['categID'];
                            $Name = $row['Name'];
                        }

                    ?>
                    
                  <h1 class="display-4"><?php echo $categID; ?></h1>
                  <p class="lead"><?php echo $Name; ?></p> 
                </div>
                <div style='padding: 2vw;'>
                    <br>
                    <table id='table-tickets' class='table table-hover'>
                    <thead style='background-color: white;'>
                        <th>Ticket Number</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Requested By</th>
                        <th>Requested For</th>
                        <th>Description</th>
                        <th>Notes</th>
                    </thead>
                    <tbody>
                        <?php
                        $view_tickets = mysqli_query($connections, "SELECT * FROM `tickets` where categID ='$id'");
                        while($row = mysqli_fetch_assoc($view_tickets)){
                            $ticketID = $row['ticketID'];
                            $categID = $row['categID'];
                            $requestedBy = $row['requestedBy'];
                            $clientFor = $row['clientFor'];
                            $date = $row['date'];
                            $description = $row['description'];
                            $notes = $row['notes'];

                            echo "
                            <tr>
                                <td><a href=''>$ticketID</a></td>
                                <td><a href=''>$categID</a></td>
                                <td>$requestedBy</td>
                                <td>$clientFor</td>
                                <td>$date</td>
                                <td>$description</td>
                                <td>$notes</td>
                            </tr>
                            ";
                        }

                        ?>
                    </tbody>
                </table>
                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
         <?php include 'Includes/footer.php' ?>
        

<script>
    //implementing datatable       
    $(document).ready( function () {
    $('#table-tickets').DataTable();
} );
</script>

    </BODY>
</HTML>