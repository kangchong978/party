<!-- popupHTML !-->
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>

<script type='text/javascript'>
    $(function(){
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
        $(document).click(function(){
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script>

<div class='popup'>
    <div class='cnt223'>
        <h1>&#128525</h1>
        <p>
            宝贝又来拿猪头哄,拿完了早点睡吧。爱你😘by Tang.
            <br/>
            <br/>
            <a href='' class='close'>爱你♥</a>
        </p>
    </div>
</div>
!-->
<!-- mainHTML !-->

<link rel="stylesheet" href="TEST.css?v=0.1" />
<?php include('content.php');?>


<?php
            
    function function_alert($message) {
        echo "<script>prompt('$message');</script>";// Display the alert box 
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
    <div><h1>入门猪头🐖房间</h1>
        <h2><?php include('Clock.php');?></h2>
    </div>
    <br>
    <?php include('room list.php');?>
    <br><br><br>
    <div>
        <p>Made by Tang. For Cc. Edit: <a href="./admin.php">Panel</a></p>
    </div>

</body>