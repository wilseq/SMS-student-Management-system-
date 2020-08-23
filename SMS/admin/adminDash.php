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
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

       <div class="adminTitle" align="center">
          <h1>Welcome to Admin Dashboard</h1>
          <h3><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
       </div>


       <div class="dashboard">
         <table  style="width:50%" align="center">
           <tr>
               <td>1.</td><td><a href="addStudent.php">Insert Student Details</a></td>
           </tr>
           <tr>
             <td>2.</td><td><a href="updateStudent.php">Update Student Details</a></td>
           </tr>
           <tr>
             <td>3.</td><td><a href="deleteStudent.php">Delete Student Details</a></td>
           </tr>
         </table>

       </div>
  </body>
</html>
