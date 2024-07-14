<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>View Patients</title>
    <link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <div class= "container">
        <h1>Patients List</h1>
        <?php
        include 'db.php';
        $sq1 = "SELECT id,First_Name ,Last_Name,Age,contact_number,patient_disease FROM patients";
        $result = $conn->query($sq1);

        if($result->num_rows > 0){
            echo" <table> <tr><th>ID</th><th>First_Name</th><th>Last_Name</th><th>Age</th><th>Phone Number</th><th>patient_disease</th></tr>";
             while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Age"]."</td><td>".$row["contact_number"]."</td><td>".$row["patient_disease"]."</td></tr>";
            }
            echo "</table>";
        } else{
            echo "0 results";
        }
            $conn->close();
        ?>
    </div>
    
</body>
</html>