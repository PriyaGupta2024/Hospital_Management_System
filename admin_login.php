<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login </title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: royalblue;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    background: rgba(255, 255, 255, 0.72);
    padding: 30px;
    border-radius: 10px;
    text-align: center;
}

.login-box {
    width: 300px;
    padding: 20px;
}

.logo {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

.textbox {
    margin-bottom: 20px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    border: none;
    border-bottom: 2px solid #333;
    background: transparent;
    outline: none;
    color: #333;
    font-size: 16px;
}

.button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #333;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.button:hover {
    background: #555;
}
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="admin_logo.png" alt="Logo" class="logo">
            <h1>Admin Login</h1>
            <form action="admin_login.php" method="post">
                <div class="textbox">
                    <input type="text" id="username" placeholder="User Id" name="username" required>
                </div>
                <div class="textbox">
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </div>
                <input type="submit" class="button" value="Sign In">
            </form>
            <?php
            include('db.php');
            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                        if(password_verify($password, $row['password'])){
                            $_SESSION['username'] = $username ;
                            header("Location: patient_form.php");            
                }else{
                    echo "<p class='error'>Incorrect username or password</p>";
                  }
                }else{
                    echo "<p class='error'>No User Found</p>";
                }

            }
            $conn->close();
        ?>
        </div>
    </div>
</body>
</html>