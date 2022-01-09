<!-- HTML !-->
<link rel="stylesheet" href="TEST.css?v=0.0" />
<link rel="alternate" href="TEST.css" hreflang="es" type="css">
<?php include('content.php');?>


<?php
            
    function function_alert($message) {
        echo "<script>window.onload = function(){alert('$message');}</script>";// Display the alert box 
    }


    if(isset($_SESSION['add'])){    //checking wheter the session is set or not
        function_alert($_SESSION['add']);//Display session message
        unset($_SESSION['add']);    //remove session message
    }
    if(isset($_SESSION['delete'])){    //checking wheter the session is set or not
        function_alert($_SESSION['delete']);//Display session message
        unset($_SESSION['delete']);    //remove session message
    }
    

?>

<!-- HTML !-->
<head>
    <title>猪头表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div><h1>入门猪头🐷房间</h1></div>
    <?php include('addroom.php');?>
    <br>
    <?php include('admin room list.php');?>
    <br><br><br>
    <div>
    <p>Made by Tang. For Cc. Go to Home: <a href="./index.php">Home</a>, Go to SQL: <a href="./SQL.php">SQL</a></p>
    </div>

</body>