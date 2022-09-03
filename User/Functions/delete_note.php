<?php

    session_start();
    include '../../Includes/Connect.php';
    $id = $_REQUEST['id'];
    $query = mysqli_query($connections, "DELETE FROM `schedule` WHERE `ID` = '$id'");
        
   echo "<script>window.location.href='../dashboard.php';</script>"; 

?>