<!DOCTYPE html>
<html>
  <style>
    body{
      background-color: rgb(157, 212, 224);

    }
    .table{
  border-collapse: collapse;
  width: 100%;
  color: #d96459;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
  overflow: hidden;
  margin-bottom: 20px;
}
.p{
  text-align: center;
  font-size: 75px;
  font-family: times new roman;
}
    </style>
    <p class="p">Developer database</p>
  <body>
    <table class="table">
      <tr>
        <th class="th">Console</th>
        <th class="th">Max fps</th>
        <th class="th">Price</th>
        <th class="th">Max res</th>
        <th class="th">Release date</th>
      </tr>
      <?php
        $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
        if ($conn-> connect_error)
        {
          die("Coneection failed:". $conn-> connect_error);
        }
        $sql = "SELECT console, max_fps, price, max_res, release_date from platform";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
          while ($row = $result->fetch_assoc())
          {
            echo "<tr><td>". $row["console"] ."</td><td>". $row["max_fps"] ."</td><td>". $row["price"] ."</td><td>". $row["max_res"] . "</td><td>". $row["release_date"] ."</td></tr>";
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
