<?php
   /*  function checkLogin($username,$password,$hashed){
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
        header("Location: login&form/loginBasic.php");
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
        header("Location: login&form/loginBasic.php");
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
            header("Location: login&form/loginBasic.php");
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
            header("Location: login&form/loginBasic.php");
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
    <link href="/SPATProject/public/build/css/jqcloud.css" rel="stylesheet">
    <link href="/SPATProject/public/build/js/slider/demo/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://datamaps.github.io/scripts/datamaps.world.min.js?v=1"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <script src="/SPATProject/public/build/js/slider/jQDateRangeSlider-min.js"></script>
    <script src="/SPATProject/public/build/js/jqcloud-1.0.4.js"></script>
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
            height:36px;
            width:158px;
            margin-left:6px;
            margin-bottom:7px;
            line-height:36px;
            cursor:pointer;
            border-radius:3px;
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

        #slider {
            float:left;
            width:calc(100vw - 320px);
            margin-left:50px;
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
            width:50%!important;
        }
        .chartDar {
            float:left!important;
            width:45%!important;
        }
        .chart{
            float:left;
            overflow:hidden;
            cursor:pointer;
            width:32%;
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

    </style>


<script>
    $( document ).ready(function() {
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
    })
</script>

<script>

    $( document ).ready(function() {

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
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Employee Status</section>' );
                } else if(value === "Review") {
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Sentiment</section>' );
                } else if(value === "Pros") {
                    
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
                                                try{generatedWords.push({text: value.Cons["0"], weight: 0, date: dt});}catch(e){}
                                                try{generatedWords.push({text: value.Review["0"], weight: 0, date: dt});}catch(e){}
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
                            if(option === "Location") { $("#mapbar").css('display','none'); mapMade=false; $("#container1").html('<div id="mapbar" style="display:none"><img src="/SPATProject/public/build/img/mapbar.png" /></div>'); }
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
            var timeStart = min;
            var timeEnd = max;
            //
            
            var newWordWeightedArray = [];
            var newWordArray = [];
            $.each(wordlist, function (index, sentence) {
                if(sentence.date >= timeStart && sentence.date <= timeEnd) {
                    try{var split = sentence.text.split(" ");
                    $.each(split, function (index, word) {
                        newWordArray.push(word)
                    })}catch(e){} 
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
                $("#bubble"+positivity).remove();
                $("#charts").append(' <div id="bubble'+positivity+'" style="float:left;width: calc(100vw - 250px); height: 300px;margin-left:50px; border: 0px solid #ccc;" ></div> ');
                $("#bubble"+positivity).jQCloud(newWordWeightedArray);
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

                if(dataType === "Rating" || dataType === "Date" || dataType === "Worklife Balance" || dataType === "Benefits" || dataType === "Job Security" || dataType === "Management" || dataType === "Culture") {
                    $.each(selectedOpts[i], function (index, numbers) {
                        var incomingNumber = parseInt(numbers[1]);
                        if( incomingNumber % 1 === 0 ) {
                            seriesData.push(incomingNumber);
                            var resultDate = new Date(numbers[2]);
                            if(!!prevDate) {
                                if(prevDate > resultDate) {
                                    seriesData.push(null);
                                }
                            }
                            
                            prevDate = new Date(numbers[2]);
                            if(resultDate >= timeStart && resultDate <= timeEnd) {
                                seriesDates.push(resultDate.toLocaleDateString("en-US"));
                                if(incomingNumber >= maxInt) { maxInt = incomingNumber;}
                                if(incomingNumber <= minInt) { minInt = incomingNumber;}
                                total = total + incomingNumber;
                                count++;
                            }
                        }
                    })
                        var result = parseFloat(Math.round(total/count * 100) / 100).toFixed(2);
                        resultsArray.push({platformName,dataType,maxInt,minInt,result,total,seriesData,seriesDates});
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
            loadBarChart(resultsArray);
        }

        function loadBarChart(resultsArray) {
            //$("#charts").html("");
            var generatedGraphLabel1 = [];var generatedGraphLabel2 = [];var generatedGraphLabel3 = [];var generatedGraphLabel4 = [];
            var generatedGraphLabel5 = [];var generatedGraphLabel6 = [];var generatedGraphLabel7 = [];var generatedGraphLabel8 = [];var generatedGraphLabel9 = [];
            var generatedRadarLabel1 = [];var generatedRadarLabel2 = [];
            var generatedRadarLabel3 = [];var generatedStatusLabel1 = [];var generatedStackLabel1 = [];

            var produceRatingChart = false;var produceBalanceChart = false;var produceRadarChart = false;var produceBenefitsChart = false;var produceShareChart = false;var produceRatingTimeChart = false;
            var produceSecurityChart = false;var produceManagementChart = false;var produceCultureChart = false;var produceStatusChart = false;var produceStackChart = false;

            var generatedBarLabel1 = "";var generatedBarLabel2 = "";var generatedBarLabel3 = "";var generatedBarLabel4 = "";var generatedBarLabel5 = "";
            var generatedBarLabel6 = "";var generatedBarLabel7 = "";var generatedBarLabel8 = "";var generatedBarLabel9 = "";

            var generatedRadarXLabel1 = []; var generatedRadarXPlats1 = []; var generatedRadarXLabel2 = ""; var generatedRadarXVals1 = [];
            var generatedRadarXLabel3 = "";var generatedStatusXLabel1 = "";var generatedStackXLabel1 = "";

            var generatedData1 = [];var generatedData2 = [];var generatedData3 = [];var generatedData4 = [];var generatedData5 = [];var generatedData6 = [];
            var generatedData77 = [];var generatedData8 = [];var generatedData9 = [];var generatedData10 = [];var generatedData11 = [];var generatedData12 = [];var generatedData13 = [];

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
                ];

            var i = 0;
            var q = 0;
            var n = 0;
            var radarCounter = 0;

            $( ".button2" ).each(function( index, data ) {
                if(data.id === "WorklifeBalance" && data.className === "button2 menuOn" ||
                data.id === "Culture" && data.className === "button2 menuOn" ||
                data.id === "Management" && data.className === "button2 menuOn" ||
                data.id === "JobSecurity" && data.className === "button2 menuOn" ||
                data.id === "Benefits" && data.className === "button2 menuOn" ) {
                    radarCounter++;
                }

            })

            $.each(resultsArray, function (index, item) {
                if(item.dataType === "Rating") {
                    n++;
                }
            })

            

            var cc = 0;

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
                    generatedBarLabel5 = item.dataType;
                    
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
                    generatedBarLabel6 = item.dataType;
                    
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


                if(radarCounter > 2) {

                    if(item.dataType === "Worklife Balance" || item.dataType === "Culture" || item.dataType === "Benefits" || item.dataType === "Management" || item.dataType === "Job Security") {
                        
                        $("#chart"+item.dataType.replace(/ /g, '')).remove();
                        generatedRadarXLabel1.push(item.dataType);
                        generatedRadarXPlats1.push(item.platformName);
                        generatedRadarXVals1.push(item.result);
                        
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

                i++;
                
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
                if(document.getElementById("chart"+generatedBarLabel5.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel5.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel5.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel5.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel5.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel5.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel5.replace(/ /g, ''));
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
                if(document.getElementById("chart"+generatedBarLabel6.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedBarLabel6.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel6.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedBarLabel6.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedBarLabel6.replace(/ /g, '')+'" class="chart ">   <canvas id="barChart'+generatedBarLabel6.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
            
                const CHART = document.getElementById("barChart"+generatedBarLabel6.replace(/ /g, ''));
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
                        display: true,
                        text: "Rating by Status of Employee"
                    },
                    layout: {
                        padding: {
                            left: 10
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
                        display: true,
                        text: "Estimated Market Share"
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

            if(produceStackChart === true) {
                if(document.getElementById("chart"+generatedStackLabel1.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedStackLabel1.replace(/ /g, '')+'" class="chart chartBig ">   <canvas id="barChart'+generatedStackLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedStackLabel1.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedStackLabel1.replace(/ /g, '')+'" class="chart chartBig ">   <canvas id="barChart'+generatedStackLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
                const CHART = document.getElementById("barChart"+generatedStackLabel1.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'radar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData7,
                        fill: '-1'
                    },
                    options: {
                        datasetFill: false,
                        responsive: true,
                        scales: {
                        xAxes: [{
                                stacked:true,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedStackLabel1
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
                        display: true,
                        text: generatedStackLabel1
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
                    if(finalDates.length>d.data.length) {
                        var distance = finalDates.length - d.data.length;
                    }
                    if(distance > 5) {
                        finalDates = finalDates.slice(0, finalDates.length - distance);
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
                        display: true,
                        text: generatedBarLabel9
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
        <div id="mapbar" style="display:none"><img src="/SPATProject/public/build/img/mapbar.png" /></div>
    </div>
    <!-- 
    <section id="chartddd" class="chart chartBig ">   <canvas id="barChart" height="auto" width="auto"> <?php include_once("barMagic.php"); ?></canvas>  </section>
      -->
      
</main>

<footer>
    <img src="/SPATProject/public/build/img/logout.png" onclick="clearUser()" />
    <img src="/SPATProject/public/build/img/help.png" />
</footer>

</body>
</html>