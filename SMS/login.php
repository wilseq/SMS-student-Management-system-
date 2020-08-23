<?php


  session_start();

      if (isset($_SESSION['uid'])) //chks if session id is set or not
      {

        

          header('location:admin/adminDash.php');
      }

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
  </head>
  <body>
      <h3 align="center">Admin login</h3>
      <form class="" action="login.php" method="post">

          <table align="center">
            <tr>
              <td>Username</td><td><input type="text" name="uname" required</td>
            </tr>
            <tr>
              <td>Password</td><td><input type="password" name="pass" required</td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="login" value="Login"</td>
            </tr>

          </table>

      </form>
  </body>
</html>
  <?php
          include ('dbcon.php'); //the code for dabase connection is on this page

          if(isset($_POST['login']))    // chks if login button is pressed
  {
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";

            $run = mysqli_query($con,$qry); // run the database connection and query

            $row = mysqli_num_rows($run); // collect the number of rows satisfying the query

            if ($row < 1)  // row qty is less than 1 so password error
             {
              ?>
              <script>
                  alert('Username or Password not matched'); //msg for user
                  window.open('login.php','_self'); //refresh on same page for login again
              </script>
            <?php
            }
            else              // if matching rows are found
            {
             $data = mysqli_fetch_assoc($run);   //collect the data of the query in the $data variable

              $id = $data['id'];           //as it is the array so for this method to get specific value of id


              $_SESSION['uid']=$id;           //asigning the value of id to the session
               header('location:admin/adminDash.php');    //redirecdting to adminDash page
            //  echo $id;
            }


    }
       ?>
