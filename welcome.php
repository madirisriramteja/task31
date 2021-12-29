<?php 

session_start();
include "config.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <?php
    $sql = "SELECT * FROM users";
    $results = mysqli_query($conn,$sql);
    if($results)    
    {
        while($row=mysqli_fetch_assoc($results))
        {

         
    
    
    ?>
    <a href = "update.php ?id= <?php echo $row['id'];?>">update details</a>

        <?php }
    }
    ?>


</body>
</html>