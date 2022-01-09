
<?php include('content.php');?>
<?php

    //1. get the id of admin to be deleted
    echo $id=$_GET['id'];

    //2. create sql query to delete admin
    $sql = "DELETE FROM partyroom WHERE id=$id";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //check whether the query executed successfullt or not
    if($res==TRUE){
        //query executed successfully and admin deleted
        //echo "Admin deleted";
        //create session variable to display massage
        $_SESSION['delete']="Room Deleted Successfully";
        //redirect to manage admin page
        header("location:admin.php");

    }
    else{
        //failed to delete admin
        //echo "Admin delete failed";
        $_SESSION['delete']="Room Deleted Failure";
        //redirect to manage admin page
        header("location:admin.php");
    }


    //redirect to manage admin page with message(success/error)


?>