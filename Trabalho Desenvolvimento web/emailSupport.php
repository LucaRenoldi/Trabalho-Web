<?php

if(isset($_POST['problem']) && !empty($_POST['problem']){

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$problem = addslashes($_POST['problem']);


$to = "support@gmail.com";
$subject = "Problem of Find Teammates";
$body = "Name: ".$name."\n"."Email: ".$email."\n"."Problem: ".$problem;

$header = "From: findteammates@gmail.com"."\n\n"."Reply-to: ".$email."\n\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("We will try our best to solve your problem as quick as possible!");
} else {
    echo("An erro has occurred, please check if you are filling the form correctly");
}
 

}

?>