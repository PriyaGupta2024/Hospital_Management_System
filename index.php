<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
        <nav>
            <div class = "logo">
                <h1>You Are Safe Hospital </h1>
            </div>
            <ul>
                <li> <a href = "index.php" >Home</a></li>
                <li> <a href = "#doctor" id="doctors-link" >Doctor's</a></li>
                <li> <a href = "signup.php" >Admin</a></li>
                <li> <a href = "#contact" id="contact-link" >Contact Us</a></li>
            </ul>
        </nav>

        <div class = "main">
            <div class = "mainText">
                <h1>Healthcare institution for patient treatment.</h1>
                <h3> Our Efforts For You</h3>
                <button> Show more </button>
            </div>
            <img src=" main.jpg" alt="Main Image">
        </div>

        <div id="doctor">
            <div class = "head">
                <h1> Our Doctor's</h1>
            </div>
            <div class ="teams">
                <div class ="card">
                    <img src="dt1.jpg" alt="Dr.Lucy">
                    <p>Lucy</p>
                    <p> Dr. Lucy Anderson is a highly skilled and experienced specialist surgeon known for her expertise in minimally invasive surgical techniques. </p>
                </div>
                <div class = "card">
                    <img src="dt2.jpg" alt="Dr.Noha">
                    <p> Noha</p>
                    <p>Dr. Noha is a renowned specialist in heart surgery, known for her expertise in performing complex cardiac procedures.  </p>
                </div>
                <div class = "card">
                    <img src="dt3.jpg" alt="Dr.john">
                    <p> john</p>
                    <p> Dr. John, a specialist in dermatology, is renowned for his expertise in treating various skin conditions, including eczema, psoriasis, and acne.</p>
                </div>
            </div>
        </div>
        <div id="contact">
        <div class = "head">
           <h1>contact us </h1>
          <center> <input type="text" placeholder="Enter Email" id="email">
           <input type="password" placeholder="Enter password" id="pass"/><br>
           <button id="connectBtn">Connect</button></center>
        </div>
    </div>
    </div>
    <script>
        document.getElementById('doctors-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('doctor').scrollIntoView({ behavior: 'smooth' });
        });
        document.getElementById('contact-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        });
    </script> 
     <form action="add_patient.php" method="post"></form>
     
</body>
</html>