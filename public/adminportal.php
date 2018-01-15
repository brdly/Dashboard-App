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

        .chart{
            float:left;
            overflow:hidden;
            cursor:pointer;
            width:48%;
            height:auto;
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
        var menuAction = "disable";

        $("#slider").bind("valuesChanged", function(e, data){
            min = data.values.min;
            max = data.values.max;
            loadChartData(selectedOpts);
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
                    $( "nav" ).append( '<section id="'+value.replace(/ /g, '')+'" title="'+value+'" class="button2">Reviews</section>' );
                } else {
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
                                                newArr2.push(index, value[option[1]],value["Date"],value["Former Employee"]);
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
                            if(selectedData) {
                                $.each(selectedData, function (index, platform_data) {
                                    var newArr1 = [];
                                    newArr1.push(platform_data[0],option);
                                    $.each(platform_data[1], function (index, value) {
                                        var newArr2 = [];
                                        if(option === "Former Employee") { 
                                            newArr2.push(index, value["Rating"],value["Date"],value["Former Employee"]);
                                        } else {
                                            newArr2.push(index, value[option],value["Date"],value["Former Employee"]);
                                        }
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

        function loadChartData(selectedOpts) {
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


                if(dataType === "Rating" || dataType === "Worklife Balance" || dataType === "Benefits" || dataType === "Job Security" || dataType === "Management" || dataType === "Culture") {
                    $.each(selectedOpts[i], function (index, numbers) {
                        var incomingNumber = parseInt(numbers[1]);
                        if( incomingNumber ) {
                            var resultDate = new Date(numbers[2]);
                            if(resultDate >= timeStart && resultDate <= timeEnd) {
                                if(incomingNumber >= maxInt) { maxInt = incomingNumber;}
                                if(incomingNumber <= minInt) { minInt = incomingNumber;}
                                total = total + incomingNumber;
                                count++;
                            }
                        }
                    })
                        var result = parseFloat(Math.round(total/count * 100) / 100).toFixed(2);
                        resultsArray.push({platformName,dataType,maxInt,minInt,result,total});
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
                        resultsArray.push({platformName,dataType,currentRating,formerRating,result});
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

            var produceRatingChart = false;var produceBalanceChart = false;var produceRadarChart = false;var produceBenefitsChart = false;var produceShareChart = false;
            var produceSecurityChart = false;var produceManagementChart = false;var produceCultureChart = false;var produceStatusChart = false;var produceStackChart = false;

            var generatedBarLabel1 = "";var generatedBarLabel2 = "";var generatedBarLabel3 = "";var generatedBarLabel4 = "";var generatedBarLabel5 = "";
            var generatedBarLabel6 = "";var generatedBarLabel7 = "";var generatedBarLabel8 = "";var generatedBarLabel9 = "";

            var generatedRadarXLabel1 = "";var generatedRadarXLabel2 = "";
            var generatedRadarXLabel3 = "";var generatedStatusXLabel1 = "";var generatedStackXLabel1 = "";

            var generatedData1 = [];var generatedData2 = [];var generatedData3 = [];var generatedData4 = [];var generatedData5 = [];var generatedData6 = [];
            var generatedData7 = [];var generatedData8 = [];var generatedData9 = [];var generatedData10 = [];var generatedData11 = [];var generatedData12 = [];var generatedData13 = [];

            var currentChart = "";
            var nameShare = [];
            var itemShare = [];

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

                if(item.dataType === "Worklife Balance") {
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

                

                if(item.dataType === "Benefits") {
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

                

                if(item.dataType === "Job Security") {
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

                

                if(item.dataType === "Management") {
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

                

                if(item.dataType === "Culture") {
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
                    
                    generatedData7.push ({
                        label:item.platformName,
                        backgroundColor: colourArray[i],
                        borderColor:colourArray[i],
                        borderWidth: 2,
                        data: [item.currentRating,item.formerRating,item.result]
                    })
                    produceStatusChart = true;
                }

                

                if(item.dataType === "Rating" && resultsArray.length >= 2) {
                    generatedGraphLabel8.push(item.result);
                    generatedBarLabel8 = item.dataType+"Share";
                    
                    if(q <= resultsArray.length) {
                        itemShare.push(item.total);
                        nameShare.push(item.platformName);
                        q++;
                    }

                    if(q === resultsArray.length) {
                        generatedData8.push ({
                            label: nameShare,
                            backgroundColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)',
                'rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderColor: ['rgba(15,42,60,.7)','rgba(4,167,136,.7)','rgba(144,148,163,.7)',
                'rgba(25,52,70,.9)','rgba(14,177,146,.9)','rgba(154,158,173,.9)'],
                            borderWidth: 2,
                            data: itemShare
                        })
                        produceShareChart = true;
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
                        datasets: generatedData7
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
                if(document.getElementById("chart"+generatedRadarLabel1.replace(/ /g, '')) === null) {
                    $("#charts").append(' <section id="chart'+generatedRadarLabel1.replace(/ /g, '')+'" class="chart chartBig ">   <canvas id="barChart'+generatedRadarLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                } else {
                    $("#chart"+generatedRadarLabel1.replace(/ /g, '')).remove();
                    $("#charts").append(' <section id="chart'+generatedRadarLabel1.replace(/ /g, '')+'" class="chart chartBig ">   <canvas id="barChart'+generatedRadarLabel1.replace(/ /g, '')+'" height="auto" width="auto"></canvas>  </section>')
                }
                const CHART = document.getElementById("barChart"+generatedRadarLabel1.replace(/ /g, ''));
                Chart.defaults.scale.ticks.beginAtZero = true;

                let barChart = new Chart(CHART,{
                    type: 'radar',
                    data: {
                        labels: ["High", "Low", "Average"],
                        datasets: generatedData3,
                        fill: '-1'
                    },
                    options: {
                        datasetFill: false,
                        responsive: true,
                        scales: {
                        xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString:  generatedRadarLabel1
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
                        text: generatedRadarLabel1
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
                    }
                    }
                });

            }

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

    <!-- 
    <section id="chartddd" class="chart chartBig ">   <canvas id="barChart" height="auto" width="auto"> <?php include_once("barMagic.php"); ?></canvas>  </section>
      -->
      
</main>

<footer>
    <img src="/SPATProject/public/build/img/logout.png" />
    <img src="/SPATProject/public/build/img/help.png" />
</footer>

</body>
</html>