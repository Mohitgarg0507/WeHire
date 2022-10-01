<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $Company_Name =  $_REQUEST['Company_Name'];
        $Email = $_REQUEST['Email'];
        $Address =  $_REQUEST['Address'];
        $Vacancies = $_REQUEST['Vacancies'];
        $Job_Description = $_REQUEST['Job_Description'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$Company_Name',
            '$Email','$Address','$Vacancies','$Job_Description')";

        if(mysqli_query($conn, $sql)){
            echo "<h1>Successfully Registered."
                . "</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
