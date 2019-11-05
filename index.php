<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Php File</title>
</head>
<body>
<h1>Movie API</h1>
<h3>Movie Titles:</h3>
    <?php
        include('./config/database.php');

        $database = new Database();
        $db = $database->getConnection();

        var_dump($db);
    ?>


        <!-- // $con=mysqli_connect("localhost","root","","db_movies");
        // // Check connection
        // if (mysqli_connect_errno())
        //   {
        //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
        //   }
        
        // $sql= "SELECT movies_title FROM tbl_movies";
        
        // if ($result=mysqli_query($con,$sql))
        //   {
        //   // Fetch one and one row
        //   while ($row=mysqli_fetch_row($result))
        //     {
        //     printf ("%s (%s)\n",$row[0],$row[1]);
        //     }
        //   // Free result set
        //   mysqli_free_result($result);
        // }
        
        // mysqli_close($con); -->
</body>
</html>