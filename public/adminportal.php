<?php
    /* function checkLogin($username,$password,$hashed){
        if (htmlentities($username) == "adam"){
            if ($hashed){
                //$hashedpass =  password_hash("password",PASSWORD_BCRYPT);
                return password_verify("password",$password);
            }else{
                $password = htmlentities($password);
                return ($password == "password");
            }
        }
        return false;
    };
    function clearUser(){
        $_SESSION["Username"] = null;
        $_SESSION["Password"] = null;
        $_SESSION['login'] = "please log in";
        header("Location: index.php");
        die();
    }
    //Start the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //Logout code, use provided function with the logout button.
    if (isset($_POST["Logout"])){
        clearUser();
        $_SESSION['login'] = "please log in";
        header("Location: index.php");
        die();
    }

    if (isset($_POST["Username"]) && isset($_POST["Password"])){
        //clean and compare string.
        $password = htmlentities($_POST["Password"]);
        if (checkLogin(htmlentities($_POST["Username"]),$password,false)){
            //OK
            $_SESSION["Username"] = $_POST["Username"];
            $_SESSION["Password"] = password_hash($password,PASSWORD_BCRYPT);
            // save to session, needs clearing using logout.
         }else{
            //Fail.
            $_SESSION['login'] = "failed to log in";
            header("Location: index.php");
            die();
        }

    }else{
        $fail = true;
        if (isset($_SESSION["Username"]) && isset($_SESSION["Password"])){
            if (checkLogin($_SESSION["Username"],$_SESSION["Password"],true)){ //Session here is hashed.
                $fail = false;
            }
        }
        if ($fail){
            $_SESSION['login'] = "please log in";
            header("Location: index.php");
            die();
        }
        //header("Location: login&form/loginBasic.php");
        //exit();
    }

     */

?>
<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="">
    <meta charset="utf-8">
    <title>Admin Portal - Group 4</title>
    <meta name="description" content="Admin Portal for SPAT Task - Group 4.">

    <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="http://d3js.org/topojson.v1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=BenchNine:700" rel="stylesheet">
    <link href="build/css/jqcloud.css" rel="stylesheet">
    <link href="build/js/slider/demo/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://datamaps.github.io/scripts/datamaps.world.min.js?v=1"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <script src="build/js/slider/jQDateRangeSlider-min.js"></script>
    <script src="build/js/jqcloud-1.0.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <style>

        
        body {
            font-weight: 100;
            height: 100vh;
            width: 100vw;
             /*background-image: url(build/img/images7.jpg);
            background-size: auto auto;
            background-position: bottom right;
            background-repeat: no-repeat;
            background-color: white; */
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                    user-select: none; /* Non-prefixed version, currently
                                        supported by Chrome and Opera */
            margin: 0;
            padding: 0;
            color: white;
            font-family: 'BenchNine', sans-serif;
            font-size: 16px;
            text-align: center;
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
            height: 50px;
            min-width: 100px;
            width: auto;
            padding-left: 30px;
            padding-right: 10px;
            margin-right: 20px;
            cursor: pointer;
            margin-top: 10px;
            line-height: 50px;
            border-radius: 3px;
            font-size: 28px;
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
            height: 30px;
            width: 158px;
            margin-left: 6px;
            margin-bottom: 4px;
            line-height: 30px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 22px;
            border-bottom: 1px solid rgba(24,187,156,0.3);
        }

        nav > section:hover {
            background-color:rgba(24,187,156,0.5);
            border-bottom: 1px solid transparent;
        }

        .menuOn {
            background-color:rgb(24,187,156);
        }

        main {
            float:left;
            width:calc(100vw - 190px);
            height:calc(100vh - 71px);
            overflow:auto;
        }
        
        main > section {
            float:left;
            width:360px;
            height:200px;
            margin:10px;
            line-height:250px;
        }
        
        footer {    
            position: absolute;
            bottom: 10px;
            left: 0px;
            height: 50px;
            text-align: center;
            width: 180px;
        }

        footer > img {
            height:30px;
            padding:10px;
            cursor:pointer;
        }

        .ui-rangeSlider-label {
            padding: 0px 5px;
            bottom: 50px;
            min-width:80px!important;
        }.ui-rangeSlider-label-value{
            min-width:80px!important;
        }
        .ui-rangeSlider-leftLabel{
            min-width:80px!important;
        }

        #slider {
            float:left;
            width:calc(100vw - 400px);
            margin-left:80px;
            margin-bottom:10px;
            height:45px;
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
            padding-left: 10px;
            margin-left: 25px;
            background-image: url(build/img/ilo.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
            font-size: 20px;
            margin-top: 8px;
            color: rgb(24,187,156);
            line-height: 112px;
            color:rgb(24,187,156);
        }
        }

        .hide { display:none!important;}
        .show { display:block!important;}

        footer {

        }

        .chartHalf {
            float:left!important;
            width:40%!important;
        }
        .chartDar {
            float:left!important;
            width:45%!important;
        }
        .chart{
            float:left;
            overflow:hidden;
            cursor:pointer;
            width:44%;
            margin-left:3%;
            margin-bottom:40px;
            height:auto;
            min-width:320px;
            min-height:200px;
        }

        .chartBig {
            margin-left:10%;
            width:80%!important;
            height:auto!important;
        }

        .chartjs-size-monitor {
            position:relative!important;
        }

        .chartjs-render-monitor{
            width:100%!important;
            height:auto!important;
        }

        .min{
            border-bottom: 1px solid transparent!important;
            height:20px;
        }

        #Upwork {
            background-image: url(build/img/upwork.png);
            background-repeat: no-repeat;
            background-size: 35px auto;
            background-position: 5px center;
        }

        #Fiverr {
            background-image: url(build/img/fiverr.png);
            background-repeat: no-repeat;
            background-size: 35px auto;
            background-position: 10px center;
            padding-right:0px;
        }

        #AmazonMechanicalTurk {
            background-image: url(build/img/amt.png);
            background-repeat: no-repeat;
            background-size: 45px auto;
            background-position: 10px 5px;
            padding-right:5px;
        }

        #helpTips{
            display:none;
            position: fixed;
            bottom: 0px;
            right: 0;
            width: calc(100vw - 179px);
            height: 24px;
            font-size: 20px;
            line-height: 24px;
            background-color: rgb(45,62,80);
            border-top: 1px rgb(24,187,156) solid;
            color: white;
        }

        .helpOn {
            background-color: rgb(24,187,156);
            border-radius: 12px;
        }

        

        #chartStackGroup{
                width:70vw;
                height:auto;
            }

        @media screen and (max-width: 320px) {
            nav {
                display:none;
            }
            #mainLeftSpacer2{
                display:none;
            }

            #AmazonMechanicalTurk {
                background-image: url(build/img/amt.png);
                background-repeat: no-repeat;
                background-size: 20px auto;
                background-position: 5px 9px;
                padding-right: 5px;
            }

            .titlebox {
                padding-left: 0px;
                margin-left: 0px;
                background-image: url(build/img/menu.png);
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                font-size: 20px;
                margin-top: 13px;
                color: rgb(24,187,156);
                line-height: 150px;
                overflow:hidden;
                cursor:pointer;
                color: rgb(24,187,156);
            }

            #Upwork {
                background-image: url(build/img/upwork.png);
                background-repeat: no-repeat;
                background-size: 20px auto;
                background-position: 2px center;
            }

            #Fiverr {
                background-image: url(build/img/fiverr.png);
                background-repeat: no-repeat;
                background-size: 20px auto;
                background-position: 4px center;
                padding-right: 0px;
            }

            header > section {
                margin: 0px;
                padding: 4px;
                height: 22px;
                margin-right: 3px;
                min-width:50px;
                width: 80px;
                line-height: 22px;
                font-size: 18px;
            }

            .min{
                height:5px;
            }

            main {
                float: left;
                width: calc(100vw - 20px);
                height: calc(100vh - 71px);
                overflow: auto;
            }
            #slider {
                float: left;
                width: calc(100vw - 30px);
                margin-left: 5px;
                margin-bottom: 2px;
                height: 40px;
            }
        }

    </style>

