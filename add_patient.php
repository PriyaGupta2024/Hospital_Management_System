<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Age = $_POST['Age'];
    $contact_number = $_POST['contact_number'];
    $patient_disease = $_POST['patient_disease'];
    $sql = "INSERT INTO patients (First_Name,Last_Name,Age, contact_number,patient_disease) Values ('$First_Name','$Last_Name',$Age,$contact_number,'$patient_disease')";

    if($conn->query($sql) == TRUE){
        echo "New record created ";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>