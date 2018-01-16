
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>

        body
        {
            background-color: beige;
            color: beige;

        }

        #login
        {
            width: 35%;
            background-color:rgb(45,62,80);
            text-align: center;
            margin: auto;
            margin-top: 5%;
            padding: 3%;
            border-radius: 3%;

        }

        #login  > .loginBling > p
        {
            margin: auto;
            margin-bottom: 20%;
            width: 70%;
        }

        #login *  > p
        {
            margin: auto;
            margin-top: 10%;
            padding: 5%;


        }

        input
        {
            display: inline-block;
            width: 36%;
            background-color: transparent;
            color: grey;
            padding: 2%;
        }

        #submit
        {
            width: 20%;
            margin: auto;
            margin-top: 20%;
            display: block;


        }

        .loginBling
        {
            background-color:rgb(24,187,156);
        }




    </style>
</head>
<body>
<div id="login">
    <section class="loginBling"> <p><strong>Please enter your email and password:</strong></p></section>
    <form name="form1" method="post" action="passingdata.php">
        <div>
            <input type="text" placeholder="Email Address" name="uname" required>

            <input type="password" placeholder="Password" name="psw" required>

            <button id="submit" type="submit">Login</button>
            <section class="loginBling"><p>
                <b>If you do not have an account, click <a href="">here</a> to sign up!</b>
                </p></section>
        </div>
    </form>
</div>
</body>

</html>