<script>

    
function Submit(path, params, method) {
            method = method || "post";
            var form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", path);

            for(var key in params) {
                if(params.hasOwnProperty(key)) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);

                    form.appendChild(hiddenField);
                }
            }

            document.body.appendChild(form);
            form.submit();
        }
        function clearUser(){
            Submit("adminportal.php",{Logout: 1})
        }

    $( document ).ready(function() {

        $(document).on('click', '.titlebox', function () {
            $("nav").animate({width:'toggle'},400);
        });


        $( "#helper" ).click(function() {
            $( this ).toggleClass( "helpOn" );
            if($( this ).hasClass( "helpOn" )) {
                $( "#helpTips" ).show("slow");
                $( "#helpTips" ).slideDown();
            } else {
                $( "#helpTips" ).html("");
                $( "#helpTips" ).hide("slow");
                $( "#helpTips" ).slideUp();
            }
        })

        function loadHelperTips(content) {
            if($( "#helper" ).hasClass( "helpOn" )) {
                if(content.textContent === "Rating") {
                    $( "#helpTips" ).html("Rating: Overall rating voted by the the users for the platform(s)");
                } else if(content.textContent === "Worklife Balance") {
                    $( "#helpTips" ).html("Worklife Balance: How easy the worker finds it to separate their life from their work");
                } else if(content.textContent === "Benefits") {
                    $( "#helpTips" ).html("Benefits: The benefits felt by the worker in this job role");
                } else if(content.textContent === "Job Security") {
                    $( "#helpTips" ).html("Job Security: How secure the worker feels in this job and it's future");
                } else if(content.textContent === "Support") {
                    $( "#helpTips" ).html("Support: The support structure accessible to the worker");
                } else if(content.textContent === "Relationship") {
                    $( "#helpTips" ).html("Relationship: The relations between the worker and the platform they use");
                } else if(content.textContent === "Status") {
                    $( "#helpTips" ).html("Status: Whether the worker is a currently working for this platform or not");
                } else if(content.textContent === "Countries") {
                    $( "#helpTips" ).html("World Map: Country where the worker resides");
                } else if(content.textContent === "Timeline") {
                    $( "#helpTips" ).html("Timeline Chart: Overall platform rating over a specific time period");
                } else if(content.textContent === "Sentiment") {
                    $( "#helpTips" ).html("Sentiment Bubble: Words most frequently used in reviews of a platform");
                } else if(content.textContent === "Wage") {
                    $( "#helpTips" ).html("Wage Chart: The wage (in dollars) a worker gets on average from their platform");
                } else if(content.textContent === "Hours") {
                    $( "#helpTips" ).html("Hours Chart: The amount of hours a worker will generally spend per day on the platform");
                } else if(content.textContent === "Platforms") {
                    $( "#helpTips" ).html("Platforms Chart: ");
                }else if(content.textContent === "Period") {
                    $( "#helpTips" ).html("Period Chart: ");
                }else if(content.textContent === "Age") {
                    $( "#helpTips" ).html("Age Chart: ");
                }else if(content.textContent === "Gender") {
                    $( "#helpTips" ).html("Gender Chart: ");
                }else if(content.textContent === "Interest") {
                    $( "#helpTips" ).html("Interest Chart: ");
                }
            }
        }

        var allData;
        var selectedData = []; //for chosen platforms, auto-update the data on a timer
        //selectedData is all the data from the DB for the chosen platforms
        var selectedOpts = []; //if the above updates, reload the selected opts for all chosen platforms
        //selectedOpts is what the charts should pull their data from
        var resultsArray = []; //once above completes an update, rerun the loadchartdata function
        //contains calculated chart data, like overall ratings for worklife balance etc
        var oldestDate;
        var newestDate;
        var option;
        var platform;
        var min;
        var max;
        var generatedWords = [];
        var seriesDates = [];
        var menuAction = "disable";

        function SortByDate(){
            seriesDates.sort(function(a,b){
                var da = new Date(a).getTime();
                var db = new Date(b).getTime();
                
                return da < db ? -1 : da > db ? 1 : 0
              });
        }

        $("#slider").bind("valuesChanged", function(e, data){
            min = data.values.min;
            max = data.values.max;
            loadChartData(selectedOpts);
            createWordBubble("wordBubble","wordBubble",generatedWords);
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

        $.getJSON('data.json', function(data) {  

            allData = data;

            $( "header" ).append( '<section id="'+data.app_name.replace(/ /g, '')+'" class="floatLeft hoverOff titlebox">'+data.app_name+'</section>' );
            
            $.each(data.platforms, function (index, value) {
                if(value === "Amazon Mechanical Turk") {
                    $( "header" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button">AMT</section>' );
                } else {
                    $( "header" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button">'+value+'</section>' );
                }
            });

            $.each(data.form_fields, function (index, value) {
                if(value === "Former Employee") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Status</section>' );
                } else if(value === "Review") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Sentiment</section>' );
                } else if(value === "Management") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Support</section>' );
                }  else if(value === "Culture") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Relationship</section>' );
                } else if(value === "Pros") {
                    //e
                } else if(value === "Date") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Timeline</section>' );
                } else if(value === "Location") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Countries</section>' );
                } else if(value === "Cons") {
                    
                }else {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">'+value+'</section>' );
                }
            });
            //$.each(data.platforms, function (index, name) {
            //    var meep = data[name];
            //})

            $( ".button" ).click(function() {
                $( this ).toggleClass( "menuOn" );

                if($( this ).hasClass( "menuOn" )) {
                    menuAction = "enable";
                    createWordBubble("wordBubble","wordBubble",generatedWords);
                } else { 
                    var counter = 0;
                    $( ".button" ).each(function( index, data ) {
                        if(data.className.indexOf("menuOn") != -1)
                        counter++;
                    });
                    if(counter <= 0) { 
                        $( ".button2" ).each(function( index, data ) {
                            $( this ).removeClass( "menuOn" );
                        })
                        generatedWords = [];
                        $("#mapbar").css('display','none'); mapMade=false; $("#container1").html('<div id="mapbar" style="display:none"><img src="build/img/mapbar.png" /></div>');
                    } else if(counter <= 1) {  $("#chartRatingShare".replace(/ /g, '')).remove(); } {
                        createWordBubble("wordBubble","wordBubble",generatedWords);
                    }
                    menuAction = "disable"; 
                };

                //if last button turned off, need to reset options links to off also, basically resets the forms
                //because at least one platform needs to be turned on for data to load from it

                platform = this.title;
                var data = allData[platform];

                if(menuAction == "enable") { 
                    var newArr = [platform];
                    newArr.push(data);
                    selectedData.push(newArr);
                    //need to re-run the option loader for this new platform 
                    //-eg, may need to run for multiple opts but only for this platform
                    if(selectedOpts.length>0 && selectedData.length>0 ) {
                            var forPlatform = platform;
                            $.each(selectedData, function (index, platform_data) {
                                if(platform_data[0] == forPlatform) {
                                        $.each(selectedOpts, function (i, option) {
                                            var newArr1 = [];
                                            newArr1.push(platform_data[0],option[1]);
                                            $.each(platform_data[1], function (index, value) {
                                                var newArr2 = [];
                                                if(option[1] === "Former Employee" || option[1] === "Date") {
                                                    newArr2.push(index, value["Rating"],value["Date"],value["Former Employee"]);
                                                } else {
                                                    newArr2.push(index, value[option[1]],value["Date"],value["Former Employee"]);
                                                }
                                                newArr1.push(newArr2);
                                            })
                                            var isDuplicate = false;
                                            $.each(selectedOpts,function (i, element) {
                                                if (JSON.stringify(element) === JSON.stringify(newArr1)) {
                                                    isDuplicate = true;
                                                    return false;
                                                }
                                            });
                                        if(isDuplicate === false) selectedOpts.push(newArr1);
                                        })
                                }
                            })
                            loadChartData(selectedOpts);
                        } else { 
                            //please choose a platform 
                        }
                 } else {
                    $.each(selectedData, function (index, value) {
                        try{
                            if(value[0] == platform) { 
                                selectedData.splice( index, 1 );
                                //need to re-run the option unloader for this platform 
                                //-eg, may need to remove multiple opts for this platform from the dataset
                                    for(var i = 0; i < selectedOpts.length; i++) {
                                        if(selectedOpts[i][0] === platform) {
                                            selectedOpts.splice( i, 1 );
                                            i--;
                                        }
                                    }
                                    if(selectedOpts.length === 0) { $("#charts").html(""); } else {
                                    loadChartData(selectedOpts);}
                            }
                        } catch(e) {
                            //no platforms selected
                        }
                    })
                    oldestDate = null;
                    newestDate = null;
                }

                var count = selectedData.length;

                $.each(selectedData, function (index, platform_data) {
                    $.each(platform_data[1], function (index, value) {
                        try { 
                            var dt = new Date(value.Date);  
                            if(!oldestDate || oldestDate > dt) oldestDate = dt;
                            if(!newestDate || newestDate < dt) newestDate = dt;
                        }catch(e) {
                            //not a date
                        }
                    })
                })

                $("#slider").dateRangeSlider({
                    bounds:{
                        min: oldestDate,
                        max: newestDate
                    },
                    defaultValues:{
                            min:  oldestDate,
                            max: newestDate
                        }
                    });
                    min = oldestDate;
                    max = newestDate;
                    loadTimeBar();
                });

                function loadTimeBar() {
                    if(menuAction == "disable") { 
                        //need to check if all platforms disabled - hide time bar
                        var count = 0;
                        $('.button').each(function(index, obj){
                            if($( obj ).hasClass( "menuOn" )) count++;;
                        });
                        if(count === 0) { 
                            $( "#slider" ).addClass( "hide" ); 
                            $("#slider").dateRangeSlider("destroy");
                        }
                    } else {
                        $("#slider").dateRangeSlider(); 
                        $( "#slider" ).removeClass( "hide" );
                    }
                }

                $( ".button2" ).click(function() { 

                    loadHelperTips(this);
                    
                    var counter = 0;
                    $( ".button" ).each(function( index, data ) {
                        if(data.className.indexOf("menuOn") != -1)
                        counter++;
                    });
                    if(counter >= 1) {

                        $( this ).toggleClass( "menuOn" );
                        option = this.title;

                        if($( this ).hasClass( "menuOn" )) {
                            menuAction = "enable";
                        } else { menuAction = "disable"; };

                        if(menuAction == "enable") { 
                            var wordArrayOpts = []
                            if(selectedData) {
                                $.each(selectedData, function (index, platform_data) {
                                    var newArr1 = [];
                                    newArr1.push(platform_data[0],option);
                                    wordArrayOpts.push(platform_data[0],option);
                                    $.each(platform_data[1], function (index, value) {
                                        var newArr2 = [];
                                           if(option === "Location") {  createMap(); } 
                                        if(option === "Pros" || option === "Cons" || option === "Review") {     
                                                var dt = new Date(value.Date); 
                                                try{generatedWords.push({text: value.Pros["0"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Pros["1"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Pros["2"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Pros["3"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Pros["4"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Cons["0"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Cons["1"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Cons["2"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Cons["3"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Cons["4"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Review, weight: 0, date: dt});}catch(e){}
                                        }
                                        if(option === "Former Employee" || option === "Date") { 
                                            newArr2.push(index, value["Rating"],value["Date"],value["Former Employee"]);
                                        } else {
                                            newArr2.push(index, value[option],value["Date"],value["Former Employee"]);
                                        }
                                        newArr1.push(newArr2);
                                    })
                                        selectedOpts.push(newArr1);
                                })
                                createWordBubble("wordBubble","wordBubble",generatedWords);
                            } else { 
                                 //please choose a platform 
                            }
                        } else {
                            if(option === "Location") { $("#mapbar").css('display','none'); mapMade=false; $("#container1").html('<div id="mapbar" style="display:none"><img src="build/img/mapbar.png" /></div>'); }
                            if(option === "Review") { $("#bubblewordBubble").remove(); generatedWords=[]; }
                            if(option === "Date") {  $("#chartTime"+option.replace(/ /g, '')).remove(); }
                            if(selectedOpts) {
                                try{
                                    for(var i = 0; i < selectedOpts.length; i++) {
                                        if(selectedOpts[i][1] === option) {
                                            selectedOpts.splice( i, 1 );
                                            try{
                                                $("#chart"+option+"Share".replace(/ /g, '')).remove();
                                            } catch(e) {}
                                            $("#chart"+option.replace(/ /g, '')).remove();
                                            i--;
                                        }
                                    }
                                }catch(e) { 
                                    //please choose an option
                                }
                            }
                        }
                    
                    } else {
                        alert("please choose a platform first");
                    }
                    loadChartData(selectedOpts);
                 }); 
        });

        function createWordBubble(platform, positivity, wordlist) {
            
            $("#bubblewordBubble").remove();
            if(wordlist.length !== 0) {
                var timeStart = min;
                var timeEnd = max;
                //
                
                var newWordWeightedArray = [];
                var newWordArray = [];
                $.each(wordlist, function (index, sentence) {
                    if(sentence.date >= timeStart && sentence.date <= timeEnd) {
                        try{
                            var split = sentence.text.split(" ");
                            $.each(split, function (index, word) {
                                var meep = word.replace(/[^a-zA-Z ]/g, "");
                                newWordArray.push(meep);
                            })
                        }catch(e){} 
                    }
                })
                $.each(newWordArray, function (index, word) {
                    if("theofandtoainforisonthatbythiswithiyouitnotorbearefromatasyourallhavenewit'stoomakehowyet".indexOf(word) === -1) {
                        if(word.length < 3) {} else {
                            var meep = 0;
                            if(newWordWeightedArray.length === 0) { 

                                newWordWeightedArray.push({text: word.toLowerCase(), weight: 1}); 

                            } else {
                                
                                for(var i = 0, len = newWordWeightedArray.length; i < len; i++) {
                                    
                                    if (newWordWeightedArray[i]['text'] === word.toLowerCase()) { 
                                        newWordWeightedArray[i].weight = newWordWeightedArray[i].weight + 1;
                                        meep++;
                                    } 
                                    
                                }
                                if(meep === 0 ) {
                                    newWordWeightedArray.push({text: word.toLowerCase(), weight: 1});
                                }
                            }
                        }
                    }
                })
                if(newWordWeightedArray.length !== 0) { 
                    $("#bubbleWord"+positivity).remove();
                    $("#charts").append(' <div id="bubble'+positivity+'" style="float:left;width: calc(100vw - 350px); height: 300px;margin-left:50px; border: 0px solid #ccc;" ></div> ');
                    $("#bubble"+positivity).jQCloud(newWordWeightedArray);
                }
            }
        }

        function loadChartData(selectedOpts) {
            seriesDates = [];
            resultsArray = [];
            var timeStart = min;
            var timeEnd = max;
            for(var i = 0; i < selectedOpts.length; i++) {
                
                var platformName = selectedOpts[i]["0"];
                var dataType = selectedOpts[i]["1"];
                var total = 0;
                var minInt = 100;
                var maxInt = 0;
                var former = 0;
                var current = 0;
                var count = 0;
                var countF = 0;
                var countC = 0;
                var prevDate;
                var seriesData = [];
                var push = false;
                var first = 0;
                var second = 0;
                var third = 0;
                var fourth = 0;

                if(dataType === "Rating" || dataType === "Date" || dataType === "Platforms" || dataType === "Period" || dataType === "Age" || dataType === "Interest" || dataType === "Worklife Balance" || dataType === "Wage" || dataType === "Hours" || dataType === "Benefits" || dataType === "Job Security" || dataType === "Management" || dataType === "Culture") {
                    $.each(selectedOpts[i], function (index, numbers) {
                        var incomingNumber = parseInt(numbers[1]);
                        if( incomingNumber % 1 === 0 ) {
                            seriesData.push(incomingNumber);
                            var resultDate = new Date(numbers[2]);
                            if(!!prevDate && dataType === "Rating") {
                                if(prevDate > resultDate) {
                                    seriesData.push(null);
                                }
                            }
                            
                            prevDate = new Date(numbers[2]);
                            if(resultDate >= timeStart && resultDate <= timeEnd) {
                                push = true;
                                seriesDates.push(resultDate.toLocaleDateString("en-US"));
                                if(dataType === "Age") {
                                    if(incomingNumber < 21) {
                                        first++;
                                    } else if(incomingNumber > 20 && incomingNumber < 41) {
                                        second++;
                                      }  else    if(incomingNumber > 60) {
                                        fourth++;
                                    } else { third++; }
                                } else {
                                    if(incomingNumber >= maxInt) { maxInt = incomingNumber;}
                                    if(incomingNumber <= minInt) { minInt = incomingNumber;}
                                    total = total + incomingNumber;
                                }
                                count++;
                            }
                        }
                    })
                    if(push === true) {
                        if(dataType === "Age") {
                            resultsArray.push({platformName,dataType,first,second,third,fourth,seriesData,seriesDates});
                        } else {
                            var result = parseFloat(Math.round(total/count * 100) / 100).toFixed(2);
                            resultsArray.push({platformName,dataType,maxInt,minInt,result,total,seriesData,seriesDates});
                        }
                        push = false;
                    }
                }

                
                if(dataType === "Gender") {
                        var male = 0;
                        var female = 0;
                        var other = 0;
                    $.each(selectedOpts[i], function (index, numbers) {
                        var incomingNumber = numbers[1];
                            var resultDate = new Date(numbers[2]);
                            if(resultDate >= timeStart && resultDate <= timeEnd) {
                                if( incomingNumber === "Male" ) {
                                    male++;
                                    } else if( incomingNumber === "Female" ) { 
                                        female++;
                                    } else {
                                        other++;
                                    }
                        }
                    })
                        var result = parseFloat(Math.round(total/count * 100) / 100).toFixed(2);
                        resultsArray.push({platformName,dataType,male,female,other});
                }
                
                if(dataType === "Former Employee") {
                    $.each(selectedOpts[i], function (index, numbers) {
                        var incomingNumber = parseInt(numbers[1]);
                        if( incomingNumber ) {
                            var resultDate = new Date(numbers[2]);
                            if(resultDate >= timeStart && resultDate <= timeEnd) {
                                if(incomingNumber >= maxInt) { maxInt = incomingNumber;}
                                if(incomingNumber <= minInt) { minInt = incomingNumber;}
                                total = total + incomingNumber;
                                count++;
                                if(numbers[3] === "Current ") {
                                    current = current + incomingNumber;
                                    countC++;
                                } else {
                                    former = former + incomingNumber;
                                    countF++;
                                }
                            }
                        }
                    })
                        var result = parseFloat(Math.round(total/count * 100) / 100).toFixed(2);
                        var formerRating = parseFloat(Math.round(former/countF * 100) / 100).toFixed(2);
                        var currentRating = parseFloat(Math.round(current/countC * 100) / 100).toFixed(2);
                        if(!isNaN(formerRating)) {
                            resultsArray.push({platformName,dataType,currentRating,formerRating,result});
                        }
                }

            }
            setTimeout(function(){
                loadBarChart(resultsArray);
             }, 280);
        }

        function loadBarChart(resultsArray) {
            //$("#charts").html("");
            var labelGender=[];
            var generatedGraphLabel1 = [];var generatedGraphLabel1x = [];var generatedGraphLabel1y = [];var generatedGraphLabel2 = [];var generatedGraphLabel3 = [];var generatedGraphLabel4 = [];
            var generatedGraphLabel5 = [];var generatedGraphLabel6 = [];var generatedGraphLabel7 = [];var generatedGraphLabel8 = [];var generatedGraphLabel9 = [];var generatedGraphLabel10 = [];var generatedGraphLabel15 = [];
            var generatedRadarLabel1 = [];var generatedRadarLabel2 = []; var generatedGraphLabel11 = [];var generatedGraphLabel12 = [];var generatedGraphLabel13 = [];var generatedGraphLabel14 = [];var generatedGraphLabel16 = [];
            var generatedRadarLabel3 = [];var generatedStatusLabel15 = [];var generatedStackLabel16 = [];var generatedGraphLabel17 = [];var generatedGraphLabel18 = [];var generatedGraphLabel19 = [];

            var produceRatingChart = false;var produceBalanceChart = false;var produceRadarChart = false;var produceBenefitsChart = false;var produceShareChart = false;var produceRatingTimeChart = false;
            var produceSecurityChart = false;var produceManagementChart = false;var produceCultureChart = false;var produceStatusChart = false;var produceStackChart = false;var producePlatformsChart = false;
            var produceHoursChart = false;var produceWageChart = false;var produceInterestChart = false;var produceGenderChart = false;var produceAgeChart = false;var producePeriodChart = false;

            var generatedBarLabel1 = "";var generatedBarLabel1x = "";var generatedBarLabel1y = "";var generatedBarLabel2 = "";var generatedBarLabel3 = "";var generatedBarLabel4 = "";var generatedBarLabel5 = "";
            var generatedBarLabel6 = "";var generatedBarLabel7 = "";var generatedBarLabel8 = "";var generatedBarLabel9 = ""; var generatedBarLabel10 = "";var generatedBarLabel11 = "";var generatedBarLabel12 = "";
            var generatedBarLabel13 = "";var generatedBarLabel14 = "";var generatedBarLabel15 = "";var generatedBarLabel16 = "";var generatedBarLabel17 = "";var generatedBarLabel18 = "";var generatedBarLabel19 = "";

            var generatedRadarXLabel1 = []; var generatedRadarXPlats1 = []; var generatedRadarXLabel2 = ""; var generatedRadarXVals1 = [];
            var generatedRadarXLabel3 = "";var generatedStatusXLabel1 = "";var generatedStackXLabel1 = [];

            var generatedData1 = [];var generatedData1x = [];var generatedData1y = [];var generatedData2 = [];var generatedData3 = [];var generatedData4 = [];var generatedData5 = [];var generatedData6 = [];
            var generatedData77 = [];var generatedData8 = [];var generatedData9 = [];var generatedData10 = [];var generatedData11 = [];var generatedData12 = [];var generatedData13 = [];var generatedData14 = [];
            var generatedData15 = [];var generatedData16 = [];var generatedData17 = [];var generatedData18 = [];var generatedData19 = [];var generatedData20 = [];var generatedData7 = [];

            var currentChart = "";
            var nameShare = [];
            var itemShare = [];
            var colourArray2 = [ 'red','green','blue']
            var colourArray = [
                'rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)',
                'rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)',
                'rgba(45,62,80,.7)','rgba(24,187,156,.7)','rgba(164,168,183,.7)',
                'rgba(55,72,90,.8)','rgba(34,197,166,.8)','rgba(174,178,193,.8)',
                'rgba(65,82,100,.7)','rgba(44,207,176,.7)','rgba(184,188,203,.7)',
                'rgba(85,92,110,.6)','rgba(54,217,186,.6)','rgba(194,198,213,.6)',
                'rgba(95,102,120,.8)','rgba(64,227,196,.8)','rgba(204,208,223,.8)',
                'rgba(105,112,130,.9)','rgba(74,237,206,.9)','rgba(214,218,233,.9)',
                'rgba(115,122,140,.7)','rgba(84,247,216,.7)','rgba(224,228,243,.7)',
                'rgba(95,102,120,.8)','rgba(64,227,196,.8)','rgba(204,208,223,.8)',
                'rgba(105,112,130,.9)','rgba(74,237,206,.9)','rgba(214,218,233,.9)',
                'rgba(115,122,140,.7)','rgba(84,247,216,.7)','rgba(224,228,243,.7)',
                'rgba(45,62,80,.7)','rgba(24,187,156,.7)','rgba(164,168,183,.7)',
                'rgba(55,72,90,.8)','rgba(34,197,166,.8)','rgba(174,178,193,.8)',
                'rgba(65,82,100,.7)','rgba(44,207,176,.7)','rgba(184,188,203,.7)'
                ];

            var i = 0;
            var q = 0;
            var n = 0;
            var t = 0;
            var radarCounter = 0;
            var stackedCounter = 0;

            $( ".button2" ).each(function( index, data ) {
                if(data.id === "WorklifeBalance" && data.className === "button2 menuOn" ||
                data.id === "Culture" && data.className === "button2 menuOn" ||
                data.id === "Management" && data.className === "button2 menuOn" ||
                data.id === "JobSecurity" && data.className === "button2 menuOn" ||
                data.id === "Benefits" && data.className === "button2 menuOn" ||
                data.id === "Interest" && data.className === "button2 menuOn" ) {
                    radarCounter++;
                }
                if(data.id === "Wage" && data.className === "button2 menuOn" ||
                data.id === "Hours" && data.className === "button2 menuOn" ||
                data.id === "Period" && data.className === "button2 menuOn" ) {
                    stackedCounter++;
                }

            })

            $.each(resultsArray, function (index, item) {
                if(item.dataType === "Rating") {
                    n++;
                }
            })

            

            var cc = 0;
            var sc = 0;
            var upworkStack = [];
            var awtStack = [];
            var fiverrStack = [];
            var adjWage = [];
            var stackOrder = [];
            
            var stackOne;
                var stackTwo;
                var stackThree;
                var stackFour;

            $.each(resultsArray, function (index, item) {

                if(item.dataType === "Rating") {
                    generatedGraphLabel1.push(item.result);
                    generatedBarLabel1 = item.dataType;
                    
                    
                    generatedData1.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    produceRatingChart = true;
                }

                if(item.dataType === "Hours" && stackedCounter <= 2) {
                    generatedGraphLabel1x.push(item.result);
                    generatedBarLabel1x = item.dataType;
                    
                    
                    generatedData1x.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    produceHoursChart = true;
                } else {
                    try{$("#chart"+item.dataType).remove();}catch(e){}
                }

                if(item.dataType === "Platforms") {
                    generatedGraphLabel15.push(item.result);
                    generatedBarLabel15 = item.dataType;
                    
                    
                    generatedData15.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    producePlatformsChart = true;
                }

                if(item.dataType === "Period" && stackedCounter <= 2) {
                    generatedGraphLabel16.push(item.result);
                    generatedBarLabel16 = item.dataType;
                    
                    
                    generatedData16.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    producePeriodChart = true;
                } else {
                    try{$("#chart"+item.dataType).remove();}catch(e){}
                }

                if(item.dataType === "Age") {
                    generatedGraphLabel17.push(item.dataType);
                    generatedBarLabel17 = item.dataType;
                    
                    
                    generatedData17.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.first,item.second,item.third,item.fourth]
                    })

                    produceAgeChart = true;
                }

                if(item.dataType === "Interest" && radarCounter <= 2) {
                    generatedGraphLabel18.push(item.result);
                    generatedBarLabel18 = item.dataType;
                    
                    
                    generatedData18.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    produceInterestChart = true;
                }

                if(item.dataType === "Wage" && stackedCounter <= 2) {
                    generatedGraphLabel1y.push(item.result);
                    generatedBarLabel1y = item.dataType;
                    
                    
                    generatedData1y.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })

                    produceWageChart = true;
                } else {
                    try{$("#chart"+item.dataType).remove();}catch(e){}
                }

                if(item.dataType === "Date") {
                    generatedGraphLabel9.push(item.result);
                    generatedBarLabel9 = item.dataType;
                    
                    
                    generatedData10.push ({
                        label:item.platformName,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderColor:colourArray[i],
                        spanGaps: true,
                        borderWidth: 3,
                        type: 'line',
                        data: item.seriesData.reverse()
                    })

                    produceRatingTimeChart = true;
                }

                if(item.dataType === "Worklife Balance" && radarCounter <= 2) {
                    generatedGraphLabel2.push(item.result);
                    generatedBarLabel2 = item.dataType;
                    
                    generatedData2.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })
                    produceBalanceChart = true;
                }

                

                if(item.dataType === "Benefits" && radarCounter <= 2) {
                    generatedGraphLabel3.push(item.result);
                    generatedBarLabel3 = item.dataType;
                    
                    generatedData3.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })
                    produceBenefitsChart = true;
                }

                

                if(item.dataType === "Job Security" && radarCounter <= 2) {
                    generatedGraphLabel4.push(item.result);
                    generatedBarLabel4 = item.dataType;
                    
                    generatedData4.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })
                    produceSecurityChart = true;
                }

                

                if(item.dataType === "Management" && radarCounter <= 2) {
                    generatedGraphLabel5.push(item.result);
                    generatedBarLabel5 = "Support";
                    
                    generatedData5.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })
                    produceManagementChart = true;
                }
                

                

                if(item.dataType === "Culture" && radarCounter <= 2) {
                    generatedGraphLabel6.push(item.result);
                    generatedBarLabel6 = "Relationship";
                    
                    generatedData6.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.maxInt,item.minInt,item.result]
                    })
                    produceCultureChart = true;
                }

                

                if(item.dataType === "Former Employee") {
                    generatedGraphLabel7.push(item.result);
                    generatedBarLabel7 = item.dataType;
                    
                    generatedData77.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.currentRating,item.formerRating,item.result]
                    })
                    produceStatusChart = true;
                }


                if(stackedCounter > 2) {
                    
                    //group hours vs period and wage minus the period
                    if(item.dataType === "Wage" || item.dataType === "Hours" || item.dataType === "Period" ) {
                        if(generatedStackLabel16.indexOf(item.platformName) === -1) {
                            generatedStackLabel16.push(item.platformName);
                        }
                        if(generatedStackXLabel1.indexOf(item.dataType) === -1) {
                            generatedStackXLabel1.push(item.dataType);
                        }

                        if(item.platformName === "Fiverr" && item.dataType === "Wage" || item.platformName === "Fiverr" && item.dataType === "Hours" || item.platformName === "Fiverr" && item.dataType === "Period") {
                            if(fiverrStack.indexOf(item.platformName) === -1) {
                                fiverrStack.push(item.platformName);
                            }
                            if(item.dataType === "Period") {
                                var meep = 0 - item.result;
                                fiverrStack.push(meep);
                            } else { fiverrStack.push(item.result); }
                            
                        } else if(item.platformName === "Amazon Mechanical Turk" && item.dataType === "Wage" || item.platformName === "Amazon Mechanical Turk" && item.dataType === "Hours" || item.platformName === "Amazon Mechanical Turk" && item.dataType === "Period") {
                            if(awtStack.indexOf(item.platformName) === -1) {
                                awtStack.push(item.platformName);
                            }
                            if(item.dataType === "Period") {
                                var meep = 0 - item.result;
                                awtStack.push(meep);
                            } else { awtStack.push(item.result); }
                        } else if(item.platformName === "Upwork" && item.dataType === "Wage" || item.platformName === "Upwork" && item.dataType === "Hours" || item.platformName === "Upwork" && item.dataType === "Period") {
                            if(upworkStack.indexOf(item.platformName) === -1) {
                                upworkStack.push(item.platformName);
                            }
                            if(item.dataType === "Period") {
                                var meep = 0 - item.result;
                                upworkStack.push(meep);
                            } else { upworkStack.push(item.result); }
                        }

                        var fiverrNewWage; var awtNewWage; var upworkNewWage;
                        var amazonOn = $("#AmazonMechanicalTurk").hasClass("menuOn");
                        var fiverrOn = $("#Fiverr").hasClass("menuOn");
                        var upworkOn = $("#Upwork").hasClass("menuOn");
                        
                        if(amazonOn === true && fiverrOn === true && upworkOn === true) {
                             stackOne = [fiverrStack[1],awtStack[1],upworkStack[1]];
                             stackTwo = [fiverrStack[2],awtStack[2],upworkStack[2]];
                             stackThree = [fiverrStack[3],awtStack[3],upworkStack[3]];
                             stackFour = [fiverrNewWage,awtNewWage,upworkNewWage]
                        } else if(amazonOn === true && fiverrOn === true && upworkOn === false) {
                             stackOne = [fiverrStack[1],awtStack[1]];
                             stackTwo = [fiverrStack[2],awtStack[2]];
                             stackThree = [fiverrStack[3],awtStack[3]];
                             stackFour = [fiverrNewWage,awtNewWage]
                        } else if(amazonOn === true && fiverrOn === false && upworkOn === true) {
                             stackOne = [awtStack[1],upworkStack[1]];
                             stackTwo = [awtStack[2],upworkStack[2]];
                             stackThree = [awtStack[3],upworkStack[3]];
                             stackFour = [awtNewWage,upworkNewWage]
                        } else {
                             stackOne = [fiverrStack[1],upworkStack[1]];
                             stackTwo = [fiverrStack[2],upworkStack[2]];
                             stackThree = [fiverrStack[3],upworkStack[3]];
                             stackFour = [fiverrNewWage,upworkNewWage]
                        }
                        
                        
                        
                    }

                    if(sc === resultsArray.length -1) { 

                        stackOrder;

                        if(stackOrder[0] === "Wage" && stackOrder[1] === "Hours") {
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackOne
                            })
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackTwo
                            })
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackThree
                            })

                            try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[2]) * parseFloat(fiverrStack[1])) / (parseFloat(fiverrStack[2]) + parseFloat(fiverrStack[3].toString().replace("-",''))));}catch(e){}
                            try{awtNewWage = parseFloat((parseFloat(awtStack[2]) * parseFloat(awtStack[1])) / (parseFloat(awtStack[2]) + parseFloat(awtStack[3].toString().replace("-",''))));}catch(e){}
                            try{upworkNewWage = parseFloat((parseFloat(upworkStack[2]) * parseFloat(upworkStack[1])) / (parseFloat(upworkStack[2]) + parseFloat(upworkStack[3].toString().replace("-",''))));}catch(e){}
                        } else if(stackOrder[0] === "Hours" && stackOrder[1] === "Wage")
                        {
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackOne
                            })
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackTwo
                            })
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackThree
                            })
                            
                            
                            try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[2]) * parseFloat(fiverrStack[1])) / (parseFloat(fiverrStack[1]) + parseFloat(fiverrStack[3].toString().replace("-",''))));}catch(e){}
                            try{awtNewWage = parseFloat((parseFloat(awtStack[2]) * parseFloat(awtStack[1])) / (parseFloat(awtStack[1]) + parseFloat(awtStack[3].toString().replace("-",''))));}catch(e){}
                            try{upworkNewWage = parseFloat((parseFloat(upworkStack[2]) * parseFloat(upworkStack[1])) / (parseFloat(upworkStack[1]) + parseFloat(upworkStack[3].toString().replace("-",''))));}catch(e){}
                        } else if(stackOrder[0] === "Period" && stackOrder[1] === "Hours")
                        {
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackOne
                            })
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackTwo
                            })
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackThree
                            })
                            
                            try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[3]) * parseFloat(fiverrStack[2])) / (parseFloat(fiverrStack[2]) + parseFloat(fiverrStack[1].toString().replace("-",''))));}catch(e){}
                            try{awtNewWage = parseFloat((parseFloat(awtStack[3]) * parseFloat(awtStack[2])) / (parseFloat(awtStack[2]) + parseFloat(awtStack[1].toString().replace("-",''))));}catch(e){}
                            try{upworkNewWage = parseFloat((parseFloat(upworkStack[3]) * parseFloat(upworkStack[2])) / (parseFloat(upworkStack[2]) + parseFloat(upworkStack[1].toString().replace("-",''))));}catch(e){}
                        } else if(stackOrder[0] === "Period" && stackOrder[1] === "Wage")
                        {
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackOne
                            })
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackTwo
                            })
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackThree
                            })
                            
                            
                            try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[3]) * parseFloat(fiverrStack[2])) / (parseFloat(fiverrStack[2]) + parseFloat(fiverrStack[1].toString().replace("-",''))));}catch(e){}
                            try{awtNewWage = parseFloat((parseFloat(awtStack[3]) * parseFloat(awtStack[2])) / (parseFloat(awtStack[2]) + parseFloat(awtStack[1].toString().replace("-",''))));}catch(e){}
                            try{upworkNewWage = parseFloat((parseFloat(upworkStack[3]) * parseFloat(upworkStack[2])) / (parseFloat(upworkStack[2]) + parseFloat(upworkStack[1].toString().replace("-",''))));}catch(e){}
                        } else if(stackOrder[0] === "Hours" && stackOrder[1] === "Period")
                        {
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackOne
                            })
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackTwo
                            })
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackThree
                            })
                            
                            
                            try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[3]) * parseFloat(fiverrStack[1])) / (parseFloat(fiverrStack[1]) + parseFloat(fiverrStack[2].toString().replace("-",''))));}catch(e){}
                            try{awtNewWage = parseFloat((parseFloat(awtStack[3]) * parseFloat(awtStack[1])) / (parseFloat(awtStack[1]) + parseFloat(awtStack[2].toString().replace("-",''))));}catch(e){}
                            try{upworkNewWage = parseFloat((parseFloat(upworkStack[3]) * parseFloat(upworkStack[1])) / (parseFloat(upworkStack[1]) + parseFloat(upworkStack[2].toString().replace("-",''))));}catch(e){}
                            
                        } else 
                        {
                            generatedData7.push ({
                                label:"Average Wage",
                                stack: 'Stack 2',
                                backgroundColor: 'rgba(14,177,146,.9)',
                                borderColor:'rgba(14,177,146,.9)',
                                borderWidth: 2,
                                data: stackOne
                            })
                            generatedData7.push ({
                            label:"Search Period",
                            stack: 'Stack 0',
                            backgroundColor: 'rgba(25,52,70,.9)',
                            borderColor:'rgba(25,52,70,.9)',
                            borderWidth: 2,
                            data: stackTwo
                            })
                            generatedData7.push ({
                                label:"Hours Worked",
                                stack: 'Stack 0',
                                backgroundColor: 'rgba(154,158,173,.9)',
                                borderColor:'rgba(154,158,173,.9)',
                                borderWidth: 2,
                                data: stackThree
                            })
                            
                        try{fiverrNewWage = parseFloat((parseFloat(fiverrStack[3]) * parseFloat(fiverrStack[1])) / (parseFloat(fiverrStack[3]) + parseFloat(fiverrStack[2].toString().replace("-",''))));}catch(e){}
                        try{awtNewWage = parseFloat((parseFloat(awtStack[3]) * parseFloat(awtStack[1])) / (parseFloat(awtStack[3]) + parseFloat(awtStack[2].toString().replace("-",''))));}catch(e){}
                        try{upworkNewWage = parseFloat((parseFloat(upworkStack[3]) * parseFloat(upworkStack[1])) / (parseFloat(upworkStack[3]) + parseFloat(upworkStack[2].toString().replace("-",''))));}catch(e){}
                        }

                        if(amazonOn === true && fiverrOn === true && upworkOn === true) {
                            var stackFour = [fiverrNewWage,awtNewWage,upworkNewWage];
                        } else if(amazonOn === true && fiverrOn === true && upworkOn === false) {
                            var stackFour = [fiverrNewWage,awtNewWage];
                        } else if(amazonOn === true && fiverrOn === false && upworkOn === true) {
                            var stackFour = [awtNewWage,upworkNewWage];
                        } else {
                            var stackFour = [fiverrNewWage,upworkNewWage];
                        }

                        generatedData7.push ({
                            label:"Adjusted Average Wage",
                            stack: 'Stack 1',
                            backgroundColor: 'rgba(44,48,63,.4)',
                            borderColor:'rgba(44,48,63,.4)',
                            borderWidth: 2,
                            data: stackFour
                        })

                        produceStackChart = true;

                        }
                    
                    if(stackOrder.indexOf(item.dataType) === -1) stackOrder.push(item.dataType);
                } else {
                    try{$("#chartStackGroup").remove();}catch(e){}
                }

                if(radarCounter > 2) {

                    if(item.dataType === "Worklife Balance" || item.dataType === "Culture" || item.dataType === "Benefits" || item.dataType === "Management" || item.dataType === "Job Security" || item.dataType === "Interest") {
                        
                        if(item.dataType === "Management") {
                            item.dataType = "Support";
                        } else if(item.dataType === "Culture") {
                            item.dataType = "Relationship";
                        }

                        $("#chart"+item.dataType.replace(/ /g, '')).remove();
                        generatedRadarXLabel1.push(item.dataType);
                        generatedRadarXPlats1.push(item.platformName);
                        generatedRadarXVals1.push(item.result);
                        //e
                    }
                    cc++
                    if(resultsArray.length === cc) {
                            var colCount = 0;
                            var uniqueGeneratedRadarXLabel1 = [];
                            var uniqueGeneratedRadarXPlats1 = [];
                            $.each(generatedRadarXLabel1, function(i, el){
                                if($.inArray(el, uniqueGeneratedRadarXLabel1) === -1) uniqueGeneratedRadarXLabel1.push(el);
                            });
                            $.each(generatedRadarXPlats1, function(i, el){
                                if($.inArray(el, uniqueGeneratedRadarXPlats1) === -1) uniqueGeneratedRadarXPlats1.push(el);
                            });
                            generatedRadarXLabel1 = uniqueGeneratedRadarXLabel1;
                            generatedRadarXPlats1 = uniqueGeneratedRadarXPlats1;

                            $( generatedRadarXPlats1 ).each(function( index, data ) {
                                if(!!data) {

                                    var colour = colourArray[colCount];

                                    if(radarCounter === 3) {
                                        if(colCount === 0) {
                                            var values = [generatedRadarXVals1[0],generatedRadarXVals1[1],generatedRadarXVals1[2]];
                                        } else if(colCount === 1) {
                                            var values = [generatedRadarXVals1[3],generatedRadarXVals1[4],generatedRadarXVals1[5]];
                                        } else {
                                            var values = [generatedRadarXVals1[6],generatedRadarXVals1[7],generatedRadarXVals1[8]];
                                        }
                                    } else if(radarCounter === 4) {
                                        if(colCount === 0) {
                                            var values = [generatedRadarXVals1[0],generatedRadarXVals1[1],generatedRadarXVals1[2],generatedRadarXVals1[3]];
                                        } else if(colCount === 1) {
                                            var values = [generatedRadarXVals1[4],generatedRadarXVals1[5],generatedRadarXVals1[6],generatedRadarXVals1[7]];
                                        } else {
                                            var values = [generatedRadarXVals1[8],generatedRadarXVals1[9],generatedRadarXVals1[10],generatedRadarXVals1[11]];
                                        }
                                    } else if(radarCounter === 5) {
                                        if(colCount === 0) {
                                            var values = [generatedRadarXVals1[0],generatedRadarXVals1[1],generatedRadarXVals1[2],generatedRadarXVals1[3],generatedRadarXVals1[4]];
                                        } else if(colCount === 1) {
                                            var values = [generatedRadarXVals1[5],generatedRadarXVals1[6],generatedRadarXVals1[7],generatedRadarXVals1[8],generatedRadarXVals1[9]];
                                        } else {
                                            var values = [generatedRadarXVals1[10],generatedRadarXVals1[11],generatedRadarXVals1[12],generatedRadarXVals1[13],generatedRadarXVals1[14]];
                                        }
                                    } else if(radarCounter === 6) {
                                        if(colCount === 0) {
                                            var values = [generatedRadarXVals1[0],generatedRadarXVals1[1],generatedRadarXVals1[2],generatedRadarXVals1[3],generatedRadarXVals1[4],generatedRadarXVals1[5]];
                                        } else if(colCount === 1) {
                                            var values = [generatedRadarXVals1[6],generatedRadarXVals1[7],generatedRadarXVals1[8],generatedRadarXVals1[9],generatedRadarXVals1[10]];
                                        } else {
                                            var values = [generatedRadarXVals1[11],generatedRadarXVals1[12],generatedRadarXVals1[13],generatedRadarXVals1[14],generatedRadarXVals1[15]];
                                        }
                                    }
                                    
                                    generatedData9.push ({
                                        label:data,
                                        backgroundColor: "rgba(0,0,0,0)",
                                        borderColor: colour,
                                        borderWidth: 4,
                                        data: values
                                    })
                                    colCount++;
                                }
                            })
                        produceRadarChart = true;
                    }
                } else {
                    try{$("#chartRadar").remove();}catch(e){}
                }
                

                if(item.dataType === "Rating" && n >= 2) {
                    generatedGraphLabel8.push(item.result);
                    generatedBarLabel8 = item.dataType+"Share";
                    
                    if(q <= n) {
                        itemShare.push(item.total);
                        nameShare.push(item.platformName);
                        q++;
                    }

                    if(q === n) {
                        generatedData8.push ({
                            label: nameShare,
                            backgroundColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)','rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)','rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderWidth: 2,
                            data: itemShare
                        })
                        produceShareChart = true;
                        q=0;
                        n=0;
                    }
                }

                if(item.dataType === "Gender" && t === 0) {
                    t++;
                    generatedGraphLabel19.push(item.dataType);
                    generatedBarLabel19 = item.dataType;
                    
                    var female = "Female";
                    var fint = item.female;
                    var male = "Male";
                    var mint = item.male;
                    var other = "Other";
                    var othint = item.other;
                    labelGender = [female,male,other];
                        generatedData19.push ({
                            label: labelGender,
                            backgroundColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)','rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)','rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderWidth: 2,
                            data: [fint,mint,othint]
                        })
                        produceGenderChart = true;
                }

                i++;

                
                sc++;
                
            })
            
            if(produceRatingChart === true) {
                if(document.getElementById("chart"+generatedBarLabel1.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel1.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel1.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel1.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel1.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData1
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel1
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel1
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceHoursChart === true) {
                if(document.getElementById("chart"+generatedBarLabel1x.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel1x.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1x.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel1x.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel1x.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1x.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel1x.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Highest", "Lowest", "Average"],
                        datasets: generatedData1x
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel1x
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Hours Worked Daily"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(producePlatformsChart === true) {
                if(document.getElementById("chart"+generatedBarLabel15.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel15.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel15.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel15.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel15.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel15.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel15.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Highest", "Lowest", "Average"],
                        datasets: generatedData15
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel15
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Platforms Used By Worker"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(producePeriodChart === true) {
                if(document.getElementById("chart"+generatedBarLabel16.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel16.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel16.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel16.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel16.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel16.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel16.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Highest", "Lowest", "Average"],
                        datasets: generatedData16
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel16
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Period Searching For Work"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceAgeChart === true) {
                if(document.getElementById("chart"+generatedBarLabel17.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel17.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel17.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel17.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel17.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel17.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel17.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Under 20", "20 to 40", "40 to 60", "Over 60"],
                        datasets: generatedData17
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel17
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Age Range"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceWageChart === true) {
                if(document.getElementById("chart"+generatedBarLabel1y.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel1y.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1y.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel1y.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel1y.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel1y.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel1y.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Most", "Minimum", "Average"],
                        datasets: generatedData1y
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel1y
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Hourly Wage ($)"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceBalanceChart === true) {
                if(document.getElementById("chart"+generatedBarLabel2.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel2.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel2.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel2.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel2.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel2.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel2.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData2
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel2
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel2
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceBenefitsChart === true) {
                if(document.getElementById("chart"+generatedBarLabel3.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel3.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel3.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel3.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel3.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel3.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel3.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData3
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel3
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel3
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceSecurityChart === true) {
                if(document.getElementById("chart"+generatedBarLabel4.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel4.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel4.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel4.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel4.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel4.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel4.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData4
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel4
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel4
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceManagementChart === true) {
                if(document.getElementById("barChartManagement") === null) {
                    $("#charts").append(' <section id="chartManagement" class="chart ">   <canvas id="barChartManagement" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel5.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chartManagement" class="chart ">   <canvas id="barChartManagement" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChartManagement");
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData5
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel5
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel5
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceCultureChart === true) {
                if(document.getElementById("chartCulture") === null) {
                    $("#charts").append(' <section id="chartCulture" class="chart ">   <canvas id="barChartCulture" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel6.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chartCulture" class="chart ">   <canvas id="barChartCulture" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChartCulture");
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData6
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel6
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: generatedBarLabel6
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }   

            if(produceStatusChart === true) {
                if(document.getElementById("chart"+generatedBarLabel7.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel7.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel7.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel7.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel7.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel7.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel7.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Current", "Former", "Average"],
                        datasets: generatedData77
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel7
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Rating By Employee Status"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }   

            if(produceStackChart === true) {
                if(document.getElementById("chartStackGroup") === null) {
                    $("#charts").append(' <section id="chartStackGroup" class="chart ">   <canvas id="barChartStackGroup" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chartStackGroup").remove();
                    $("#charts").append(' <section id="chartStackGroup" class="chart ">   <canvas id="barChartStackGroup" height="auto" width="auto"></canvas>  </section>')
                }
                const CHART = document.getElementById("barChartStackGroup");
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: generatedStackLabel16,
                        datasets: generatedData7,
                        fill: '-1'
                    },
                    options: {
                            tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        datasetFill: false,
                        responsive: true,
                        scales: {
                        xAxes: [{
                                stacked:true,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedStackXLabel1
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                stacked:true,
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Hours vs Search Period with Real Wage"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceInterestChart === true) {
                if(document.getElementById("chart"+generatedBarLabel18.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel18.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel18.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel18.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel18.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel18.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel18.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: ["Highest", "Lowest", "Average"],
                        datasets: generatedData18
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel18
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Task Interest and Variety"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

            if(produceRatingTimeChart === true) {
                if(document.getElementById("chartTime"+generatedBarLabel9.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chartTime'+generatedBarLabel9.replace(/ /g, '')+'" class="chart chartHalf">   <canvas id="barChartTime'+generatedBarLabel9.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chartTime"+generatedBarLabel9.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chartTime'+generatedBarLabel9.replace(/ /g, '')+'" class="chart chartHalf">   <canvas id="barChartTime'+generatedBarLabel9.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
                SortByDate();
                var finalDates = []
                $.each(seriesDates, function(i, el){
                    if($.inArray(el, finalDates) === -1) finalDates.push(el);
                });
                
                $.each(generatedData10, function(i, d){
                    if(finalDates.length>45) {
                        if(finalDates.length>d.data.length) {
                            var distance = finalDates.length - d.data.length;
                        }
                        if(distance > 5) {
                            finalDates = finalDates.slice(0, finalDates.length - distance);
                        }
                    }
                })
            
                const CHART = document.getElementById("barChartTime"+generatedBarLabel9.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'bar',
                    data: {
                        labels: finalDates,
                        datasets: generatedData10
                    },
                    options: {
                        responsive: true,
                        scales: {
                            scaleLabel: "<%= ' ' + value%>",
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    distribution: 'series',
                                    labelString:  generatedBarLabel9
                                },
                                ticks: {
                                    max: 1
                                }
                            }],
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true,
                                    max: 6
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Rating Over Time"
                    },
                    layout: {
                        padding: {
                            left: 10,
                            top:10
                        }
                    }
                    }
                });

            }

            
            if(produceShareChart === true) {
                if(document.getElementById("chart"+generatedBarLabel8.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel8.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel8.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel8.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel8.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel8.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel8.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'pie',
                    data: {
                        labels: nameShare,
                        datasets: generatedData8
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: false,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel8
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: false,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Estimated Market Share"
                    }
                    }
                });

            } 

            if(produceGenderChart === true) {
                t=0;
                if(document.getElementById("chart"+generatedBarLabel19.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel19.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel19.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel19.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel19.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel19.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel19.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'pie',
                    data: {
                        labels: labelGender,
                        datasets: generatedData19
                    },
                    options: {
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: false,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedBarLabel19
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: false,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Gender Pie Chart"
                    }
                    }
                });

            } 

            if(produceRadarChart === true) {
                if(document.getElementById("chartRadar") === null) {
                    $("#charts").append(' <section id="chartRadar" class="chart chartDar">   <canvas id="barChartRadar" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chartRadar").remove();
                    $("#charts").append(' <section id="chartRadar" class="chart chartDar">   <canvas id="barChartRadar" height="auto" width="auto"></canvas>  </section>')
                }
                const CHART = document.getElementById("barChartRadar");
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'radar',
                    data: {
                        labels: generatedRadarXLabel1,
                        datasets: generatedData9,
                        fill: '-1'
                    },
                    options: {
                        datasetFill: false,
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: false,
                                scaleLabel: {
                                    display: false,
                                    labelString:  "Radar"
                                },
                                ticks: {
                                    max: 3
                                }
                            }],
                        yAxes: [{
                                display: false,
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    },
                    title: {
                        fontSize: 26,
                        display: true,
                        text: "Comparison via Radar Chart"
                    },
                    layout: {
                        padding: {
                            left: 10
                        }
                    }
                    }
                });

            }

        }
        
        var mapMade = false;
        function createMap() {
            if(mapMade === false) {
                mapMade = true;
                $("#mapbar").css('display','block');
                var map = new Datamap({
                    scope: 'world',
                    element: document.getElementById('container1'),
                    projection: 'mercator',
                    height: 500,
                    fills: {
                    defaultFill: '#e8e9ec',
                    usa: '#2d3e50',
                    ind: '#18bb9c',
                    can: '#b1b4be',
                    },
                    geographyConfig: {
                        highlightOnHover: false,
                        popupOnHover: false
                    },
                    data: {
                    USA: {fillKey: 'usa' },
                    GBR: {fillKey: 'usa' },
                    FRA: {fillKey: 'usa' },
                    RUS: {fillKey: 'lt50' },
                    CAN: {fillKey: 'can' },
                    BRA: {fillKey: 'gt50' },
                    ARG: {fillKey: 'gt50'},
                    COL: {fillKey: 'gt50' },
                    AUS: {fillKey: 'gt50' },
                    IND: {fillKey: 'ind' },
                    PAK: {fillKey: 'ind' },
                    BRA: {fillKey: 'can' },
                    ZAF: {fillKey: 'gt50' },
                    MAD: {fillKey: 'gt50' }       
                    }
                })
            }
            // <div id="container1" style="position: relative; width: 80%; max-height: 450px;"></div>
        }

    })

</script>

</head>

<body>

<div id="headerTopSpacer"></div>
<div id="headerLeftSpacer"></div>

<header>
</header>

<div id="navigationLeftSpacer"></div>

<nav>
<section class="min hoverOff"> </section>
</nav>

<div id="mainLeftSpacer"><div id="mainLeftSpacer2"></div></div>
<div id="mainTopSpacer"></div>

<main>
    <div id="slider" class="hide"></div>
    <div id="charts"> </div>
    <div id="container1" style="float:left;margin-left:2.5%; width: 45%; max-height: 550px;">
        <div id="mapbar" style="display:none"><img src="build/img/mapbar.png" /></div>
    </div>
      
</main>

<footer>
    <img src="build/img/logout.png" onclick="clearUser()" />
    <img id="helper" src="build/img/help.png" />
</footer>

<div id="helpTips"></div>

</body>
</html>