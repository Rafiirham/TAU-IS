<?php

session_start();

include('koneksi.php');

$username     = $_POST['username'];
$password      = $_POST['password'];

//query
$query  = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result     = mysqli_query($koneksi, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";

    $_SESSION['iduser'] = $row['iduser'];
    $_SESSION['username'] = $row['username'];

} else {
    
    echo "error";

}

?>