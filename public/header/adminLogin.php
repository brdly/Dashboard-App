<?php
function checkLogin($username,$password,$hashed){
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

}else {
    $fail = true;
    if (isset($_SESSION["Username"]) && isset($_SESSION["Password"])) {
        if (checkLogin($_SESSION["Username"], $_SESSION["Password"], true)) { //Session here is hashed.
            $fail = false;
        }
    }
    if ($fail) {
        $_SESSION['login'] = "please log in";
        header("Location: login&form/loginBasic.php");
        die();
    }
    //header("Location: login&form/loginBasic.php");
    //exit();
}
?>