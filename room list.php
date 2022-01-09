<div>
        <table>
            <tr>
                <td class='tr-space-top' colspan=5 ></td>
            </tr>
            <?php
                //query to get all admin
                $sql="SELECT * FROM partyroom ORDER BY `partyroom`.`time` ASC";
                //execute the query
                $res = mysqli_query($conn,$sql);
                if($res==TRUE){
                //count rows to check whether we have data in database or not
                $count = mysqli_num_rows($res);//function to get all the rows in databse
                            
                $sn = 1;//create  a variable and assign value
                $previous='';
                //check the num of rows
                if($count>0){
                //we have data in database
                    while($rows=mysqli_fetch_assoc($res)){
                    //Using while loop to get all the data from database
                    //and while loop will run as long as we have data in database
                    //get individual data
                        $id=$rows['id'];
                        $time=$rows['time'];
                        $roomid=$rows['roomid'];
                        if ($time != $previous) {
                            $sn=1;
            ?>
                        <tr>
                            <td class='tr-space' colspan=5 ><?php echo $time; ?></td>
                        </tr>
                        
            <?php
                        }
                        $previous=$time;
                        //display the values in table

            ?>
                            
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td class="td-rw"><?php echo $time; ?></td>
                            <td class="td-rw"><?php echo $roomid; ?></td>
                            <td class="td-rw"><button type="button" class="button-46" onclick="window.open('<?php echo SITEURL; echo $roomid;?>','_blank')">进入</button>
                        </tr>
                            
            <?php
                            
                    }
                }
                else{
                //do not have data in database
                    }
                }
            ?>
            <tr>
                <td class='tr-space-last' colspan=5 ></td>
            </tr>
        </table>
    </div>