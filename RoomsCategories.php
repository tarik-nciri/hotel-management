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
        <a href="login.php">Log Out</a>
      </div>
      <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
      </div>
    </div>
    <div class="right2">
      <div>
        <h3><b>Rooms Categories</b></h3>
      </div>
      <div class="add_room">
        <div><input type="text" placeholder="Categorie Name"><br><br><button>Edit</button></div>
        <div>
          <br><br>
          <button>Save</button>
        </div>
        <div><input type="text" placeholder="Cost"><br><br><button>Delet</button></div>
      </div>
    </div>
  </div>


  <script src="script.js"></script>

</body>
</html>