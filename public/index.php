




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


-->



<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="">
    <meta charset="utf-8">
    <title>Worker Feedback Form - Group 4</title>
    <meta name="description" content="Worker Feedback Form for SPAT Task - Group 4.">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>


    <!-- CSS STYLING -->
    <style>
        body
        {
            margin:0;
            padding:0;
        }

        #formCover
        {
            background-color: #2d3e50;
            width: 60%;
            height: 100vh;
            float: left;
            font-family: 'Roboto', sans-serif;
            overflow:auto;
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
            margin-bottom: 5%;
            padding: 1%;
            background-color: #67707f;
            border-radius: 8%;
            border: transparent;
            color: white;
            font-size: 200%;
            font-weight: 900;


        }




        #formButton:hover{
            background-color:rgb(24,187,156);
            color:white;
        }



        #form > form > button
        {
            margin-top: 5%;
            margin-bottom: 2%;
            width: 10%;
            height: 10vh;
            border-radius: 5%;
            font-size: 150%;
            font-weight: 900;
        }

        #formSubmit
        {
            background-color: #31e5c1;
            float: right;
            clear: right;
            margin-right: 3%;
        }

        #formCancel
        {
            background-color: rgba(33,33,33,0.8);
            color: white;
            float: left;
            clear: left;
            margin-left: 3%;

        }




        /**

                #formSubmit
                {
                    float: right;
                    clear: right;
                    height: 80px;
                    color: black;
                    width: 200px;
                    border: 1px darkgreen solid;
                    background-color: #31e5c1;
                    border-radius: 7px;
                    margin-right: 5%;
                    margin-top: 3%;
                    margin-bottom: 2%;
                    font-size: 40px;
                    cursor:pointer;
                }



                #formCancel
                {
                    float: left;
                    margin-left-5%;
                    margin-top:10%;
                    font-size:26px;
                    border-radius: 4px;
                    height: 50px;
                    background-color: rgba(33,33,33,0.8);
                    cursor: pointer;
                    color: grey;
                    border: 1px solid darkrgrey;
                }


                /**
                the form background had issues when filling up the screen, had to set
                the height at 240vh to compensate.
                 */



        #form
        {
            background-color:rgb(45,62,80);
            height:240vh;
        }

        .ofOn {
            overflow:hidden;
            border: 0px solid white;
        }
        .ofOff {
            overflow:auto;
            border: 5px solid white;
        }

        .formFields
        {
            font-family:'Roboto', sans-serif;
            text-align: left;
            display:block;
            color: white;
            background-color: transparent;
            margin-top: 50px;
            font-size:19px;


        }

        .formFields > *
        {
            background-color:rgb(45,62,80);
            color: white;
            border-radius: 3%;
        }

        #rightForm
        {

            margin-left: 50px;
        }

        #leftForm
        {


        }

        .pull-right {
            float: right;
            right: 0;
        }

        #formEntry
        {
            font-family:'Roboto', sans-serif;
            font-size: 36px;
            margin-bottom: 25px;
        }


        .formFields > label
        {
            display: block;
            margin-top: 20px;
            margin-bottom: 4px;
            margin-left: 50px;
        }
        .formFields > select
        {
            display: block;
            font-size:18px;
            margin-top: 2px;
            margin-bottom: 4px;
            margin-left: 50px;
            padding:5px;

        }

        .formFields > textarea
        {
            font-size:16px;
            display: block;
            margin-top: 2px;
            margin-bottom: 4px;
            margin-left: 50px;

        }

        .formFields > input
        {
            font-size:16px;
            display: block;
            margin-top: 2px;
            margin-bottom: 4px;
            margin-left: 50px;

        }


        #login
        {
            font-family: 'Lato', sans-serif;
            background-color: rgb(24,187,156);
            width: 40%;
            height: 100vh;
            float: right;
            overflow:auto;
            position: fixed;
        }

        #loginCover
        {
            margin-top: 50%;
            margin-left: 30%;
            color:white;
            font-size: 25px;
        }

        /**
        the text fields for the login form
         */

        #loginCover > form > div > input
        {

            display: block;
            width: 200px;
            color: white;
            border-color:transparent;
            padding: 2%;
            font-size: 22px;
            margin-bottom: 20px;
            border: transparent;
            background-color: transparent;
            border-bottom: solid;
            border-radius:4px;
        }

        #loginForm_failed
        {
            text-transform: uppercase;
            font-size: 30px;
            color:red;
        }
        .displayOn
        {
            display:block;
        }
        .displayOff
        {
            display:none;
        }

        /**
        the login panel submit button #submit
         */

        #submit
        {
            padding: 1%;
            width: 218px;
            font-size: 100%;
            font-weight: 900;
            color: rgb(24,187,156);
            border-radius:4px;
        }

        #submit:hover{color:black}
        #formSubmit:hover{border:2px solid white;}
        #formCancel:hover{border:2px solid white;}



        @media only screen and (max-width: 1441px) {


            .formFields
            {
                float: left;
                clear: left;
            }

            .formFields > *
            {
                width: 160%;
            }

            .formFields > select
            {
                border: transparent;
                border-top: solid;

            }


            #form > form > button
            {
                width: 45%;
            }


            #rightForm
            {
                margin-left: 0px;
            }

            #leftForm
            {
                margin-left: 0px;
            }

        }





        @media only screen and (max-width: 800px) {




            #login
            {
                width: 100%;
                position: static;
            }


            #formCover
            {
                width: 100%;
            }

            #formButton
            {
                margin-bottom: 10%;
            }





        }

        @media only screen and (max-width: 600px) {


            #login
            {
                width: 100%;
            }


            #formCover
            {
                width: 100%;
            }

            #formButton
            {
            }

            #formEntry
            {
                width: 180%;
                height:10%;
                text-align: center;
            }



        }

        .formOpen {
            width: 100% !important;
        }

    </style>


    <!---END OF CSS -->

