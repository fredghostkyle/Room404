<?php
//Remove errors from the page.
error_reporting(0);

/*
 * Setting up the comic's settings
 */
//first check to see if you changed pages
if (isset($_GET["page"])) {
    $page = $_GET["page"]; //set new page
    setcookie("page", $page);
}
    //setup $page & determen if new.
    elseif(isset($_COOKIE["page"])) { //no new page found? check to see if returning visitor or not
        $page = $_COOKIE["page"]; //not new user. will move to page last seen by cookie.
    }
        else { //well your a new user! Welcome! 
            $welcome = true; //new user
            $page = 1; //make page defult 
            setcookie("page", 000001); //now NOT new user
        } 

/*
 * Exceicute anything from the cog/Page Placment (note:must be placed above comic setup).
 */

if (isset($_GET["save"])) { //save
    
    setcookie("page", $page); //now NOT new user
}

if (isset($_GET["reset"])) { //reset (page 1)
    
    setcookie("page", 000001); //reset cookie
    $page =1; //reset from previous information given to the server
}

/*
 * Setting up the comic
 */

//regular display of text
$textPath = "./comicfiles/".$page."/lines.txt";
$text = file_get_contents($textPath, FILE_USE_INCLUDE_PATH);

//image path
$image = "./comicfiles/".$page."/image.png";

//title path
$titlePath = "./comicfiles/".$page."/title.txt";
$title =  file_get_contents($titlePath, FILE_USE_INCLUDE_PATH);
?>