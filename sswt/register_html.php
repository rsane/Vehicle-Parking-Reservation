<?php include("register.php"); ?>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>
    <body>
    <div class="signup__container">
        <div class="container__child signup__thumbnail">
            <div class="thumbnail__logo">
                <h1 class="logo__text">PARKar</h1>
            </div>
            <div class="thumbnail__content">
                <h1 class="heading--primary">Welcome to PARKar.</h1>
                <h2 class="heading--secondary">Tired of searching for parking spots?</h2>
            </div>
        </div>
        <div class="container__child signup__form">
            <form action="http://localhost/sswt/register_html.php" method="post">
                
                <div class="form-group">
                    <label for="username"><i class="fas fa-users"></i> Username</label><br>
                    <div title="Username must:&#010;1. Start with alphabet&#013;2. Be of 5 - 15 chars long&#013;3. Not contain any special chars except underscore">
                        <input class="form-control" type="text" name="username" id="username" placeholder="Username"
                        required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name"><i class="fas fa-user"></i> Name</label><br>
                    <div>
                        <input class="form-control" type="text" name="name" id="email" placeholder="Name"
                        required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="vehicle"><i class="fas fa-envelope"></i> Email</label><br>
                    <div>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"><i class="fas fa-lock"></i> Password</label><br>
                    <div title="Password must:&#010;1. be of 8 - 20 chars long&#013;2. Contain atleast 1 number&#013;3. Contain atleast 1 uppercase and lowercase char&#013;4. Contain atleast 1 special char">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password"
                        required />
                    </div>
                </div><br>
                <div class="foot">
                    <input class="btn btn--form" type="submit" id="reg" value="Register" name="reg_user" />
                    <ul class="list-inline">
                        <li>
                            <a class="signup__link" href="http://localhost/sswt/login_html.php">Sign In</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>