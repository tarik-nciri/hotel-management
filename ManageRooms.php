<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Hotel Management</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </nav>

  <div class="parent1">
    <div class="left">
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="ManageRooms.php">Rooms</a>
        <a href="RoomsCategories.php">Categories</a>
        <a href="#">Users</a>
        <a href="ManageCustomers.php">Customers</a>
        <a href="#">Bookings</a>
        <a href="#">Dashboard</a>
      </div>
      <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
      </div>
    </div>
    <div class="right1">
      <div>
        <h3><b>Manage Rooms</b></h3>
      </div>
      <form action="" method="post">
        <div class="add_room">
          <div>
            <input type="text" name="name" placeholder="Name"><br>
          </div>
          <div>
            <select name="room">
              <option hidden>select room</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select><br><br>
            <button>Save</button><br><br>
          </div>
          <div>
            <select name="type">
              <option hidden>Type</option>
              <option value="Standar">Standar</option>
              <option value="VIP">VIP</option>
            </select><br>
          </div>
          <div>
            <input type="date" name="Date"><br><br>
          </div>
        </div>
      </form>
      <form action="" method="post">

      </form>

      <div>
        <?php
        // Assuming you already have a database connection established
        $connexion = new mysqli("localhost", "root", "", "hotel");

        // Check the connection
        if ($connexion->connect_error) {
          die("Connection failed: " . $connexion->connect_error);
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Retrieve data from the form
          // $id   = $_POST['id'];
          $name = $_POST['name'];
          $room = $_POST['room'];
          $type = $_POST['type'];
          $Date = $_POST['Date'];
          // SQL query for insertion
          $query = "INSERT INTO managerooms (name, room, type, Date) VALUES ('$name', '$room', '$type', '$Date')";

          // Execute the insertion query
          if ($connexion->query($query) === TRUE) {
            echo "Record inserted successfully!";
          } else {
            echo "Error: " . $query . "<br>" . $connexion->error;
          }
        }

        // Exécution de la requête SQL pour récupérer les données des stagiaires
        $content = "SELECT * FROM managerooms";
        $result = $connexion->query($content);

        // Affichage des données dans un tableau HTML avec Bootstrap styles
        if ($result->num_rows > 0) {
          echo "<table class='table table-bordered mt-4'>
            <thead >
                <tr>
                    <th>id </th>
                    <th>name </th>
                    <th>room</th>
                    <th>type</th>
                    <th>Date</th>
                    <th>delet and edit</th>
                </tr>
            </thead>
            <tbody>";
          while ($data = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $data['id'] . "</td>
                <td>" . $data['name'] . "</td>
                <td>" . $data['room'] . "</td>
                <td>" . $data['type'] . "</td>
                <td>" . $data['Date'] . "</td>
                
                <td>
                    <a href='managerooms.php? id=" . $data['id'] . "'>delet</a>
                    <input type='submit' name='edit' value='Edit'>
                </td>
            </tr>";
          }
          echo "</tbody></table>";
        } else {
          echo "<p class='mt-4'>Aucun stagiaire trouvé.</p>";
        }

        if(isset($_GET["id"])){
          $id=$_GET["id"];
          $delet= mysqli_query ($connexion,"DELETE FROM `managerooms` WHERE `id`='$id'");
        }

        // Close the database connection
        $connexion->close();
        ?>
      </div>
    </div>
  </div>



  <script src="script.js"></script>
</body>

</html>