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
  <body>
    <table class="table">
      <tr>
        <th class="th">username</th>
        <th class="th">email</th>
        <th class="th">password</th>
      </tr>
      <?php
        $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
        if ($conn-> connect_error)
        {
          die("Coneection failed:". $conn-> connect_error);
        }
        $sql = "SELECT username from userr";
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
    <table class="table">
      <tr>
        <th class="th">Title</th>
        <th class="th">Release date</th>
        <th class="th">Base price</th>
        <th class="th">Genre</th>
      </tr>
      <?php
        $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
        if ($conn-> connect_error)
        {
          die("Coneection failed:". $conn-> connect_error);
        }
        $sql = "SELECT title, release_date, base_price, genre from game";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0)
        {
          while ($row = $result->fetch_assoc())
          {
            echo "<tr><td>". $row["title"] ."</td><td>". $row["release_date"] . "</td><td>". $row["base_price"] ."</td><td>". $row["genre"]. "</td></tr>";
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