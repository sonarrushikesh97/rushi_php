<?php
    
    $id = $_GET['did']; 

    //print($id);

    // Connection
    $con = mysqli_connect("localhost","root","","task_php");

    mysqli_query($con,"delete from product where id='$id'");

    header("location:fetch.php");

?>