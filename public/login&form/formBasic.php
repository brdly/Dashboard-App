<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>

        body
        {

        }

        #form
        {
            margin: 130px;
        }

        #formFields *
        {
            display: block;
            margin-bottom: 10px;

        }

        h1
        {
            font-size: 20px;
            margin-bottom: 40px;


        }

        #top
        {
            background-color:rgb(45,62,80);
            width: 2000px;
            height: 200px;
            margin-top: -2%;
        }

        #side
        {
            background-color:rgb(45,62,80);
            width: 6%;
            height: 2100px;
            float: left;
            margin-top: -500px;
        }





    </style>
</head>
<body>

<div id="top"></div>
<div id="side"></div>
<div id="form">
    <form name="form1" method="post" action="passingdata.php">
        <h1>Please fill out the form:</h1>
        <div id="formFields">

            <label>What Platform are you reviewing? </label>
            <select>
                <option value="Fiverr">Fiverr</option>
                <option value="Upwork">Upwork</option>
                <option value="AMT">AMT</option>
                <option value="CrowdFlower">CrowdFlower</option>
                <option value="ClickWorker">ClickWorker</option>

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
    <button type="submit">Submit</button>

</body>
</html>