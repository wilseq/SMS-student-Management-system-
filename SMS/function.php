
    <?php
          function showdetails($standard,$rollno)
          {
            include('dbcon.php');

            $sql ="SELECT * FROM `student` WHERE `rollno` ='$rollno' AND `standard` = '$standard'";

            $run = mysqli_query($con,$sql);

            if (mysqli_num_rows($run)>0)
             {
                $data = mysqli_fetch_assoc($run);
                ?>
                    <table border="1" align="center">
                      <tr>
                        <th colspan="3">Student Details</th>
                      </tr>
                      <tr>
                        <td rowspan="5"><img src ="dataimg/<?php echo $data['image']; ?>" style="max-height:200px; max-width:auto;" /></td>
                        <th>Roll No</th>
                        <td><?php echo $data['rollno'];?></td>
                      </tr>
                      <tr>
                        <th>Name</th>
                        <td><?php echo $data['rollno'];?></td>
                      </tr>
                      <tr>
                        <th>Standard</th>
                        <td><?php echo $data['standard'];?></td>
                      </tr>
                      <tr>
                        <th>Parents Contact No</th>
                        <td><?php echo $data['pcon'];?></td>
                      </tr>
                      <tr>
                        <th>City</th>
                        <td><?php echo $data['city'];?></td>
                      </tr>
                    </table>

                <?php
            }
            else {
              echo "<script>alert ('No Student Found');</script>";
            }
          }

     ?>
