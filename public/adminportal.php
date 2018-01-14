<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <base href="">
    <meta charset="utf-8">
    <title>Admin Portal - Group 4</title>
    <meta name="description" content="Admin Portal for SPAT Task - Group 4.">

    <link href="https://fonts.googleapis.com/css?family=BenchNine:700" rel="stylesheet">
    <link href="/SPATProject/public/build/js/slider/demo/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <script src="/SPATProject/public/build/js/slider/jQDateRangeSlider-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <style>

        
        body {
            font-weight: 100;
            height: 100vh;
            width: 100vw;
            background-image: url(build/img/images7.jpg);
            background-size: auto auto;
            background-position: bottom right;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            /* background-color: white; */
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

        .chart{
            overflow:hidden;
            cursor:pointer;
        }

        .chartBig {
            margin-left:10%;
            width:70%!important;
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

        var allData;
        var selectedData = []; //for chosen platforms, auto-update the data on a timer
        //selectedData is all the data from the DB for the chosen platforms
        var selectedOpts = []; //if the above updates, reload the selected opts for all chosen platforms
        //selectedOpts is what the charts should pull their data from
        var oldestDate;
        var newestDate;
        var option;
        var platform;
        var menuAction = "disable";

        $("#slider").bind("valuesChanged", function(e, data){
            console.log("Values just changed. min: " + data.values.min + " max: " + data.values.max);
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
                $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">'+value+'</section>' );
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
                                                newArr2.push(index, value[option[1]]);
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
                        },
                        valueLabels:"change",
                        delayOut: 4000
                    });
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
                            if(selectedData) {
                                $.each(selectedData, function (index, platform_data) {
                                    var newArr1 = [];
                                    newArr1.push(platform_data[0],option);
                                    $.each(platform_data[1], function (index, value) {
                                        var newArr2 = [];
                                        newArr2.push(index, value[option]);
                                        newArr1.push(newArr2);
                                    })
                                        selectedOpts.push(newArr1);
                                })
                            } else { 
                                //please choose a platform 
                            }
                        } else {
                            if(selectedOpts) {
                                try{
                                    for(var i = 0; i < selectedOpts.length; i++) {
                                        if(selectedOpts[i][1] === option) {
                                            selectedOpts.splice( i, 1 );
                                            i--;
                                        }
                                    }
                                }catch(e) { 
                                    //please choose an option
                                }
                            }
                        }
                    
                        console.log(selectedOpts.toString())
                    } else {
                        alert("please choose a platform first");
                    }
                 }); 
        });

        

    })
    </script>

</head>
<body>

<div id="headerTopSpacer"></div>
<div id="headerLeftSpacer"></div>

<header>

<!--
    <section class="floatLeft hoverOff titlebox">ADMIN<br/>PORTAL</section>
    <section id="at" class="menuOn button">Amazon Turk</section>
    <section id="cf" class="button">CrowdFlower</section>
    <section id="cw" class="button">ClickWorker</section>
    <section id="cc" class="button">CloudCrowd</section>
    <section id="fv" class="button">Fiverr</section>
    <section id="up" class="button">Upwork</section>
//-->

</header>

<div id="navigationLeftSpacer"></div>

<nav>
<section class="min hoverOff"> </section>
<!--
    <section class="hoverOff"> </section>
    <section class="button menuOn">Overall Rating</section>
    <section class="button">Work/Life Balance</section>
    <section class="button">Worker Benefits</section>
    <section class="button">Job Security</section>
    <section class="button">Employee Status</section>
    <section class="button">Countries</section>
    <section class="button">Reviews</section>
    <section class="button">LOGOUT</section>
    //-->

</nav>

<div id="mainLeftSpacer"><div id="mainLeftSpacer2"></div></div>
<div id="mainTopSpacer"></div>

<main>

    <div id="slider" class="hide"></div>

    <section id="chartOne" class="chart chartBig ">  <?php include_once("barMagic.php"); ?> </section>
    <section id="chartTwo" class="chart hide"> <?php include_once("lineMagic.php");  ?> </section>
    <section id="chartThree" class="chart hide"> <?php include_once("doughnutMagic.php");  ?> </section>

</main>

<footer>
    <img src="/SPATProject/public/build/img/logout.png" />
    <img src="/SPATProject/public/build/img/help.png" />
</footer>

</body>
</html>