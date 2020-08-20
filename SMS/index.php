<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Management System</title>
  </head>
  <body>
    <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
    <h1 align="center">Welcome to Student Management System</h1>

    <form class="" action="index.php" method="post">
      <table style="width:30%;" align="center"; border="2px";>
        <tr>
          <td colspan="2"align="center">Student Information System  </td>
        </tr>
              <tr>
                <td align="left">Choose Standard</td>
                <td>
                  <select class="std" name="std">
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td align=left>Enter Rollno</td>
                <td><input type="text" name="rollno" required</td>
              </tr>
              <tr>
                <td colspan="2"><input type= "submit" name="submit" value="Show Info"></td>
              </tr>
      </table>

    </form>

  </body>
</html>
