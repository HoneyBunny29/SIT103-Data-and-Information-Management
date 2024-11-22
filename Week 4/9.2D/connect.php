<?php

$serevrname = "localhost";
$username = "root";
$password = "";
$dbname = "medicalclinic";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doctor_id = $_POST['doctor_id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $phone_number = $_POST['phone_number'];
    $specilized_area = $_POST['specilized_area'];
    $email = $_POST['email'];

    $con = new mysqli('localhost', 'root', '', 'medicalclinic');

    if ($con) {
        $sql = "INSERT INTO doctor (doctor_id, f_name, l_name, phone_number, specialized_area, email)
                VALUES ('$doctor_id', '$f_name', '$l_name', '$phone_number', '$specilized_area', '$email')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Registration Success";
        } else {
            echo "Registration Failed";
        }
    } else {
        die(mysqli_error($con));
    }
}
?>

