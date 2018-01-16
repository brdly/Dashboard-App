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
            height: 2300px;
            float: left;
            margin-top: -500px;
        }





    </style>
</head>
<body>

<div id="top"></div>
<div id="side"></div>
<div id="form">
    <form name="form1" method="post" action="../../public/passingdata.php">
        <h1>Please fill out the form:</h1>
        <div id="formFields">
            <label>What Platform are you reviewing? </label>
            <select name = "platform" required>
                <option value="Fiverr">Fiverr</option>
                <option value="Upwork">Upwork</option>
                <option value="Amazon Mechanical Turk">AMT</option>
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
            <select name = "worklife_balance" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate benefits or social support you receive, if any? </label>
            <select name = "benefits" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate your job security? </label>
            <select name="job_security" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate the management of the platform? </label>
            <select name = "management" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
            <label>How would you rate the culture?</label>
            <select name = "culture" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label>Are you a current or former employee?</label>
            <select name = "former_employee" required>
                <option value="Current">current</option>
                <option value="Former">former</option>
            </select>
            <label>Please write your review here: </label>
            <textarea  maxlength="425" name="review" rows="20" cols="80">

            </textarea>

            <label>Pros? </label>
            <textarea maxlength="50" name="pros" rows="10" cols="80">

            </textarea>
            <label>Cons?</label>
            <textarea maxlength="50" name="cons" rows="10" cols="80">

            </textarea>
        </div>
        <button type="submit">Submit</button>
    </form>


</body>
</html>