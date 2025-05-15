<html>
<head>
    <title>Login</title>
</head>
<body>
    <main>
        <section >
            <fieldset>
                <legend><h2>Login</h2></legend>
                <form action="../controller/checkLogin.php" method="post">
                    <div class="input-group">
                        <label for="username"><b>UserName:</b></label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password"><b>Password:</b></label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <?php require("../controller/errorShowing.php");?>
                    <hr>
                    <div class="actions">
                        <input type="submit" value="Login">
                        <a href="../view/signup.php">Signup</a>
                    </div>
                </form>
            </fieldset>
        </section>
    </main>
</body>
</html>
