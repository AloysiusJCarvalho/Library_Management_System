<html>
    <head>
         <link rel="stylesheet" href="style.css">
         <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
        <title> Admin Login </title>
    
    </head>
    <body>
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
    <div class="loginbox">
    <img src="images/admin.png" width="30" height="40"class="admin" >
         <h1>ADMIN LOGIN</h1>
        <form action="process.php" method="POST">
        <input type="text" name="username" placeholder="Username" required ><br>
            <input type="password" name="password" placeholder="Password " required><br>
            <div class="box">
             <p>
             <button name = "button" type="submit">Log in</button><br>
             </p>
            </div>
        </form>
        </div>
    </body>
</html>