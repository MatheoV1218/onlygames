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
        <th class="th">Name</th>
        <th class="th">Streaming service</th>
        <th class="th">Content Genre</th>
      </tr>
      <?php
        $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
        if ($conn-> connect_error)
        {
          die("Coneection failed:". $conn-> connect_error);
        }
        $sql = "SELECT name, streaming_service, content_genre from entertainer";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
          while ($row = $result->fetch_assoc())
          {
            echo "<tr><td>". $row["name"] ."</td><td>". $row["streaming_service"] . "</td><td>". $row["content_genre"] ."</td></tr>";
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
