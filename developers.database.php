<!DOCTYPE html>
<html>
  <head>Developer Database</head>
  <style>
    body{
      background-color: lightpink;

    }
    </style>
  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Website</th>
      </tr>
      <?php
        $conn = mysqli_connect('localhost', 'root', '', 'myfirstdatabase');
        if ($conn-> connect_error)
        {
          die("Coneection failed:". $conn-> connect_error);
        }
        $sql = "SELECT name, location, website from developer";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
          while ($row = $result->fetch_assoc())
          {
            echo "<tr><td>". $row["name"] ."</td><td>". $row["location"] . "</td><td>". $row["website"] ."</td></tr>";
          }
          echo "</table>";
        }
        else
        {
          echo "0 result";
        }
        $conn-> close();
      ?>
    </table>
  </body>
</html>