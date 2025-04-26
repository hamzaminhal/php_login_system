<?php
include('db_conn.php');

// CODE FOR SIGN UP PORTION

if(isset($_POST['sbtn'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "SELECT username FROM users WHERE username = '$uname'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
        echo '<script>
            alert("Username Already Exists");
            window.location.href="signup.php"
            </script>';
    }else{
        $insert = "INSERT INTO users VALUES('', '$uname', '$pwd')";
        $run_insert = mysqli_query($conn, $insert);
        if($run_insert){
            echo '<script>
            alert("Signed Up Succesfully. Please Login");
            window.location.href="index.php"
            </script>';
        }
        
    }
}

// CODE FOR LOGIN PORTION

if(isset($_POST['lbtn'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$uname' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
        header('location:home.php');
    }else{
        echo '<script>
                alert("Invalid Username or Password");
                window.location.href="index.php"
              </script>';
    }
}

// CODE FOR FORGOT PASSWORD 

if(isset($_POST['fbtn'])){
    $uname = $_POST['username'];
    $query = "SELECT username FROM users WHERE  username = '$uname'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
        // header('location:forgot_password.php');
        ?>
        <link rel="stylesheet" href="style.css">
            <div class="form-container">
        <h2>Reset Password</h2>
        <form action="" method="post">
            <label for="login-email">Userrname</label>
            <input type="username" id="login-email" name="username" value="<?php echo $uname;?>" readonly/>

            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="new_password" />
            
            <label for="login-password">Confirm Password</label>
            <input type="password" id="login-password" name="confirm_password" />

            <input type="submit" value="Reset Password" name="rbtn" />
        </form>
        <?php
    }else{
        echo '<script>
            alert("Username Does Not Exists");
            window.location.href="forgot.php"
            </script>';
    }

}

// CODE FOR RESET PASSWORD PORTION

if(isset($_POST['rbtn'])){
    $uname = $_POST['username'];
    $new_pwd = $_POST['new_password'];
    $c_pwd = $_POST['confirm_password'];
    if($new_pwd===$c_pwd){
        $update_query = "UPDATE users SET pwd = '$new_pwd' WHERE username = '$uname'";
        $run_update_query = mysqli_query($conn, $update_query);
        if($run_update_query){
            echo '<script>
            alert("Password Reset Succesfully please Login");
            window.location.href="index.php"
            </script>';
        }else{
            echo 'Failed to Reset Password';
        }

    }else{
    echo '<script>
    alert("Password Not Matched type same password ");
    </script>';
}
}
?>