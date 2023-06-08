<?php
    include "./include/config.php";
    $msg = "";

    if(isset($_POST['submit'])){
        $role = mysqli_real_escape_string($conn,$_POST['role']);
        $user = mysqli_real_escape_string($conn,$_POST['username']);
        $pass = mysqli_real_escape_string($conn,($_POST['password']));
    
    
        $sql = "SELECT * FROM adminlogin WHERE role='$role' && username ='$user' && password='$pass'";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result)=== 1){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['username']=$user;
            header('Location: ./pages/dashboard.php');
        }else{
            $msg = "<div class='message'>! Incorrect username or password</div>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myLogin</title>
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <div class="form-container">
            <img class="img" src="./img/stocker.png">

            <form action="" method="post">
                <h2>Retail Management<br>System</h2>
                Welcome Back! <br> please provide your credentials
                
                <?php echo $msg; ?> <br><br>
                <select class="box"  aria-label="Default select example" id="role" name="role" required>
                    <option value="">-select role-</option>
                    <option value="admin">Admin</option>
                    <option value="vendor">Vendor</option>
                    <option value="stocker">Stocker</option>
                </select> <br> 
                <i style="color: grey;" class="fas fa-user"><input type="text" name="username" placeholder="Username" autocomplete="off" class="box"
                required></i>
                <br>
                <i style="color: grey;" class="fas fa-lock"><input type="password"  name="password" placeholder="Password" class="box"
                required></i>
                <br>
                <center><input type="submit" value="login now" name="submit" class="login-btn"></center>


          </form>
        
    </div>
</body>
</html>