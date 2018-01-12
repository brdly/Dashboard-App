<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="">
    <meta charset="utf-8">
    <title>Admin Portal - Group 4</title>
    <meta name="description" content="Admin Portal for SPAT Task - Group 4.">

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
            color:white;
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

        .menuOn {
            background-color:rgb(24,187,156);
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

        #slider {
            float:left;
            width:calc(100vw - 260px);
            margin-left:20px;
            margin-top:10px;
            margin-bottom:10px;
            height:40px;
        }

        .floatRight {
            float:right!important;
        }

        .floatLeft {
            float:left!important;
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

        .hide { display:none;}
        .show { display:block;}

        footer {

        }

        .chart{
            overflow:hidden;
            cursor:pointer;
        }

        .chartBig {
            width:98%!important;
            height:auto!important;
        }

        .chartjs-size-monitor {
            position:relative!important;
        }

        .chartjs-render-monitor{
            width:100%!important;
            height:auto!important;
        }

    </style>

    <script>

    $( document ).ready(function() {

        $("#slider").dateRangeSlider();

        $( ".button" ).click(function() {
            $( this ).toggleClass( "menuOn" );
        });     

        $( ".chart" ).click(function() {
            var orig = this;
            var check = $( orig ).hasClass( "chartBig" );
            if(check === false) {
                $('.chart').each(function(index, obj){
                    if(orig.id !== obj.id) {$("#"+obj.id).insertAfter("#"+orig.id);}
                    $( "#"+obj.id ).removeClass( "chartBig" );
                });
                $( orig ).toggleClass( "chartBig" );
            }
        });

    })
    </script>

</head>
<body>

<div id="headerTopSpacer"></div>
<div id="headerLeftSpacer"></div>

<header>

    <section class="floatLeft hoverOff titlebox">ADMIN<br/>PORTAL</section>
    <section id="at" class="menuOn button">Amazon Turk</section>
    <section id="cf" class="button">CrowdFlower</section>
    <section id="cw" class="button">ClickWorker</section>
    <section id="cc" class="button">CloudCrowd</section>
    <section id="fv" class="button">Fiverr</section>

</header>

<div id="navigationLeftSpacer"></div>

<nav>

    <section class="button hoverOff"> </section>
    <section class="button menuOn">Overall Rating</section>
    <section class="button">Work/Life Balance</section>
    <section class="button">Worker Benefits</section>
    <section class="button">Job Security</section>
    <section class="button">Employee Status</section>
    <section class="button">Countries</section>
    <section class="button">Reviews</section>
    <section class="button">LOGOUT</section>

</nav>

<div id="mainLeftSpacer"><div id="mainLeftSpacer2"></div></div>
<div id="mainTopSpacer"></div>

<main>

    <div id="slider"></div>

    <section id="chartOne" class="chart chartBig"> <?php echo file_get_contents('doughnutMagic.php', true);  ?> </section>
    <section id="chartTwo" class="chart" > <?php include_once("lineMagic.php"); ?> </section>
    <section id="chartThree" class="chart"> <?php include_once("barMagic.php"); ?> </section>

</main>

<footer></footer>

</body>
</html>