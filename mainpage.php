<?php 

    session_start();
    //$diaryContent="";

    if (array_key_exists("id", $_COOKIE) && $_COOKIE ['id']) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
              
      include("connection.php");
      
      $query = "SELECT diary FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
      $row = mysqli_fetch_array(mysqli_query($link, $query));
 
      $diaryContent = $row['diary'];
      
    } else {
        
        header("Location: index.php");
        
    }

	include("header.php");

include ('connection.php');

$query = "SELECT * FROM `users` ORDER BY id";

$result = $link->query($query);

$rownumber=0;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { 
    echo "id: " . $row["id"]. " - email: " . $row["email"]. " " . $row["password"]. "<br>";

    }
} else {
    echo "0 results";
}

$link->close();

?>


