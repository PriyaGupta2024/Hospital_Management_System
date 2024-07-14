<!DOCTYPE html>
<html>
<head>
    <title>Add Patients</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <center>
    <div class="container">
        <h2>Add Patient Details</h2>
        <form action = "add_patient.php" method = "POST">
            First Name: <input type="text" name="First_Name" required>
            <br><br>
            Last Name: <input type="text" name="Last_Name" required>
            <br><br>
            Age: <input type="number" name="Age" required>
            <br><br>
            Phone Number: <input type="tel" name="contact_number" pattern="[0-9]{10}"   equired>
            <br><br>
            Patient disease: <input type="text" name="patient_disease" required>
            <br><br>
            <input type="submit" value="Add Patient">
        </form>
        <br>
        <form action = "view_patients.php">
            <input type="submit" value="View Patient">
        </form>
    </div>
    </center>
</body>
</html>
