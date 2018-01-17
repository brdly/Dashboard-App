<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>



<!--

      The Form Panel Cover on the left side displays a welcome message and
    a button which makes the form panel visible and the user can leave a
    review.
      The Login panel on the right side of the screen takes the user to the
    admin panel where they can view the charts. The user is also taken to
    this page if the login credentials were incorrect, the session logs out
    or the user logs out from the admin page.
      The login panel also displays a message of either "failed to log in" or "logged out"
    depending on the situation.


--->



<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <!-- --------------------CSS STYLING------------------------------------------------------>
    <style>
        body
        {
        }

        #formCover
        {
            background-color: black;
            width: 60%;
            height: 105vh;
            margin-left: -1%;
            margin-top: -5%;
            float: left;
        }

        #formCover h1
        {
            margin-top: 25%;
            text-align: center;
            font-size: 50px;
            color: white;
        }

        #formCover p
        {
            margin-top: 10%;
            text-align: center;
            font-size: 30px;
            color: white;
        }

        #formButton
        {
            margin-left: 10%;
            margin-top: 5%;
            padding: 1%;
            background-color: rgb(24,187,156);
            border-radius: 8%;
            border: transparent;
            color: white;
            font-size: 200%;
            font-weight: 900;


        }


        /**
        the form background had issues when filling up the screen, had to set
        the height at 240vh to compensate.
         */


        #form
        {
            display: none;
            background-color:rgb(45,62,80);
            width: 100%;
            height: 240vh;
            margin-left: -1%;
            margin-top: -5%;
            padding-left: 5%;
            float: left;

        }

        #formFields
        {
            text-align: left;
            display:block;
            color: white;
            margin-top: 8%;
        }

        #formEntry
        {
            font-size: 200%;
            margin-bottom: 10%;
        }


        #formFields > label
        {
            display: block;
            margin-top: 1%;
            margin-bottom: 0.5%;
        }




        #login
        {
            background-color: rgb(24,187,156);
            width: 42%;
            height: 105vh;
            margin-right: -1%;
            margin-top: -5%;
            float: right;
        }

        #loginCover
        {
            margin-top: 50%;
            margin-left: 10%;
            color:white;
            font-size: 25px;
        }

        /**
        the text fields for the login form
         */

        #loginCover > form > div > input
         {
             display: block;
             width: 36%;
             background-color: transparent;
             color: white;
             padding: 2%;
             margin-bottom: 5%;
             border: transparent;
            border-bottom: solid;
         }

        #loginForm_failed
        {
            font-size: 30px;
            color:red;
        }

        /**
        the login panel submit button #submit
         */

        #submit
        {
            padding: 1%;
            width: 20%;
            font-size: 100%;
            font-weight: 900;
            color: rgb(24,187,156);
        }


    </style>


    <!---------------------------------------END OF CSS----------------------------------------->



</head>
<body>

<!--

    the formCover div will have the ILO logo, as well as a welcome message on it.
    once the button is pressed, the actual form div will replace and fill up the screen
-->
<div id="formCover">
    <h1>Welcome to the platform feedback website</h1>
    <p>If you would like to leave feedback for a platform<br>
        please click here</p>
    <button id="formButton" type="submit">Give Review</button>
</div>

<!--

    the login div hold a login form taking the user to the admin pannel. Incorrect
    login details as well as pressing the logout on the admin panel will redirect
    the user here with a specific message (logout or failed to log in)
-->

<div id="login">
    <div id="loginCover">

        <?php
        if (isset($_SESSION['login'])){
            echo "<p id='loginForm_failed'>".$_SESSION['login']."</p>";
            $_SESSION['login'] = null;
        }
        ?>

        <section class="loginBling"> <p><strong>Please enter your email and password:</strong></p></section>
        <form name="form1" method="post" action="../../public/adminportal.php">
            <div>
                <input type="text" placeholder="Email Address" name="Username" required>

                <input type="password" placeholder="Password" name="Password" required>

                <button id="submit" type="submit">Login</button>
                <section class="loginBling"><p>
                        Forgot Password? Click <a href="">here</a> !
                    </p></section>
            </div>
        </form>
    </div>

</div>


<!--
   the form div holds the actual form to be submitted by users. It is set initially
   to display:none and is activated by a jQuery script when the formButton element
   is pressed.
-->
<div id="form">

    <form name="form1" method="post" action="passingdata.php">
        <div id="formFields">
            <section id="formEntry">
                Please Complete the form below
            </section>
            <label>What Platform are you reviewing? </label>
            <select>
                <option value="Fiverr">Fiverr</option>
                <option value="Upwork">Upwork</option>
                <option value="AMT">AMT</option>
                <option value="CrowdFlower">CrowdFlower</option>
                <option value="ClickWorker">ClickWorker</option>

            </select>
            <label>What is your overall review </label>
            <select name = "rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label>How would you rate the work / life balance? </label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate benefits or social support you receive, if any? </label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate your job security? </label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate the management of the platform? </label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate the culture?</label>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>Are you a current or former employee?</label>
            <select>
                <option value="current">current</option>
                <option value="former">former</option>

            </select>
            <label>Please write your review here </label>
            <textarea name="review" rows="20" cols="80">

            </textarea>

            <label>Pros? </label>
            <textarea name="review" rows="10" cols="80">

            </textarea>
            <label>Cons?</label>
            <textarea name="review" rows="10" cols="80">

            </textarea>
        </div>
    </form>
    <button id="formSubmit" type="submit">Submit</button>
</div>

<!---------------------------------------JQUERY ANIMATION----------------------------------->

<!--
    jQuery script, when the formButton element is clicked, the login and formCover
    divs are hidden and the form div is set to visible, letting users fill out
    the review form.
-->


<script>
$(document).ready(function() {
$("#formButton").click(function() {
$("#formCover").css("display" , "none");
$("#login").css("display" , "none");
$("#form").show();
});
});
</script>

<!----------------------------------------END OF JQUERY-------------------------------------->



</body>


</html>
