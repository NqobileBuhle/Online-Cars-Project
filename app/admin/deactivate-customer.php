<?php
session_start();
global $conn;
require('../config.php');
if(isset($_SESSION['admin_name'])){
    $id = (int) $_GET['id'];
    $sql = "UPDATE customer SET status=0 WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    header('location: all-customers.php');

}
else{
    header('location: login-reg.php');
}
