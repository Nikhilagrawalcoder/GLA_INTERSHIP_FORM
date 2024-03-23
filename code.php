<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "intern_form");

if(isset($_POST['insert_data'])){
    $rollNo = mysqli_real_escape_string($con, $_POST['rollNo']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $section = mysqli_real_escape_string($con, $_POST['section']);
    $cpi = mysqli_real_escape_string($con, $_POST['cpi']);
    $institution = mysqli_real_escape_string($con, $_POST['institution']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $howknow = isset($_POST['howknow']) ? mysqli_real_escape_string($con, $_POST['howknow']) : ''; // 
    
    $query = "INSERT INTO documentdetail (rollno, name, year, section, cpi, institution, mobileno, email, howknow, date) VALUES ('$rollNo', '$name', '$year', '$section', '$cpi', '$institution', '$mobileno', '$email', '$howknow', current_timestamp())";

    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
    } else {
        $_SESSION['status'] = "Data Not Inserted";
    }
    header("Location: index.php?status=" . urlencode($_SESSION['status'])); 
    exit;
}
?>