</head>
<body>

<!--

    the formCover div will have the ILO logo, as well as a welcome message on it.
    once the button is pressed, the actual form div will replace and fill up the screen
--><div id="wrapAround">
    <div id="formCover">
        <img src="login&form/img/ilo2.jpg" style="margin-left:15px;margin-top:50px;width:200px;height:auto;float:left;margin-right:50%;" />
        <p style="float:left;margin-left:45px;min-width:60%;max-width:90%;text-align:left;margin-top: 70px;font-size: 40px;">HELP US HELP YOU</p>
        <p style="float:left;margin-left:45px;min-width:60%;max-width:80%;text-align:left;margin-top: 20px;font-size: 18px;">
            Here at the International Labour Organisation our aim is to ensure workers are treated fairly. We have been doing this for
            almost 100 years and we have had a Nobel Peace Prize awarded to us in the past for our achievements. </br></br>
            As the world becomes more digital, so must we. </br></br>
            The rise of freelance, self-employed, home-based workforces is growing exponentially. This
            is great for many reasons, but there are always negatives. These negatives are common with new types of labour, especially in the early days. </br></br>
            <u>So, how can you help us?</u></br></br>
            We need your feedback, whether that is negative or positive, it is all useful! </br></br>
            We can help ensure that the things that you find good are not scrapped and the things that you find bad are improved. We are your voice, please enable us to act for you.</p>
        <button style="float:left;margin-left:45px;text-align:left;margin-top: 25px;border-radius:4px;cursor:pointer;" id="formButton" type="submit">I want to help</button>
    </div>

    <!--

        the login div hold a login form taking the user to the admin pannel. Incorrect
        login details as well as pressing the logout on the admin panel will redirect
        the user here with a specific message (logout or failed to log in)
    -->

    <div id="login" class="pull-right">
        <div id="loginCover" style="width:auto;height:auto;">



            <?php
            if (isset($_SESSION['login'])){
                echo "<p id='loginForm_failed'>".$_SESSION['login']."</p>";
                $_SESSION['login'] = null;
            }
            ?>


            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION["error"])){
                //COPY THIS CODE TO WHERE U WANT UR ERRORS IN.
                echo $_SESSION["error_msg"];
                echo $_SESSION["warning"];

                //DO NOT FORGET TO CLEAR THEM TOO!
                $_SESSION["error"] = null;
                $_SESSION["error_msg"] = null;
                $_SESSION["warning"] = null;
            }

            ?>

            <section class="loginBling"> <p style="padding-bottom:5px;margin-bottom:10px;width:200px;text-align:center;"><strong>Login</strong></p></section>
            <form name="form1" method="post" action="adminportal.php">
                <div>
                    <input type="text" placeholder="Email Address" name="Username" required>

                    <input type="password" placeholder="Password" name="Password" required>

                    <button id="submit" type="submit" style="cursor:pointer;">Login</button>
                </div>
            </form>
        </div>

    </div>


    <!--
       the form div holds the actual form to be submitted by users. It is set initially
       to display:none and is activated by a jQuery script when the formButton element
       is pressed.
    -->
    <div id="backdrop" class="displayOff" style="width:100vw;height:100vh;background-color:rgba(0,0,0,0.7);position:absolute;top:0;left:0;"></div>
    <div id="form" class="ofOn" style="position:absolute;bottom:0px;left:0px;width: 90vw;height: 0px;margin-left: 5vw;margin-bottom: 5vh;z-index:50;border-radius:5px;">

        <form style="float: left;" name="form1" method="post" action="passingdata.php">
            <div style="float: left;width: 40vw;" class="formFields" id="leftForm">
                <section id="formEntry" style="margin-left:20px;font-size:28px;color:#31e5c1;">
                    Please complete the form below
                </section>
                <label>Which platform are you reviewing? </label>
                <select name="platform" required>
                    <option value="Fiverr">Fiverr</option>
                    <option value="Upwork">Upwork</option>
                    <option value="AMT">AMT</option>

                </select>
                <label>What is your overall rating for this platform? </label>
                <select name = "rating" required>
                    <option value="1">I would prefer to use a better platform</option>
                    <option value="2">It is the best I have tried, but still bad</option>
                    <option value="3">It is okay, it could be better</option>
                    <option value="4">It is a good platform</option>
                    <option value="5">It is amazing, I will never leave</option>
                </select>
                <label>How would you rate the work/life balance? </label>
                <select>
                    <option value="1">I don't have much personal time, I have to work a lot</option>
                    <option value="2">I have some personal time, but working is priority</option>
                    <option value="3">I have enough time to get things done</option>
                    <option value="4">I have lots of freedom and don't have to worry</option>
                    <option value="5">I am very happy with my life and my work</option>

                </select>
                <label>How would you rate the benefits of working for this platform? </label>
                <select>
                    <option value="1">I haven't received any benefits</option>
                    <option value="2">They do offer things but they don't relate to me</option>
                    <option value="3">They offer a variety of benefits</option>
                    <option value="4">I have used the benefits they offer</option>
                    <option value="5">They add new benefits and I use them a lot</option>

                </select>
                <label>How secure do you feel that your job on this platform? </label>
                <select>
                    <option value="1">I am worried I might not get jobs/tasks</option>
                    <option value="2">It is hard to get jobs/task but I manage</option>
                    <option value="3">There is work available, but it isn't right for me</option>
                    <option value="4">There is lots of varied work available</option>
                    <option value="5">I do something different every day, it is great</option>

                </select>
                <label>How would you rate the support give to you by the platform? </label>
                <select>
                    <option value="1">I don't know how to contact them</option>
                    <option value="2">They never replied to my messages</option>
                    <option value="3">They never really helped me</option>
                    <option value="4">They tried to help me</option>
                    <option value="5">They always act on my feedback</option>

                </select>
                <label>How would you rate your relationship with the platform?</label>
                <select>
                    <option value="1">I don't know much about the platform</option>
                    <option value="2">The emails they send aren't related to me</option>
                    <option value="3">There is lots of information available</option>
                    <option value="4">The emails they send are helpful</option>
                    <option value="5">The emails they send have helped me be more productive</option>

                </select>
                <label>Are you a current or former employee of this platform?</label>
                <select>
                    <option value="current">I currently work here</option>
                    <option value="former">I am a former platform worker</option>

                </select>

                <label>What is your gender?</label>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>

                </select>
                <label>How would you describe the task/job variety and interest?</label>
                <select name="interest">
                    <option value="1">Very little to no variety/interest</option>
                    <option value="2">Some variety/interest</option>
                    <option value="3">Some variety but not much interest</option>
                    <option value="4">Some interest but not much variety</option>
                    <option value="5">Very high variety/interest</option>

                </select>


                <label>How many platforms do you generally use?</label>
                <input name="platforms" value="platforms" type="number" min="1" max="20">

                <label>How many hours, on average, does it take you to find/get a task/job?</label>
                <input name="period" value="period" type="number" min="1" max="500">

                <label>How old are you?</label>
                <input name="age" value="age" type="number" min="1" max="100">

            </div>
            <div style="float: left;padding-top:10px;width: 45vw;" class="formFields" id="rightForm">
                <label>How many hours on average do you work per day? </label>
                <input name="hours" value="hours" type="number" rows="1" cols="20"></>
                <label>On average, how much do you earn per hour? </label>
                <input name="wage" value="wage" type="number" rows="1" cols="20"></input>
                <label>Please tell us about your experience on this platform</label>
                <textarea name="review" rows="13" cols="50"></textarea>
                <label>What are you most happy about?</label>
                <textarea name="pros" rows="2" cols="50"></textarea>
                <label>What are you most unhappy about?</label>
                <textarea name="cons" rows="2" cols="50"></textarea>
            </div>
            <button id="formCancel" type="reset">Cancel</button>
            <!--<button style="float: right;clear: right;margin-right:50px;margin-top:50px;font-size:36px;float: right; clear: right; height: 80px; color: black; width: 200px; border: 1px darkgreen solid; background-color: #31e5c1; border-radius: 7px; margin-right: 50px; margin-top: 50px; font-size: 40px;cursor:pointer;" id="formSubmit" type="submit">Submit</button>-->
            <button id="formSubmit"  type="submit">Submit</button>

        </form><!--<button style="float: left;margin-left:50px;margin-top:10px;font-size:26px;border-radius: 4px; height: 50px; background-color: rgba(33,33,33,0.8); cursor: pointer; color: grey; border: 1px solid darkrgrey; float: left;" id="formCancel" type="cancel">Cancel</button>-->
    </div>
</div>

<!---JQUERY ANIMATION->

<!
    jQuery script, when the formButton element is clicked, the login and formCover
    divs are hidden and the form div is set to visible, letting users fill out
    the review form.
-->


<script>

    $(document).ready(function() {
        $("#formButton").click(function() {
            $("#form").animate({height: "90vh"});
            $("#form").toggleClass("ofOff");
            $("#form").toggleClass("ofOn");
            $("#backdrop").toggleClass("displayOn");
            $("#backdrop").toggleClass("displayOff");
            $("#login").hide();
            $("#formCover").toggleClass("formOpen");






        });
        $("#formCancel").click(function() {
            $("#form").animate({height: "0vh"});
            $("#form").toggleClass("ofOff");
            $("#form").toggleClass("ofOn");
            $("#backdrop").toggleClass("displayOn");
            $("#backdrop").toggleClass("displayOff");
            $("#login").show();
            $("#formCover").toggleClass("formOpen");

        });
    });

</script>

<!--END OF JQUERY-->



</body>


</html>