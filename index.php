<?php 
    $con = mysqli_connect('localhost', 'moderator_01', '2015421001', 'webapp');

    if (!$con) {
        echo "<h2>Connection Failed</h2><br>";
    }
    
    if (isset($_POST['register'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
    
        $query = "INSERT INTO user (username, password) VALUES ('$user', '$pass')";
    
        $trigger = mysqli_query($con, $query);
    
        if ($trigger) {
            $message = "<span style='color:green;'>Signup successful!</span>";
        }
        // } else {
        //     return {'msg':'Registeration failed!'};
        // }
    }
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <h2>Login</h2>
        <input type="text" placeholder="username" id="username" name="username" required>
        <input type="password" placeholder="password" id="password" name="password" required>
        <div class="buttons">
            <button type="submit" name="register">Sign Up</button>
            <button type="submit" name="signin">Log In</button>
        </div>
    </form>

</body>
</html>