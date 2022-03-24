<!DOCTYPE html>
<html>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="shortcut icon" href="Ico.ico" />
  <script src="js.js"></script>
  <?php
  error_reporting(E_ERROR | E_PARSE);
  ?>
</head>
<title>
  AEFG


</title>

<body>
  <div class="d-flex justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="webpage.php">
        <img src="Ico.png" style=width:64px; style=height:64px></a>
      </button>

      <?php
      if ($Login == 'pass') {
        echo "<button class = 'btn btn-primary'> Table changer </buton>";
      } else if (!$_POST['nameofcampus'] == null && !$_POST['Country'] == null && !$_POST['City'] == null && !$_POST['numbofstudents'] == null) {
        $conn = new mysqli(
          'localhost',
          'root',
          '',
          'alternative education funding group'
        );
        $name = $_POST['nameofcampus'];
        $country = $_POST['Country'];
        $city = $_POST['City'];
        $number = $_POST['numbofstudents'];

        $querry = "INSERT INTO `campuses` VALUES('','$name','$country','$city','$number')";
        if ($conn->query($querry) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        header("Location:webpage.php");
      } else
        echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Login</button>";
      ?>
  </div>
  </nav>
  </div>
  <div class="d-flex justify-content-center">
    <form action="webpage.php" method="POST">
      <lable>Login:</lable>
      <br>
      <input type="text" class="form-control"><br>
      <lable>Password:</lable>
      <br>
      <input type="password" name="Login" class="form-control">
      <br>
      <button type="submit" class="btn btn-primary">Log in</button>
    </form>
  </div>
</body>












</html>