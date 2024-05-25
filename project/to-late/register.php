
<?php
@include 'config.php';
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phnNumber']);
    $pass = md5($_POST['password']);
    $conPassword = md5($_POST['conPassword']);
    $uType = isset($_POST['userType']) ? $_POST['userType'] : '';

    $select = "SELECT * FROM user_info WHERE U_Phone = '$phone' AND U_Pass = '$pass'";

    $result = mysqli_query($conn, $select); 
    if(mysqli_num_rows($result) > 0){
        $error = 'User already exists';
    } else {
        if($pass != $conPassword){
            $error = 'Password does not match';
        } else {
            $insert = "INSERT INTO user_info('U_Name', 'U_Phone', 'U_Type', 'U_Pass') VALUES('$name', '$phone', '$uType', '$pass')";
            mysqli_query($conn, $insert);
            header('location: login.php');
        }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="./css/headerStyle.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="header-logo">
                <a href="index.php">
                    <img src="./img/logo.JPG" alt="Logo">
                </a>
            </div>
            <div class="header-inside">
                <a href="addProperty.php" class="btn">
                    <img src="./img/add.png" alt="Add">
                    Add Property 
                </a>
                <a href="login.php" class="btn">
                    <span>Login / Register</span>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="left-panel">
            <div class="logo">
                <h1>THE TO-LET</h1>
                <p>HOUSE RENT SOLUTION</p>
            </div>
        </div>
        <div class="right-panel">
            <div class="form-container">
                <h2>Create an account</h2>
                <div class="user-type">
                    <button id="ownerBtn" class="active">Owner</button>
                    <button id="renterBtn">Renter</button>
                </div>
                <form id="signupForm" action="" method="post">
                    <?php
                    if(isset($error)) {
                        foreach ($error as $err) {
                            echo '<span class="error-msg">'.$err.'</span>';
                        }
                    }
                    ?>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="tel" name="phnNumber" placeholder="Phone number" required>
                    <input type="password" name="password" placeholder="Password" required id="password">
                    <input type="password" placeholder="Confirm Password" name="conPassword" required id="conPassword">
                    <input type="hidden" name="userType" id="userType" value="Owner">
                    <div class="policy">
                        <input type="checkbox" required>
                        <label>I accept the Privacy Policy</label>
                    </div>
                    <button type="submit" name="submit" id="createAcc">Create an Account</button>
                </form>
                <div class="login-link">
                    Already have an account? <a href="login.php">Log in</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('ownerBtn').addEventListener('click', function() {
            document.getElementById('userType').value = 'Owner';
            this.classList.add('active');
            document.getElementById('renterBtn').classList.remove('active');
        });
        document.getElementById('renterBtn').addEventListener('click', function() {
            document.getElementById('userType').value = 'Renter';
            this.classList.add('active');
            document.getElementById('ownerBtn').classList.remove('active');
        });
    </script>
</body>
</html>



