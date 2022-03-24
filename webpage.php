<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- icon -->
    <link rel="shortcut icon" href="Ico.ico" />
    <?php
    //had to do this...
    error_reporting(E_ERROR | E_PARSE);

    //session stuff
    $Login = $_POST['Login'];
    session_start();
    if ($Login == 'pass') {
        $_SESSION['Login'] = 'logged';
    }
    ?>
</head>
<title>
    AEFG


</title>

<body onload="Show(x ='Home')">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="webpage.php">
                <img src="Ico.png" style=width:64px; style=height:64px></a>

            </button>
            <a class="nav-link" onclick="Show(x = 'Home')"><button class="btn btn-primary"> Home</button></a>
            <a class="nav-link" onclick="Show(x = 'Data')"><button class="btn btn-primary"> Data</button></a>
            <a class="nav-link" onclick="Show(x = 'Mission')"><button class="btn btn-primary"> Mission</button></a>
            <a class="nav-link" onclick="Show(x = 'Contact')"><button class="btn btn-primary"> Contact</button></a>
            <?php
            if ($_SESSION['Login']  == 'logged') {
                echo "<a class='nav-link'> <button class = 'btn btn-secondary' onclick='Show(x = `Table`)'> Table </buton></a>";
            } else
                //it's hidden :)
                echo "<a href='Login.php'><button class='btn btn-primary my-2 my-sm-0'>Login</button></a>";
            ?>
        </nav>
    </div>
    <div id="content">
        <?php
        if ($_SESSION['Login'] == 'logged') {
            $conn = new mysqli(
                'localhost',
                'root',
                '',
                'alternative education funding group'
            );
            echo
            "
<div id = 'Data' style = ' position:absolute'>
haha
</div>
<div id = 'Home' style = ' position:absolute'>
hahai
</div>
<div id = 'Mission' style = 'position:absolute'>
Mission of the company is to design and implement the best education for current times. Which means that it will change over time and never be truly the same.  
	Vision of the group is to make education truly free from A to Z, that no knowledge should be paid for by students and they can learn how much they want for free. And to increase the overall quality of knowledge. 
	All of the costs should be financially supported by the people who agree with the vision and countries which don’t have time for upgrading their education program.
</div>
<div id = 'Contact' style = ' position:absolute'>
hahai
</div>
<div id = 'Table' style = ' width:100%; position:absolute'>
<table class='table table-hover'>
  <thead>
    <tr>
      <th>Name of the campus</th>
      <th>Country</th>
      <th>City</th>
      <th>Number of students</th>
    </tr>
  </thead>
  <tbody>
  <tr>
<form action='Login.php' method = 'POST' class = 'form'>
<td>
<input type='text' id = '1' name='nameofcampus' onload='Type()' onfocus='Type()' onblur='Type()' onkeyup='Type()'></input>
<td>
<input type='text' id = '2' name='Country' onload='Type()' onfocus='Type()' onblur='Type()' onkeyup='Type()'></input>
<td>
<input type='text' id = '3' name='City' onload='Type()' onfocus='Type()' onblur='Type()' onkeyup='Type()'></input>
<td>
<input type='number' id = '4' name='numbofstudents' onload='Type()' onfocus='Type()' onblur='Type()' onkeyup='Type()'></input>
<td>
<button id='sub' disabled=true type='submit' class = 'btn btn-primary'>Add records</button>
</form>
</tr>
  ";
            $querry = "SELECT * FROM `campuses`";
            $result = mysqli_query($conn, $querry);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                    <td>" . htmlspecialchars($row['Name_of_campus']) .
                    "<td>" . htmlspecialchars($row['Country']) .
                    "<td>" . htmlspecialchars($row['City']) .
                    "<td>" . htmlspecialchars($row['Number_of_students']);
            }
            $conn->close();
            echo
            "</tbody>
</table>
</div>";
        } else
            echo
            "<div id = 'Data' style = ' position:absolute'>
haha
</div>
<div id = 'Home' style = ' position:absolute'>
hahai
</div>
<div id = 'Table' style = ' position:absolute'> 

</div>
";

        ?>
    </div>
</body>

    <!-- My js -->
    <script src="js.js"></script>
    <?php
    session_reset();
    ?>
</html>