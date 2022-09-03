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
                background-color: #C5CAE9; 
               }
            
        </style>
    </HEAD>
    <BODY>
        
             
    <?php include 'Includes/navbar.php' ?>
        
        <!--MODAL-->
    <SECTION id="TICKET-MODAL">
        
        <div class="modal fade" id="modal-ticket-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Ticket Number</span>
                    </div>
                     <input type="text" class="form-control" name="ticket_number" required>
                    </div>  
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend" >
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category</span>
                    </div>
                      <select class="form-control" name="ticket_category" required>
                           <?php
                        $view_categ = mysqli_query($connections, "SELECT * FROM `categories`");
                    while($row = mysqli_fetch_assoc($view_categ)){
                        $categID = $row['categID'];
                        $Name = $row['Name'];
                        $Description = $row['Description'];
                        
                        echo "<option>$categID</option>";   
                    }
                        ?>
                      </select>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Date</span>
                    </div>
                     <input type="date" class="form-control" name="ticket_date" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Requested By</span>
                    </div>
                     <input type="text" class="form-control" name="ticket_reqby"  required>
                    </div>
              
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Requested For</span>
                    </div>
                     <input type="text" class="form-control" name="ticket_reqfor" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Description</span>
                    </div>
                     <input type="text" class="form-control" name="ticket_description" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Notes</span>
                    </div>
                     <input type="text" class="form-control" name="ticket_notes" required>
                    </div>
                  
                  <input type='submit' class='btn btn-primary form-control' name="ticket_add">
                  </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="modal-ticket-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Ticket Number</span>
                    </div>
                     <input type="text" id="ticket_edit_number" name="ticket_edit_number" class="form-control" required readonly>
                    </div>  
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend" >
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category</span>
                    </div>
                      <select class="form-control" id="ticket_edit_category"  name="ticket_edit_category" required>
                        <?php
                        $view_categ = mysqli_query($connections, "SELECT * FROM `categories`");
                    while($row = mysqli_fetch_assoc($view_categ)){
                        $categID = $row['categID'];
                        $Name = $row['Name'];
                        $Description = $row['Description'];
                        
                        echo "<option>$categID</option>";   
                    }
                        ?>
                      </select>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Date</span>
                    </div>
                     <input type="date" class="form-control" id="ticket_edit_date" name="ticket_edit_date" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Requested By</span>
                    </div>
                     <input type="text" id="ticket_edit_reqby" name="ticket_edit_reqby" class="form-control" required>
                    </div>
              
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Requested For</span>
                    </div>
                     <input type="text" id="ticket_edit_reqfor" name="ticket_edit_reqfor" class="form-control" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Description</span>
                    </div>
                     <input type="text" name="ticket_edit_description" id="ticket_edit_description" class="form-control" required>
                    </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Notes</span>
                    </div>
                     <input type="text" name="ticket_edit_notes" id="ticket_edit_notes" class="form-control" required>
                    </div>
                        
                  <input type='submit' name="ticket_edit" class='btn btn-primary form-control'>
                  </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="modal-ticket-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                <center>
                 <h1>Are you sure?</h1><br>
                 <input type="hidden" id="ticket_delete_id" name="ticket_delete_id" required>
                </center>
               
                <input type='submit' name="ticket_delete" class='btn btn-danger form-control'>
                  </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
    </SECTION>
        
    <SECTION id="CATEGORY-MODAL">
         <div class="modal fade" id="modal-category-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category ID</span>
                    </div>
                     <input type="text" name="categ_ID" class="form-control" >
                    </div>
                  
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category Name</span>
                    </div>
                     <input type="text" name="categ_name" class="form-control" required>
                    </div>
                  
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Description</span>
                    </div>
                     <input type="text" name="categ_description" class="form-control" required>
                    </div>
                  <input type='submit' name="categ_add" class='btn btn-primary form-control'>
                  </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="modal-category-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category ID</span>
                    </div>
                     <input type="text" id="category_edit_id" name="category_edit_id" class="form-control" required readonly>
                    </div>
                  
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Category Name</span>
                    </div>
                     <input type="text" name="category_edit_name" id="category_edit_name" class="form-control" required>
                    </div>
                  
                   <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                    <span style='width: 7rem;' class="input-group-text" id="basic-addon1">Description</span>
                    </div>
                     <input type="text" name="category_edit_description" id="category_edit_description" class="form-control" required>
                    </div>
                  <input type='submit' name="category_edit" class='btn btn-primary form-control'>
                  </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="modal-category-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                 <center>
                 <h1>Are you sure?</h1><br>
                 <input type="hidden" name="category_delete_key" id="category_delete_key" required>
                </center>
               
                <input type='submit' name="categ_delete" class='btn btn-danger form-control'>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
    </SECTION>
        
        <!--MODAL-->
        
    <div class='container-fluid' style=' background-color: #CFD8DC'>
        <div class='row section' style='background-color: #F5F5F5;'>
            <div class='col-xl-12 col-sm-12 col-ml-12' 
                 style="background-image: url(../img/test5.jpg);
                        background-size: cover;
                        background-position: center;
                        ">
                <br><br>
                <h1 style='text-align: center;'>Welcome <?php echo $_SESSION['name']; ?></h1>
                <br>
                <center>
                 <!--CHICAGO-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">USCH</h4>
                       <h6 class="card-subtitle mb-2 text-muted">US Chicago</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6smy8ii/n64/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6smy8ii/n64/fn16/fs28/ftb/th2/ta1"  frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>
                 <!--DORNACH-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">DEDO</h4>
                       <h6 class="card-subtitle mb-2 text-muted">Germany Dornach</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n37/fn16/fs18/ftb/tt1"  frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n37/fn16/fs28/ftb/th2/ta1" frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>
                 <!--FRANKFURT-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">DEFR</h4>
                       <h6 class="card-subtitle mb-2 text-muted">Germany Frankfurt</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n83/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n83/fn16/fs28/ftb/th2/ta1"  frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>
                 <!--SINGAPORE-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">SGD</h4>
                       <h6 class="card-subtitle mb-2 text-muted">Singapore Singapore</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n236/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n236/fn16/fs28/ftb/th2/ta1" frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div><br>
                 <!--INDIA-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">IND</h4>
                       <h6 class="card-subtitle mb-2 text-muted">India New Delhi</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6smy8ii/n176/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6smy8ii/n176/fn16/fs28/ftb/th2/ta1"  frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>
                 <!--SHANGHAI-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">CHN</h4>
                       <h6 class="card-subtitle mb-2 text-muted">China Shanghai</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n237/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n237/fn16/fs28/ftb/th2/ta1"  frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>      
                 <!--PST-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">PST</h4>
                       <h6 class="card-subtitle mb-2 text-muted">Pacific Standard Time</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n137/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/n137/fn16/fs28/ftb/th2/ta1" frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>   
                 <!--GMT-->
                 <div class="card zoom" style="width: 17rem;">
                       <div class="card-body">
                       <h4  class="card-title">GMT</h4>
                       <h6 class="card-subtitle mb-2 text-muted">Coordinated Universal Time</h6>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/fn16/fs18/ftb/tt1" frameborder="0" style='width: 98%; height: 35px;'></iframe>
                       <iframe src="http://free.timeanddate.com/clock/i6sn1kxz/fn16/fs27/ftb/th2/ta1" frameborder="0" style='width: 98%; height: 50px;'></iframe>
                    </div>
                 </div>      
                </center>
            <br><br><br>
                 <div style=' float: right; margin-right: 3vw;'> 
                    <a target="_blank" href='https://unsplash.com/@moriahley?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText' style='color: white; font-family: Courgette; '>Photo captured by Moriah Leynes</a> 
                 </div>
                <br><br>
            </div>   
            
        </div>
        <div class='row' style='padding: 5vw; padding-bottom: 0vw;'>
            <div class='section col-xl-12 col-sm-12 col-ml-12' style='padding: 2vw; background-color: #F5F5F5; border-top: 2px solid blue;'>
                
                <div style='float: right;'>
                <button class='btn btn-primary' id='modalbtn-ticket-add'  data-toggle="modal" data-target="#modal-ticket-add"><i class="far fa-plus-square"></i></button>
                <button class='btn btn-info' id='modalbtn-ticket-edit' data-toggle="modal" data-target="#modal-ticket-edit"><i class="fas fa-pen-square"></i></button>
                <button class='btn btn-danger' id='modalbtn-ticket-delete' data-toggle="modal" data-target="#modal-ticket-delete"><i class="fas fa-trash"></i></button>
                </div>
                <h2><i class="fas fa-clipboard-check"></i> &nbsp; Tickets</h2>
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
                    $eid = $_SESSION['eid'];
                    $view_tickets = mysqli_query($connections, "SELECT * FROM `tickets` where assignedTo = '$eid'");
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
                            <td><a href='ticket.php?id=$ticketID'>$ticketID</a></td>
                            <td><a href='categ.php?id=$categID'>$categID</a></td>
                            <td>$date</td>
                            <td>$requestedBy</td>
                            <td>$clientFor</td>
                            <td>$description</td>
                            <td>$notes</td>
                        </tr>
                        ";
                    }
                    
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        
            <div class='row' style='padding: 5vw;'>
            <div class='col-xl-12 col-sm-12 col-ml-12 section' style='background-color: #F5F5F5; padding: 2vw; border-top: 2px solid green;'>
                
                <div style='float: right;'>
                <button class='btn btn-primary' id='modalbtn-category-add'  data-toggle="modal" data-target="#modal-category-add"><i class="far fa-plus-square"></i></button>
                <button class='btn btn-info'  id='modalbtn-category-edit'  data-toggle="modal" data-target="#modal-category-edit"><i class="fas fa-pen-square"></i></button>
                <button class='btn btn-danger'  id='modalbtn-category-delete'  data-toggle="modal" data-target="#modal-category-delete"><i class="fas fa-trash"></i></button>
                </div>
                <h2><i class="fas fa-layer-group"></i> &nbsp; Categories</h2>
                <br>
                <table id='table-categories' class='table table-hover'>
                <thead style='background-color: white;'>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Description</th>

                </thead>
                <tbody>
                    <?php
                    $view_categ = mysqli_query($connections, "SELECT * FROM `categories`");
                    while($row = mysqli_fetch_assoc($view_categ)){
                        $categID = $row['categID'];
                        $Name = $row['Name'];
                        $Description = $row['Description'];
                        
                        echo "
                        <tr>
                            <td><a href='categ.php?id=$categID'>$categID</a></td>
                            <td>$Name</td>
                            <td>$Description</td>
                        </tr>
                        ";
                    }
                    
                    ?>
                </tbody>
            </table>
            </div>
        </div>
        
        <div class='row' style='padding: 5vw; padding-top: 0vw;'>
            <div class='section col-xl-12 col-sm-12 col-ml-12' style='background-color: #F5F5F5; padding: 2vw; border-top: 2px solid orange;'>
                
                <div style='float: right;'>
                <button class='btn btn-danger' style='border-radius: 300px; width: 65px; height: 65px;'><h4>
                <?php
                $cnt = '';
                        
                //get count
                $view_count = mysqli_query($connections, "SELECT count(ID) as 'cnt' from schedule`");
                while($row = mysqli_fetch_assoc($view_count)){
                    $cnt = $row['cnt'];
                }
                    
                echo $cnt;
                ?>    
                </h4></button>
                </div>
                <h2><i class="fas fa-clipboard-list"></i> &nbsp; To-do List</h2>
                <br>
                
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sticky Notes</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Check List</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Timeline</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent" style='padding: 3vw; background-color: white;'>
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      
                    <div class="accordion" id="accordionExample">
                      <div>
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style='width: 75vw; text-decoration: none;'>
                              <h4 style='font-size: 20px;'>Add a Note</h4>
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" >
                          <div class="card-body" style='padding: 10vw; padding-top: 5vh; padding-bottom: 5vh;'>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data"> 
                                <div class="input-group input-group-sm mb-3">
                               
                                    <select class='form-control' name='note_priority' style='height: 40px;' required>
                                    <option value='1'>Tirivial</option>
                                    <option value='2'>Priority</option>
                                    <option value='3'>Important</option>
                                    </select>
                                
                                    <input type='date' name='note_date' class='form-control' required>
                                </div>
                               
                                <textarea name='note_text' class='form-control'></textarea>
                                <br>
                                <input type='submit' name='note_add' class='btn btn-primary form-control' value="Click here to make note">
                             </form>
                              
                          </div>
                        <hr>
                        </div>
                      </div>
                    </div><br>
                    
                    <?php
                    $Notes_User_View = $_SESSION['eid'];  
                      
                    $view_todo = mysqli_query($connections, "SELECT * FROM `schedule` Where note_user = '$Notes_User_View'");
                    while($row = mysqli_fetch_assoc($view_todo)){
                        $priority = $row['priority'];
                        $ID = $row['ID'];
                        $task = $row['task'];
                        $date = $row['date'];
                        
                        if($priority == 1){
                        $priority_text = "<span style='font-size: 18px;'  class='badge badge-danger'>Important</span>";
                            
                        $priority_color = "#e57373";
                        }
                        else if($priority == 2){
                        $priority_text = "<span style='font-size: 18px;'  class='badge badge-primary'>Prioritize</span>";  
                        
                        $priority_color = "#FFA726";
                            
                        }
                        else{
                        $priority_text = "<span style='font-size: 18px;' class='badge badge-success'>Low</span>";    
                            
                        $priority_color = "#4CAF50";
                        }
                        
                        echo "
                         <div class='card zoom' style='display: inline-block; height: 265px; width: 265px; overflow: auto; background-color: $priority_color; color: white;'>
                         
                         <div style='float: right; margin-right: 10px;'><a href='Functions/delete_note.php?id=$ID' style='color: white;'><i class='fas fa-times'></i></a></div>
                         
                          <div class='card-body'>
                           <h5 class='card-title'>$date</h5> 
                           <hr style='background-color: white;'>
                            $task
                          </div>
                        </div>"; 
                    }
                    
                    ?>
                </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Feature Coming Soon</div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Feature Coming Soon</div>
                </div>
                
                
            </div>
        </div>
    </div>
        
         <?php include 'Includes/footer.php' ?>
        

