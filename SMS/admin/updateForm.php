      <?php

        session_start();

            if (isset($_SESSION['uid'])) //chks if session id is set or not
            {
                echo "";

            }
            else
           {
               header('location:../login.php');  //if not than redirected to login.php
            }
        ?>
        <?php
            include('header.php');
            include('titleHead.php');
            include('../dbcon.php');
            $sid = $_GET['sid'];

            $sql = "SELECT * FROM `student` WHERE `id`='$sid'";
            $run= mysqli_query($con,$sql);
            $data = mysqli_fetch_assoc($run);
         ?>
         <form class="" action="updateData.php" method="post" enctype="multipart/form-data">
              <table border="1" align="center">
                <tr>
                  <td>Rollno</td>
                  <td><input type="text" name="rollno" value=<?php echo $data['rollno'] ;?> required></td>
                </tr>
                <tr>
                  <td>Full Name</td>
                  <td><input type="text" name="name" value=<?php echo $data['name'] ;?> required></td>
                </tr>
                <tr>
                  <td>City</td>
                  <td><input type="text" name="city" value=<?php echo $data['city'] ;?> required></td>
                </tr>
                <tr>
                  <td>Parents contact no</td>
                  <td><input type="text" name="pcon" value=<?php echo $data['pcon'] ;?> required></td>
                </tr>
                <tr>
                  <td>Standard</td>
                  <td><input type="text" name="std" value=<?php echo $data['standard'] ;?> required></td>
                </tr>
                <tr>
                  <td>Image</td>
                  <td><input type="file" name="simg"  required></td>
                </tr>
                <tr>

                  <td colspan="2" align="center">
                    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
                    <input type="submit" name="submit"</td>
                </tr>
              </table>

         </form>
