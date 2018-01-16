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
            padding: 10%;


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
            font-size: 28px;
        }






        /**
        The following section is the CSS for the 5 star rating system
         */



        .txt-center {
            text-align: center;
            background-color: beige;
            border-radius: 5px;
        }
        .hide {
            display: none;
        }

        .clear {
            float: none;
            clear: both;
        }

        .rating {
            background-color: brown;
            width: 90px;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            position: relative;
        }

        .rating > label {
            float: right;
            display: inline;
            padding: 0;
            margin: 0;
            position: relative;
            width: 1.1em;
            cursor: pointer;
            color: #000;
        }

        .rating > label:hover,
        .rating > label:hover ~ label,
        .rating > input.radio-btn:checked ~ label {
            color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > input.radio-btn:checked ~ label:before,
        .rating > input.radio-btn:checked ~ label:before {
            content: "\2605";
            position: absolute;
            left: 0;
            color: #FFD700;
        }


        label
        {
            display: block;
            padding: 2%;
            text-align: left;
            width: 1000px;
        }





    </style>



</head>
<body>

<div id="headerTopSpacer"></div>
<div id="headerLeftSpacer"></div>

<header>

    <section class="floatLeft hoverOff titlebox">FORM<br/>PAGE</section>

</header>


<div id="navigationLeftSpacer"></div>


<nav></nav>

<div id="mainLeftSpacer"><div id="mainLeftSpacer2"></div></div>
<div id="mainTopSpacer"></div>

<div id="loginForm">

    <form name="form1" method="post" action="passingdata.php">
        <div id="loginInfo">
            <p id="infoRequest"><strong>Please answer the following questions: </strong></p>

            <div class="txt-center">

                <form>
                    <label>What Worker Platform are you reviewing? </br> eg: Fiverr, Upwork,etc </label>
                    <div class="rating">
                        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                        <label for="star5" >☆</label>
                        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                        <label for="star4" >☆</label>
                        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                        <label for="star3" >☆</label>
                        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                        <label for="star2" >☆</label>
                        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                        <label for="star1" >☆</label>
                        <div class="clear"></div>
                    </div>
                </form>
                <form>
                    <label>What Worker Platform are you reviewing? </br> eg: Fiverr, Upwork,etc </label>
                    <div class="rating">
                        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                        <label for="star5" >☆</label>
                        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                        <label for="star4" >☆</label>
                        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                        <label for="star3" >☆</label>
                        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                        <label for="star2" >☆</label>
                        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                        <label for="star1" >☆</label>
                        <div class="clear"></div>
                    </div>
                </form>
                <form>
                    <label>What Worker Platform are you reviewing? </br> eg: Fiverr, Upwork,etc </label>
                    <div class="rating">
                        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                        <label for="star5" >☆</label>
                        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                        <label for="star4" >☆</label>
                        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                        <label for="star3" >☆</label>
                        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                        <label for="star2" >☆</label>
                        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                        <label for="star1" >☆</label>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>


            <button type="submit">Submit</button>

        </div>
    </form>
</div>

<footer></footer>

</body>
</html
