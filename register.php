<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="register_style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <title>Create New Account</title>
</head>
<body>
    <div class="bg">
            <header>
                    <h2>
                        LIBRARY MANAGEMENT SYSTEM
                    </h2>
                    <ul>
                        <li>Home</li>
                        <li>Books</li>
                        <li>Student Login</li>
                        <li>Admin Login</li>
                    </ul>
                </header>
        <div class="box">
            <form action="_register.php" class="loginform" method="POST">
                <h3>Register</h3>
				<div class="name1">
                    <input name = "firstname" type="text" placeholder=" First Name" required>
                </div>
                <br>
				<div class="name2">
                    <input name = "lastname" type="text" placeholder=" Last Name" required>
                </div>
                <br>
				<div class="phone">
                    <input name = "phonenumber" type="tel" placeholder=" Phone Number" required>
                </div>
                <br>
                <div class="email">
                    <input name = "email" type="text" placeholder=" Email" required>
                </div>
                <br>
                <div class="pass">
                    <input name ="password" type="password" placeholder=" Password" required>
                </div>
                <br>
                <button name = "button" type="submit">Sign Up</button>
            </form>
        </div>
    </div>	
</body>
</html>