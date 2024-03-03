<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM employee WHERE id = '$id'";

    if ($conn->query($query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
    
?> 