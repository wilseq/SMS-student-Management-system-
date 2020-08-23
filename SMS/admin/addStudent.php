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
           ?>
           <html>
           <body>
           <form class="" action="addStudent.php" method="post" enctype="multipart/form-data">
                <table border="1" align="center">
                  <tr>
                    <td>Rollno</td>
                    <td><input type="text" name="rollno" placeholder="Enter Your Rollno" required></td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="name" placeholder="Enter Your Full Name" required></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td><input type="text" name="city" placeholder="Enter Your City" required></td>
                  </tr>
                  <tr>
                    <td>Parents contact no</td>
                    <td><input type="text" name="pcon" placeholder="Parents contact no" required></td>
                  </tr>
                  <tr>
                    <td>Standard</td>
                    <td><input type="text" name="std" placeholder="Enter Your standard" required></td>
                  </tr>
                  <tr>
                    <td>Image</td>
                    <td><input type="file" name="simg"  required></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit"</td>
                  </tr>
                </table>

           </form>
         </body>
         </html>

          <?php
            if (isset($_POST['submit']))
            {
                include ('../dbcon.php');
                $rollno=$_POST['rollno'];
                $name = $_POST['name'];
                $city = $_POST['city'];
                $pcon = $_POST['pcon'];
                $std = $_POST['std'];
                $imagename = $_FILES['simg']['name'];
                $tempname = $_FILES['simg']['tmp_name'];

                move_uploaded_file($tempname,"../dataimg/$imagename");

                $qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcon`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')" ;
                $run =mysqli_query($con,$qry);

                if ($run == true)
                 {
                   ?>
                    <script>
                        alert('Data inserted Successfully');
                    </script>
                   <?php
                }
            }

           ?>
