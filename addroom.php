

    <div>
            
            <form action="" method="POST">
                <table>
                    <tr>
                        <td class='tr-space-top' colspan=5 ></td>
                    </tr>
                    <tr>
                        <td class="td-rw" style="font-weight: bold;" >猪头时间: </td>
                        <td class="td-rw">
                            <input type="text" name="add_time" placeholder="输入猪头时间">
                        </td>
                    </tr>
                    <tr>
                        <td class="td-rw" style="font-weight: bold;">猪头房号: </td>
                        <td class="td-rw">
                            <input type="text" name="add_roomid" placeholder="输入房号">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="submit" class="button-46" name="submit" value="加入列表">
                        </td>
                    </tr>
                    <tr>
                        <td class='tr-space-last' colspan=5 ></td>
                    </tr>
                </table>
            </form>
        </div>
<?php
//process the value from Form and save it in Database
//check whether the submit button is clicked or not

    if(isset($_POST['submit'])){
        //Button clicked
        //echo "clicked";
            
        //1.get the data from form

        
        $add_time = $_POST['add_time'];
        $add_roomid = $_POST['add_roomid'];
        

        //2.sql query to save the data into database
         $sql="INSERT INTO partyroom SET
            time='$add_time',
            roomid='$add_roomid'
        ";

        //3.Execute Query and save data in database
        $res=mysqli_query($conn,$sql) or die(mysqli_error());   
            
        //4.Check the (query is executed) data is inserted or not and display appropriate massage
        if($res==TRUE){
            //echo "Data inserted";
            //create a session variable to display massage
            $_SESSION['add']="Room Added Successfully";
            //redirect page;
            header("location:admin.php");
        }
        else{
            //echo "Failed to insert data";
            //create a session variable to display massage
            $_SESSION['add']="Failed to Add Room";
            //redirect page;
            header("location:admin.php");
        }

    }
?>

