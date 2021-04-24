<?php include("login.php"); ?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="signup__container">
        <div class="container__child signup__thumbnail">
            <div class="thumbnail__logo">
                <h1 class="logo__text">PARKar</h1>
            </div>
            <div class="thumbnail__content">
                <h1 class="heading--primary">Welcome to PARKar.</h1>
            </div>
        </div>
        <div class="container__child signup__form">
            <form action="http://localhost/sswt/login_html.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label><br>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Username"
                        required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password"
                        required />
                </div><br><br>
                <div class="foot">
                    <input class="btn btn--form" type="submit" value="Log In" name="log_user" />
                    <ul class="list-inline">
                        <li>
                            <a class="signup__link" href="http://localhost/sswt/register_html.php">Register</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>

</html>