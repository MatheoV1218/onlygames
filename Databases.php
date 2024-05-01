<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: rgb(157, 212, 224);
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .title {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .search-container {
      text-align: center;
    }

    .search-form {
      display: inline-block;
      margin-bottom: 20px;
    }

    .search-input {
      width: 250px; /* Adjust as needed */
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      outline: none;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .search-input:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .search-btn {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .search-btn:hover {
      background-color: #0056b3;
    }

    .table-container {
      overflow-x: auto;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .no-records {
      text-align: center;
      font-style: italic;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="title">Developers database</div>
    
    <div class="search-container">
      <div class="search-form">
        <form action="" method="GET">
          <input type="text" name="developer_search" value="<?php if(isset($_GET['developer_search'])) {echo $_GET['developer_search'];} ?>" class="search-input" placeholder="Search developers">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>
    </div>

    <div class="table-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
            if (isset($_GET['developer_search']))
            {
                $filtervalues = $_GET['developer_search'];
                $query = "SELECT * from developer WHERE CONCAT(name, location, website) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($conn, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $items)
                    {
                        ?>
                        <tr>
                            <td><?= $items['name'] ?></td>
                            <td><?= $items['location'] ?></td>
                            <td><a href="<?= $items['website'] ?>" target="_blank"><?= $items['website'] ?></a></td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="3" class="no-records">No records found</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>




  <div class="container">
    <div class="title">Entertainers database</div>
    
    <div class="search-container">
      <div class="search-form">
        <form action="" method="GET">
          <input type="text" name="entertainer_search" value="<?php if(isset($_GET['entertainer_search'])) {echo $_GET['entertainer_search'];} ?>" class="search-input" placeholder="Search entertainers">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>
    </div>

    <div class="table-container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Streaming service</th>
            <th>Content genre</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
            if (isset($_GET['entertainer_search']))
            {
              $filtervalues = $_GET['entertainer_search'];
              $query = "SELECT * from entertainer WHERE CONCAT(name, streaming_service, content_genre) LIKE '%$filtervalues%'";
              $query_run = mysqli_query($conn, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $items)
                {
                  ?>
                  <tr>
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['streaming_service'] ?></td>
                    <td><?= $items['content_genre'] ?></td>
                  </tr>
                  <?php
                }
              }
              else
              {
                ?>
                <tr>
                  <td colspan="3" class="no-records">No records found</td>
                </tr>
                <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container">
    <div class="title">Game database</div>
    
    <div class="search-container">
      <div class="search-form">
        <form action="" method="GET">
          <input type="text" name="game_search" value="<?php if(isset($_GET['game_search'])) {echo $_GET['game_search'];} ?>" class="search-input" placeholder="Search games">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>
    </div>

    <div class="table-container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Release date</th>
            <th>Price</th>
            <th>Genre</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
            if (isset($_GET['game_search']))
            {
              $filtervalues = $_GET['game_search'];
              $query = "SELECT * from game WHERE CONCAT(title, release_date, base_price, genre) LIKE '%$filtervalues%'";
              $query_run = mysqli_query($conn, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $items)
                {
                  ?>
                  <tr>
                    <td><?= $items['title'] ?></td>
                    <td><?= $items['release_date'] ?></td>
                    <td><?= $items['base_price'] ?></td>
                    <td><?= $items['genre'] ?></td>
                  </tr>
                  <?php
                }
              }
              else
              {
                ?>
                <tr>
                  <td colspan="4" class="no-records">No records found</td>
                </tr>
                <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container">
    <div class="title">E-Sports database</div>
    
    <div class="search-container">
      <div class="search-form">
        <form action="" method="GET">
          <input type="text" name="esport_search" value="<?php if(isset($_GET['esport_search'])) {echo $_GET['esport_search'];} ?>" class="search-input" placeholder="Search teams">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>
    </div>

    <div class="table-container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Team Name</th>
            <th>Championships won</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
            if (isset($_GET['esport_search']))
            {
              $filtervalues = $_GET['esport_search'];
              $query = "SELECT * from esport WHERE CONCAT(t_name, championships_won) LIKE '%$filtervalues%'";
              $query_run = mysqli_query($conn, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $items)
                {
                  ?>
                  <tr>
                    <td><?= $items['t_name'] ?></td>
                    <td><?= $items['championships_won'] ?></td>
                  </tr>
                  <?php
                }
              }
              else
              {
                ?>
                <tr>
                  <td colspan="2" class="no-records">No records found</td>
                </tr>
                <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container">
    <div class="title">Platform database</div>
    
    <div class="search-container">
      <div class="search-form">
        <form action="" method="GET">
          <input type="text" name="platform_search" value="<?php if(isset($_GET['platform_search'])) {echo $_GET['platform_search'];} ?>" class="search-input" placeholder="Search platforms">
          <button type="submit" class="search-btn">Search</button>
        </form>
      </div>
    </div>

    <div class="table-container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Console</th>
            <th>Max FPS</th>
            <th>Price</th>
            <th>Max res</th>
            <th>Release date</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $conn = mysqli_connect('127.0.0.1:3377', 'root', '', 'myfirstdatabase');
            if (isset($_GET['platform_search']))
            {
              $filtervalues = $_GET['platform_search'];
              $query = "SELECT * from platform WHERE CONCAT(console, max_fps, price, max_res, release_date) LIKE '%$filtervalues%'";
              $query_run = mysqli_query($conn, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                foreach($query_run as $items)
                {
                  ?>
                  <tr>
                    <td><?= $items['console'] ?></td>
                    <td><?= $items['max_res'] ?></td>
                    <td><?= $items['price'] ?></td>
                    <td><?= $items['max_res'] ?></td>
                    <td><?= $items['release_date'] ?></td>
                  </tr>
                  <?php
                }
              }
              else
              {
                ?>
                <tr>
                  <td colspan="5" class="no-records">No records found</td>
                </tr>
                <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
