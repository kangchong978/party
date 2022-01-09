<?php
     //Start Session
     session_start();

     //Create constants to store non repeat values
     define('SITEURL','http://party.haochang.tv/share/rooms?roomCode=');
     define('LOCALHOST','localhost');
     define('DB_USERNAME','root');
     define('DB_PASSWORD','');
     define('DB_NAME','party');

     $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());     //connection database
     $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());        //selectiong database
     
     

?>