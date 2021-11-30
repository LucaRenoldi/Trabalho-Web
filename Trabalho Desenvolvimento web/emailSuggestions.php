<?php

if(isset($_POST['suggestion']) && !empty($_POST['suggestion']){

$username = addslashes($_POST['username']);
$suggestion = addslashes($_POST['suggestion']);


$to = "support@gmail.com";
$subject = "Suggestions of Find Teammates";
$body = "Username: ".$username."\n"."Suggestions: ".$suggestion;

$header = "From: findteammates@gmail.com"."\n\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Thank you!");
} else {
    echo("An erro has occurred, please check if you are filling the form correctly");
}
 

}

?>
