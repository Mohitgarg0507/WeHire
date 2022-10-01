<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "staff";

  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);

  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // SQL QUERY
  $query = "SELECT * FROM `college`;";

  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);

    if ($result->num_rows > 0)
    {
        // OUTPUT DATA OF EACH ROW
        echo "<div style='background-color:black; font-size:40px; color:white; font-weight:bold;'>". "Jobs available". "</div>"."<br>";
        while($row = $result->fetch_assoc())
        {
            echo "<div style='background-color:red; font-size:30px;'>"." Company_Name: ".
                $row["Company_Name"]."</div>"."<div style='background-color:lightblue; font-size:20px;'>". " Email: " .
                $row["Email"].  " &emsp; Address: " .
                $row["Address"]. " &emsp; Vacancies: " .
                $row["Vacancies"]. " &emsp; Job_Description: ".
                $row["Job_Description"]. "</div>"."<br>";
        }
    }
    else {
        echo "0 results";
    }

   $conn->close();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Apply</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <br />
    <a href="https://form.jotform.com/222724714634455"><button class="btn btn-lg btn-block btn-dark" type="button">SUBMIT APPLICATION</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
