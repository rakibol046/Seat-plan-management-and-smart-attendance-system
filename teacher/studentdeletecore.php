<?php
include_once '../dbconnection.php';
session_start();

$studentid = $_GET['studentid'];

$query = "delete from student where studentid='" . $studentid . "';";
$result = $conn->query($query);

echo "<script>
    alert('Deleted!!!!');
    window.location.href='studentlist.php';
    </script>";
    