<script>
        
//implementing datatable       
    $(document).ready( function () {
    $('#table-tickets').DataTable();
} );
    
    $(document).ready( function () {
    $('#table-categories').DataTable();
} );
    
        $(document).ready( function () {
    $('#table-todo').DataTable();
} );
    

      //CLICKABLE TABLE
    
      //TICKETS
    var table_tickets = document.getElementById('table-tickets');
        $("tr").click(function(){
    $(this).addClass("selected").siblings().removeClass("selected");
    });
       for (var i = 0; i < table_tickets.rows.length; i++){
            if(i!=0){
                 table_tickets.rows[i].onclick = function() 
            {
                document.getElementById("ticket_edit_number").value = this.cells[0].textContent;
                document.getElementById("ticket_edit_category").value = this.cells[1].textContent;
                document.getElementById("ticket_edit_date").value = this.cells[2].innerHTML;
                document.getElementById("ticket_edit_reqby").value = this.cells[3].innerHTML;
                document.getElementById("ticket_edit_reqfor").value = this.cells[4].innerHTML;
                document.getElementById("ticket_edit_description").value = this.cells[5].innerHTML;
                document.getElementById("ticket_edit_notes").value = this.cells[6].innerHTML;
                document.getElementById("ticket_delete_id").value = this.cells[0].textContent;
               
                  if(typeof rIndex !== "undefined"){
                    table_tickets.rows[rIndex].classList.toggle("highlight");
                }
                rIndex = this.rowIndex;
                this.classList.toggle("highlight");
                //shorter form of code above, without textbox dependency. Just gets the values from the cells
                /*  this.name = this.cells[0].innerHTML;
                    this.age = this.cells[1].innerHTML;
                    this.country = this.cells[2].innerHTML;
                    alert(this.name + ", " + this.age + ", " + this.country);
                */
                }    
            }
        }
    
    //CATEGORIES
    
    var table_categ = document.getElementById('table-categories');
    $("tr").click(function(){
    $(this).addClass("selected").siblings().removeClass("selected");
    });
       for (var i = 0; i < table_categ.rows.length; i++){
            if(i!=0){
                table_categ.rows[i].onclick = function() 
            {
                document.getElementById("category_edit_id").value = this.cells[0].textContent;
                document.getElementById("category_edit_name").value = this.cells[1].textContent;
                document.getElementById("category_edit_description").value = this.cells[2].innerHTML;
                document.getElementById("category_delete_key").value = this.cells[0].textContent;
                    
                  if(typeof rIndex !== "undefined"){
                    table_categ.rows[rIndex].classList.toggle("highlight");
                }
                rIndex = this.rowIndex;
                this.classList.toggle("highlight");
                //shorter form of code above, without textbox dependency. Just gets the values from the cells
                /*  this.name = this.cells[0].innerHTML;
                    this.age = this.cells[1].innerHTML;
                    this.country = this.cells[2].innerHTML;
                    alert(this.name + ", " + this.age + ", " + this.country);
                */
                }    
            }
        }

