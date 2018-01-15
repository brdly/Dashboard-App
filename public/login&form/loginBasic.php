<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="">
    <meta charset="utf-8">
    <title>Login Page - Group 4</title>
    <meta name="description" content="Login Page for SPAT Task - Group 4.">

    <link href="/css/spat/build/js/slider/demo/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <script src="/css/spat/build/js/slider/jQDateRangeSlider-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <style>

        @font-face {
            font-family: Seguibl;
            src: url(/css/spat/build/css/seguibl.ttf);
        }

        body {
            height:100vh;
            width:100vw;
            margin:0;
            padding:0;
            background-color:white;
            color:black;
            font-family: 'Seguibl', sans-serif;
            font-size:16px;
            text-align:center;
        }

        #headerTopSpacer {
            float:left;
            background-color:white;
            width:100vw;
            height:0px;
        }

        #headerLeftSpacer {
            float:left;
            background-color:rgb(24,187,156);
            width:10px;
            height:70px;
        }

        #navigationLeftSpacer {
            float:left;
            clear: both;
            background-color:rgb(24,187,156);
            width:10px;
            height:calc(100vh - 70px);
        }

        #mainLeftSpacer {
            float: left;
            background-color:rgb(45,62,80);
            width:10px;
            height:calc(100vh - 70px);
            overflow:hidden;
        }

        #mainLeftSpacer2 {
            float: left;
            background-color: white;
            width: 6px;
            height: 100vh;
            border-radius: 5px;
            border-left: 27px white solid;
        }

        #mainTopSpacer {
            float: left;
            background-color: rgb(45,62,80);
            width: calc(100vw - 190px);
        }

        header {
            float:left;
            background-color:rgb(45,62,80);
            width: calc(100vw - 10px);
            height: 70px;
        }

        header > section {
            float:right;
            background-color:rgb(45,62,80);
            height:40px;
            min-width:100px;
            width:auto;
            padding-left:10px;
            padding-right:10px;
            margin-right:20px;
            cursor:pointer;
            margin-top:15px;
            line-height:40px;
            border-radius:3px;
            font-size: 18px;
        }

        header > section:hover {
            background-color:rgba(24,187,156,0.5);
        }

        nav {
            float:left;
            background-color:rgb(45,62,80);
            height:calc(100vh - 70px);
            width:170px;
        }

        nav > section {
            float:left;
            background-color:rgb(45,62,80);
            height:42px;
            width:158px;
            margin-left:6px;
            margin-bottom:12px;
            line-height:42px;
            cursor:pointer;
            border-radius:3px;
            font-size: 16px;
        }

        nav > section:hover {
            background-color:rgba(24,187,156,0.5);
        }



        main {
            float:left;
            background-color:white;
            width:calc(100vw - 190px);
            height:calc(100vh - 71px);
            overflow:auto;
        }

        main > section {
            float:left;
            background-color:white;
            width:360px;
            height:200px;
            margin:10px;
            line-height:250px;
        }

        footer {
            float:left;
            background-color:white;
        }


        .floatLeft {
            float:left!important;
            color: white;
        }

        .hoverOff:hover {
            background-color:transparent!important;
            cursor:auto!important;
        }

        .titlebox {
            margin-left:25px;
            font-size:22px;
            line-height: 24px;
        }






        form
        {
            text-align: center;
            padding: 10%;


        }

        label
        {
            display: block;
            padding: 2%;
        }



        #loginForm
        {


        }



        #loginInfo
        {
            background-color: rgba(24,187,156,0.5);
            margin-top: -5%;
            margin-left: 20%;
            padding: 5%;
            border-radius:5px;
        }

        #infoRequest
        {
            font-size: 28px;
            margin-top: 1%;
        }

        button
        {
            display: block;
            margin: auto;
            margin-top: 5%;
        }



    </style>



</head>
<body>

<div id="headerTopSpacer"></div>
<div id="headerLeftSpacer"></div>

<header>

    <section class="floatLeft hoverOff titlebox">LOGIN<br/>PAGE</section>

</header>


<div id="navigationLeftSpacer"></div>


<nav></nav>

<div id="mainLeftSpacer"><div id="mainLeftSpacer2"></div></div>
<div id="mainTopSpacer"></div>

<div id="loginForm">
    <form name="form1" method="post" action="../../public/adminportal.php">
        <div id="loginInfo">
            <p id="infoRequest"><strong>Please enter your username and password:</strong></p>
            <?php
            if (isset($_SESSION['login'])){
                echo "<p id='loginForm_failed'>".$_SESSION['login']."</p>";
                $_SESSION['login'] = null;
            }
            ?>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password" required>

            <button type="submit">Login</button>

            <p>Don't have an account yet? Click here to sign up</p>
        </div>
    </form>
</div>

<footer></footer>

</body>
</html>