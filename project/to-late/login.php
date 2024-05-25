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
        <header >
            <div class="header">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="./img/logo.JPG">
                    </a>
                </div>
                <div class="header-inside">
                    <a href="addProperty.php" class="btn">
                        <img src="./img/add.png" alt="Add">
                        Add Property 
                    </a>
                    <a href="login.php" class="btn">
                        <span >Login / Register </span>
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
                    <form id="signupForm">
                        <input type="tel" placeholder="Phone number" required>
                        <input type="password" placeholder="Password" required>
                        <button type="submit">Log In</button>
                    </form>
                    <div class="login-link">
                        Don't have an account? <a href="register.php">Create Account</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/register.js"></script>
    </body>
</html>