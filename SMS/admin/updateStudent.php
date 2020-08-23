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
   <table align="center" >
     <form class="" action="updateStudent.php" method="post">
       <tr>
         <th>Enter Standard</th>
         <td><input type="number" name="standard" placeholder="Enter Standard" required></td>

         <th>Enter Student Name</th>
         <td><input type="text" name="stuname" placeholder="Enter Name" required></td>

         <td colspan="2"><input type="submit" name="submit" value="Search"</td>
       </tr>

     </form>
   </table>

   <table align="center" width="80%" border="1" style="margin-top:10px;">
     <tr style="background-color:#000; color:#fff;">
       <th>No</th>
       <th>Image</th>
       <th>Name</th>
       <th>Rollno</th>
       <th>Edit</th>
     </tr>
     <?php
        if (isset($_POST['submit']))
         {
          include('../dbcon.php');
          $standard = $_POST['standard'];
          $name = $_POST['stuname'];
          $qry = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
          $run = mysqli_query($con,$qry);
          if (mysqli_num_rows($run)<1) {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
            }
          else {
            $count=0;
            while($data = mysqli_fetch_assoc($run))
            {
              $count++;
              ?>
              <tr align="center">
                <td><?php echo $count; ?></td>
                <td><img src="../dataimg/<?php echo $data['image']; ?>"style="max-width:100px"></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['rollno']; ?></td>
          <!-- Sending a variable thro href tag with GET method .There is a ? mark .on left side is the url where it will-->
          <!--and on the right is Get method, where sid is variable and the value will be thro php which we are going to get from -->
            <!--from the fetch method of array $data-->
                <td><a href="updateForm.php ? sid=<?php echo $data['id'];  ?> " style=" font-size:20px;">Edit</a></td>
              </tr>
              <?php
            }

          }
        }

      ?>
   </table>