</script>

<?php

    //ADD TICKET
    if(isset($_POST['ticket_add'])){
    $ticket_number = $_POST['ticket_number'];
    $ticket_category = $_POST['ticket_category'];
    $ticket_date = $_POST['ticket_date'];
    $ticket_reqby = $_POST['ticket_reqby'];
    $ticket_reqfor = $_POST['ticket_reqfor'];
    $ticket_description = $_POST['ticket_description'];
    $ticket_notes = $_POST['ticket_notes'];
    $ticket_user = $_SESSION['eid'];
        
    $query = mysqli_query($connections, "INSERT INTO `tickets`(`ticketID`, `categID`, `assignedTo`, `requestedBy`, `clientFor`, `date`, `description` , `notes`) VALUES ('$ticket_number','$ticket_category','$ticket_user','$ticket_reqby','$ticket_reqfor', '$ticket_date' ,'$ticket_description','$ticket_notes')");
        
       echo "<script>window.location.href='dashboard.php';</script>"; 
         
    }
        
    //EDIT TICKET
    
    if(isset($_POST['ticket_edit'])){
    $ticket_edit_number = $_POST['ticket_edit_number'];
    $ticket_edit_category = $_POST['ticket_edit_category'];
    $ticket_edit_date = $_POST['ticket_edit_date'];
    $ticket_edit_reqby = $_POST['ticket_edit_reqby'];
    $ticket_edit_reqfor = $_POST['ticket_edit_reqfor'];
    $ticket_edit_description = $_POST['ticket_edit_description'];
    $ticket_edit_notes = $_POST['ticket_edit_notes'];
        
    $query = mysqli_query($connections, "UPDATE `tickets` SET `categID`='$ticket_edit_category', `requestedBy`='$ticket_edit_reqby',`clientFor`='$ticket_edit_reqfor',`date`='$ticket_edit_date',`description`='$ticket_edit_description',`notes`='$ticket_edit_notes' WHERE ticketID = '$ticket_edit_number'");
        
       echo "<script>window.location.href='dashboard.php';</script>"; 
         
    }    
    
        
    //DELETE TICKET
        
    if(isset($_POST['ticket_delete'])){
    $ticket_delete_key = $_POST['ticket_delete_id'];    
        
    $query = mysqli_query($connections, "DELETE FROM `tickets` WHERE `ticketID` = '$ticket_delete_key'");
        
    echo "<script>window.location.href='dashboard.php';</script>"; 
         
        }    
    
        
    //ADD CATEGORY
        
    if(isset($_POST['categ_add'])){
    $categID = $_POST['categ_ID'];
    $categ_name = $_POST['categ_name'];
    $categ_description = $_POST['categ_description'];
        
    $query = mysqli_query($connections, "INSERT INTO `categories`(`categID`, `Name`, `Description`) VALUES ('$categID','$categ_name','$categ_description')");
        
    echo "<script>window.location.href='dashboard.php';</script>"; 
    }
        
    //EDIT CATEGORY
        
    if(isset($_POST['category_edit'])){
    $categ_edit_ID = $_POST['category_edit_id'];
    $categ_edit_name = $_POST['category_edit_name'];
    $categ_edit_description = $_POST['category_edit_description'];
        
    $query = mysqli_query($connections, "UPDATE `categories` SET `Name`='$categ_edit_name',`Description`='$categ_edit_description' WHERE categID = '$categ_edit_ID'");
        
    echo "<script>window.location.href='dashboard.php';</script>";     
    }
        
    //DELETE CATEGORY
        
    if(isset($_POST['categ_delete'])){
        $categ_delete_key = $_POST['category_delete_key'];
        $query = mysqli_query($connections, "DELETE FROM categories where categID = '$categ_delete_key'");
        
        echo "<script>window.location.href='dashboard.php';</script>"; 
        
    }
        
    //ADD NOTE
        
    if(isset($_POST['note_add'])){
        $note_priority = $_POST['note_priority'];
        $note_date = $_POST['note_date'];
        $note_text = $_POST['note_text'];
        $note_user = $_SESSION['eid'];
        
        $query = mysqli_query($connections, "INSERT INTO `schedule`(`ID`, `priority`, `task`, `date`, `note_user`) VALUES ('','$note_priority','$note_text','$note_date','$note_user')");
        
        echo "<script>window.location.href='dashboard.php';</script>";
    }   
        
?>
        
    </BODY>
</HTML>