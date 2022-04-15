<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="register.css">
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <h2>Welcome to the ghostchatt</h2>
        <div class="row-box">
            <div class="register-box">
                
                <header>register</header>
                <div class="register">
                <label>username:</label><!-- comment -->
                <input type="text" name="username"><!-- comment -->
                <label>password:</label><!-- comment -->
                <input type="password" name="password"><!-- comment -->
                <label>confirm password:</label><!-- comment -->
                <input type="password" name="confirm password">
                <label>email:</label><!-- comment -->
                <input type="email" name="email">
                <form method="POST" action="login.php">
                <button type="submit" class="btn-1">login</button><!-- send to blank page with ghostchatt name and username and password prompt -->
                </form>
                <form method="POST" action="feed.php">
                <button type="submit" class="btn-2">register</button><!-- goes to main feed -->
                </form>
                <hr>
                <p>By clicking register you agree to the terms of use for ghostchatt.</p>
                </div>
                </div>
        </div>
    </body>
</html>
