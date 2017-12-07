<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Spicy Quizzes "R" Us</title>
        <script src="main.js"></script>
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <form action="index.php" class="block"><button type="submit" id="btnHeader">HOME</button></form>
            <form action="quizSelect.php" class="block"><button type="submit" id="btnHeader">QUIZ</button></form>
            
        </div>
        <div id="login">
            <div id="loginForm">
                Email Address: <br>
                <input id="Email"> <br><br>
                Password: <br>
                <input type="password" id="Password"> <br><br>
                <button id="btnSubmit" class="btn" onclick="login()"> Login </button>
                <button id="btnRegister" class="btn" onclick="register()"> Sign Up! </button>
                
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
