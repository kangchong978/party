<link rel="stylesheet" href="TEST.css?v=0.2" />
<?php include('content.php');?>

<?php
            
    function function_alert($message) {
        echo "<script>prompt('$message');</script>";// Display the alert box 
    }


    if(isset($_SESSION['add'])){    //checking wheter the session is set or not
        function_alert($_SESSION['add']);//Display session message
        unset($_SESSION['add']);    //remove session message
    }

    if(isset($_SESSION['clear'])){    //checking wheter the session is set or not
        function_alert($_SESSION['clear']);//Display session message
        unset($_SESSION['clear']);    //remove session message
    }
?>

<head>
    <title>SQL后台</title>
    <meta name="viewport" content="initial-scale=0.9; maximum-scale=0.9; width=device-width;">
</head>

<body>
    <div><h1>🐖SQL后台</h1></div>
    <form action="" method="POST">
        <table>
            <tr>
            <td>
                <iframe src="https://docs.google.com/spreadsheets/d/1_hBqg32YRQjYvuCaCrgOW6lcLhax4DmO/edit?usp=sharing&ouid=108757387115328746053&rtpof=true&sd=true"></iframe>  
            </td>
            <td><textarea name="sqlcommands" id="sqlcommands" placeholder="
1.从Party通知->猪头表截图
2.截图丢入OCR->拿到时间和房号
3.放入左边Google Sheet里->复制前两行
4.粘贴在这里
5.提交
**Enter the SQL commands at here, Example:INSERT INTO `partyroom` (`id`, `time`, `roomid`) VALUES (NULL,'00:00','123321');"></textarea></td>
            </tr>
            <tr>
            <td colspan=2><input type="submit" class="button-46" name="submit" value="提交"></td>
            </tr>
            <tr>
            <td colspan=2><input type="submit" class="button-47" name="submit2" value="清除全部"></td>
            </tr>
            <tr>
                <td class='tr-space-last' colspan=5 ></td>
            </tr>
            <?php
                if(isset($_POST['submit2'])){
                    $sql="TRUNCATE TABLE partyroom;";
                    
                    $res=mysqli_query($conn,$sql) or die(mysqli_error());

                    if($res==TRUE){
                        //echo "Data inserted";
                        //create a session variable to display massage
                        $_SESSION['clear']="All Room Cleared Successfully";
                        //redirect page;
                        header("location:SQL.php");
                    }
                    else{
                        //echo "Failed to insert data";
                        //create a session variable to display massage
                        $_SESSION['clear']="Failed to Clear Room";
                        //redirect page;
                        header("location:SQL.php");
                    }
                }

                if(isset($_POST['submit'])){
                    
                    $sqlcommands=$_POST['sqlcommands'];

                    //echo $sqlcommands;

                    $sql=$sqlcommands.";";


                    $res=mysqli_query($conn,$sql) or die(mysqli_error());

                    if($res==TRUE){
                        //echo "Data inserted";
                        //create a session variable to display massage
                        $_SESSION['add']="SQL Command Run Successfully";
                        //redirect page;
                        header("location:SQL.php");
                    }
                    else{
                        //echo "Failed to insert data";
                        //create a session variable to display massage
                        $_SESSION['add']="Failed to Run SQL Command";
                        //redirect page;
                        header("location:SQL.php");
                    }
                }
            ?>
        </table>
             
        <div>
        <p>Made by Tang. For Cc. Edit: <a href="./admin.php">Panel</a>, Go to Home: <a href="./index.php">Home</a></p>
    </div>

</body>